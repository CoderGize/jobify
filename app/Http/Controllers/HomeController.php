<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\First;

use App\Models\Second;

use App\Models\Service;

use App\Models\Show;

use App\Models\Pricing;

use App\Models\Counter;

use App\Models\Testimonial;

use App\Models\Social;

use App\Models\Promo;

use Illuminate\Support\Facades\Mail;

use App\Mail\Message;

use App\Mail\Agent;

class HomeController extends Controller
{
    public function index()
    {
        $first = first::find(1);

        $second = second::find(1);

        $service = service::latest()->get();

        $pricing = pricing::all();

        $show = show::find(1);

        $social = social::find(1);

        $counter = counter::find(1);

        $testimonial = testimonial::latest()->get();

        return view('home.home', compact(
            'first',
            'second',
            'service',
            'show',
            'pricing',
            'counter',
            'testimonial',
            'social'
        ));
    }

    public function message(Request $request)
    {
        if ($request->promo)
        {
            $messageData = [
                'Name' => $request->name,
                'Phone' => $request->phone,
                'Email' => $request->email,
                'Plan' => $request->plan,
                'Promo' => $request->promo,
            ];

            $agent = promo::where('promo', '=', $request->promo)->first();

            if ($agent)
            {
                if ($agent->active == 1)
                {
                    $agentData = [
                        'Name' => $agent->name,
                        'Plan' => $request->plan,
                        'Nn' => $request->name,
                    ];


                    $agent->use = $agent->use + 1;

                    $agent->save();

                    Mail::to($agent->email)->send((new Agent($agentData))->with('agent', $agent));

                    Mail::to('anthony123moussa456@gmail.com')->send(new Message($messageData));

                    return redirect('/#contact')->with('message', 'Message Sent');
                }
                elseif ($agent->active == 0)
                {
                    return redirect()->with('notactive', 'This Promo Code is not Active');
                }
            }
            else
            {
                return redirect('/#contact')->with('promoerr', 'This Promo Code is not in our record');
            }

        }
        else
        {
            $messageData = [
                'Name' => $request->name,
                'Phone' => $request->phone,
                'Email' => $request->email,
                'Plan' => $request->plan,
                'Promo' => $request->promo,
            ];

            Mail::to('anthony123moussa456@gmail.com')->send(new Message($messageData));

            return redirect('/#contact')->with('message', 'Message Sent');
        }

    }
}
