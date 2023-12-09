<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;

use Intervention\Image\Facades\Image;

use Illuminate\Support\Facades\Storage;

use Intervention\Image\Facades\Image as InterventionImage;

use App\Models\User;

use App\Models\First;

use App\Models\Second;

use App\Models\Service;

use App\Models\Show;

use App\Models\Pricing;

use App\Models\Counter;

use App\Models\Testimonial;

use App\Models\Social;

use App\Models\Promo;

class CmsController extends Controller
{
    public function dash()
    {
        return view('admin.home');
    }

    public function show_user()
    {
        $user = user::paginate(10);
        return view('admin.user.show_users', compact('user'));
    }

    public function delete_user($id)
    {
        $user = user::find($id);

        $user->delete();

        if ($user != null)
        {
            return redirect()->back()->with('message', 'User Deleted Successfully!');
        }
        else
        {
            return redirect()->back()->with('error', 'Error: User Not Deleted!');
        }
    }

    public function update_user($id)
    {
        $user = user::find($id);

        return view('admin.user.update_user', compact('user'));
    }

    public function update_user_confirm(Request $request, $id)
    {
        $user = user::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->usertype = $request->usertype;

        $user->save();

        if ($user->save()) {
            return redirect('admin/show_user')->with('message', 'User updated successfully!');
        } else {
            return redirect('admin/show_user')->with('error', 'Failed to update user!');
        }
    }

    public function show_mission()
    {
        $first = first::find(1);

        return view('admin.mission.show_mission', compact('first'));
    }

    public function update_mission(Request $request)
    {
        $first = first::find(1);

        $first->title = $request->title;
        $first->subtitle = $request->subtitle;
        $first->text = $request->text;

        $img1 = $request->img1;
        $img2 = $request->img2;
        $img3 = $request->img3;

        if ($img1) {
            $img1name = Str::random(20) . '.' . $img1->getClientOriginalExtension();

            // Save the original image
            $request->img1->move('first', $img1name);

            // Change the image quality using Intervention Image
            $img1 = Image::make(public_path('first/' . $img1name));
            $img1->encode($img1->extension, 10)->save(public_path('first/' . $img1name)); // Adjust quality as needed

            $first->img1 = $img1name;
        }

        if ($img2) {
            $img2name = Str::random(20) . '.' . $img2->getClientOriginalExtension();

            // Save the original image
            $request->img2->move('first', $img2name);

            // Change the image quality using Intervention Image
            $img2 = Image::make(public_path('first/' . $img2name));
            $img2->encode($img2->extension, 10)->save(public_path('first/' . $img2name)); // Adjust quality as needed

            $first->img2 = $img2name;
        }

        if ($img3) {
            $img3name = Str::random(20) . '.' . $img3->getClientOriginalExtension();

            // Save the original image
            $request->img3->move('first', $img3name);

            // Change the image quality using Intervention Image
            $img3 = Image::make(public_path('first/' . $img3name));
            $img3->encode($img3->extension, 10)->save(public_path('first/' . $img3name)); // Adjust quality as needed

            $first->img3 = $img3name;
        }

        $first->save();

        return redirect()->back()->with('message', 'Mission Section Updated');

    }

    public function show_second()
    {
        $second = second::find(1);

        return view('admin.second.show_second', compact('second'));
    }

    public function update_second(Request $request)
    {
        $second = second::find(1);

        $second->title = $request->title;
        $second->subtitle = $request->subtitle;
        $second->title1 = $request->title1;
        $second->title2 = $request->title2;
        $second->text1 = $request->text1;
        $second->text2 = $request->text2;

        $second->Save();

        return redirect()->back()->with('message', 'Second Section Updated');
    }

    public function show_service()
    {
        $service = service::latest()->paginate(10);

        return view('admin.service.show_service', compact('service'));
    }

    public function add_service(Request $request)
    {
        $service = new service;

        $img = $request->img;
        $service->title = $request->title;
        $service->text = $request->text;

        if ($img) {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            // Save the original image
            $request->img->move('service', $imgname);

            // Change the image quality using Intervention Image
            $img = Image::make(public_path('service/' . $imgname));
            $img->encode($img->extension, 10)->save(public_path('service/' . $imgname)); // Adjust quality as needed

            $service->img = $imgname;
        }

        $service->save();

        return redirect()->back()->with('message', 'Service Added');
    }

    public function update_service(Request $request, $id)
    {
        $service = service::find($id);

        $img = $request->img;
        $service->title = $request->title;
        $service->text = $request->text;

        if ($img) {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            // Save the original image
            $request->img->move('service', $imgname);

            // Change the image quality using Intervention Image
            $img = Image::make(public_path('service/' . $imgname));
            $img->encode($img->extension, 10)->save(public_path('service/' . $imgname)); // Adjust quality as needed

            $service->img = $imgname;
        }

        $service->save();

        return redirect()->back()->with('message', 'Service Updated');
    }

    public function delete_service($id)
    {
        $service = service::find($id);

        $service->delete();

        return redirect()->back()->with('message', 'Service Deleted');
    }

    public function show_show()
    {
        $show = show::find(1);

        return view('admin.show.show_show', compact('show'));
    }

    public function update_show(Request $request)
    {
        $show = show::find(1);

        $img1 = $request->img1;
        $img2 = $request->img2;

        $show->title = $request->title;
        $show->subtitle = $request->subtitle;

        if ($img1) {
            $img1name = Str::random(20) . '.' . $img1->getClientOriginalExtension();

            // Save the original image
            $request->img1->move('show', $img1name);

            // Change the image quality using Intervention Image
            $img1 = Image::make(public_path('show/' . $img1name));
            $img1->encode($img1->extension, 10)->save(public_path('show/' . $img1name)); // Adjust quality as needed

            $show->img1 = $img1name;
        }

        if ($img2) {
            $img2name = Str::random(20) . '.' . $img2->getClientOriginalExtension();

            // Save the original image
            $request->img2->move('show', $img2name);

            // Change the image quality using Intervention Image
            $img2 = Image::make(public_path('show/' . $img2name));
            $img2->encode($img2->extension, 10)->save(public_path('show/' . $img2name)); // Adjust quality as needed

            $show->img2 = $img2name;
        }

        $show->save();

        return redirect()->back()->with('message', 'Show Section Updated');
    }

    public function show_pricing()
    {
        $pricing = pricing::latest()->paginate(10);

        return view('admin.pricing.show_pricing', compact('pricing'));
    }

    public function add_pricing(Request $request)
    {
        $pricing = new pricing;

        $pricing->name = $request->name;
        $pricing->text = $request->text;
        $pricing->price = $request->price;

        $pricing->save();

        return redirect()->back()->with('message', 'Pricing Added');
    }

    public function update_pricing(Request $request, $id)
    {
        $pricing = pricing::find(1);

        $pricing->name = $request->name;
        $pricing->text = $request->text;
        $pricing->price = $request->price;

        $pricing->save();

        return redirect()->back()->with('message', 'Pricing Updated');
    }

    public function delete_pricing($id)
    {
        $pricing = pricing::find($id);

        $pricing->delete();

        return redirect()->back()->with('message', 'Pricing Deleted');
    }

    public function show_counter()
    {
        $counter = counter::find(1);

        return view('admin.counter.show_counter', compact('counter'));
    }

    public function update_counter(Request $request)
    {
        $counter = counter::find(1);

        $counter->title1 = $request->title1;
        $counter->num1 = $request->num1;
        $counter->text1 = $request->text1;

        $counter->title2 = $request->title2;
        $counter->num2 = $request->num2;
        $counter->text2 = $request->text2;

        $counter->title3 = $request->title3;
        $counter->num3 = $request->num3;
        $counter->text3 = $request->text3;

        $counter->title4 = $request->title4;
        $counter->num4 = $request->num4;
        $counter->text4 = $request->text4;

        $counter->save();

        return redirect()->back()->with('message', 'Counter Updated');

    }

    public function show_testimonial()
    {
        $testimonial = testimonial::latest()->paginate(10);

        return view('admin.testimonial.show_testimonial', compact('testimonial'));
    }

    public function add_testimonial(Request $request)
    {
        $testimonial = new testimonial;

        $testimonial->star = $request->star;
        $testimonial->message = $request->message;
        $testimonial->name = $request->name;
        $testimonial->role = $request->role;

        $testimonial->save();

        return redirect()->back()->with('message', 'Testimonial Added');
    }

    public function update_testimonial(Request $request, $id)
    {
        $testimonial = testimonial::find($id);

        $testimonial->star = $request->star;
        $testimonial->message = $request->message;
        $testimonial->name = $request->name;
        $testimonial->role = $request->role;

        $testimonial->save();

        return redirect()->back()->with('message', 'Testimonial Updated');
    }

    public function delete_testimonial($id)
    {
        $testimonial = testimonial::find($id);

        $testimonial->delete();

        return redirect()->back()->with('message', 'Testimonial Deleted');
    }

     public function show_social()
    {
        $social = social::all();

        return view('admin.social.show_social', compact('social'));
    }

    public function update_social($id)
    {
        $social = social::find($id);

        return view('admin.social.update_social', compact('social'));
    }

    public function update_social_confirm(Request $request, $id)
    {
        $social = social::find($id);

        $social->phone = $request->phone;
        $social->mail = $request->mail;
        $social->location = $request->location;
        $social->map = $request->map;
        $social->instagram = $request->instagram;
        $social->facebook = $request->facebook;
        $social->tiktok = $request->tiktok;
        $social->twitter = $request->twitter;
        $social->youtube = $request->youtube;
        $social->whatsapp = $request->whatsapp;
        $social->linkedin = $request->linkedin;
        $social->discord = $request->discord;
        $social->medium = $request->medium;
        $social->behance = $request->behance;

        $social->map_sh = $request->map_sh;
        $social->location_sh = $request->location_sh;
        $social->instagram_sh = $request->instagram_sh;
        $social->facebook_sh = $request->facebook_sh;
        $social->tiktok_sh = $request->tiktok_sh;
        $social->twitter_sh = $request->twitter_sh;
        $social->youtube_sh = $request->youtube_sh;
        $social->whatsapp_sh = $request->whatsapp_sh;
        $social->linkedin_sh = $request->linkedin_sh;
        $social->discord_sh = $request->discord_sh;
        $social->behance_sh = $request->behance_sh;
        $social->medium_sh = $request->medium_sh;

        $social->save();

        if ($social->save()) {
            return redirect('admin/show_social')->with('message', 'Social Media table updated successfully!');
        } else {
            return redirect('admin/show_social')->with('error', 'Failed to update Social Media Table!');
        }
    }

    public function show_promo()
    {
        $promo = promo::latest()->paginate(10);

        return view('admin.promo.show_promo', compact('promo'));
    }

    public function add_promo(Request $request)
    {
        $promo = new promo;

        $promo->promo = $request->promo;
        $promo->email = $request->email;
        $promo->name = $request->name;
        $promo->phone = $request->phone;
        $promo->use = '0';
        $promo->active = $request->active;

        $promo->save();

        return redirect()->back()->with('message', 'Promo Added');
    }

    public function update_promo(Request $request, $id)
    {
        $promo = promo::find($id);

        $promo->promo = $request->promo;
        $promo->email = $request->email;
        $promo->name = $request->name;
        $promo->phone = $request->phone;
        $promo->use = $promo->use;
        $promo->active = $request->active;

        $promo->save();

        return redirect()->back()->with('message', 'Promo Updated');
    }

    public function delete_promo($id)
    {
        $promo = promo::find($id);

        $promo->delete();

        return redirect()->back()->with('message', 'Promo Deleted');
    }

}
