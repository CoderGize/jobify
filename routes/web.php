<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\CmsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|--------------------------------------------------------------------------
| Cms Routes
|--------------------------------------------------------------------------
*/
Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/', [CmsController::class, 'dash']);

    // {{ User }}
    Route::get('online-user', [CmsController::class, 'onlineuser']);
    Route::get('/show_user', [CmsController::class, 'show_user']);
    Route::get('/delete_user/{id}', [CmsController::class, 'delete_user']);
    Route::get('/update_user/{id}', [CmsController::class, 'update_user']);
    Route::post('/update_user_confirm/{id}', [CmsController::class, 'update_user_confirm']);

    //{{ Mission }}
    Route::get('/show_mission', [CmsController::class, 'show_mission']);
    Route::post('/update_mission', [CmsController::class, 'update_mission']);

    //{{ Second }}
    Route::get('/show_second', [CmsController::class, 'show_second']);
    Route::post('/update_second', [CmsController::class, 'update_second']);

    //{{ Service }}
    Route::get('/show_service', [CmsController::class, 'show_service']);
    Route::post('/add_service', [CmsController::class, 'add_service']);
    Route::post('/update_service/{id}', [CmsController::class, 'update_service']);
    Route::get('/delete_service/{id}', [CmsController::class, 'delete_service']);

    //{{ Show }}
    Route::get('/show_show', [CmsController::class, 'show_show']);
    Route::post('/update_show', [CmsController::class, 'update_show']);

    //{{ Counter }}
    Route::get('/show_counter', [CmsController::class, 'show_counter']);
    Route::post('/update_counter', [CmsController::class, 'update_counter']);

    //{{ Pricing }}
    Route::get('/show_pricing', [CmsController::class, 'show_pricing']);
    Route::post('/add_pricing', [CmsController::class, 'add_pricing']);
    Route::post('/update_pricing/{id}', [CmsController::class, 'update_pricing']);
    Route::get('/delete_pricing/{id}', [CmsController::class, 'delete_pricing']);

    //{{ Testimonial }}
    Route::get('/show_testimonial', [CmsController::class, 'show_testimonial']);
    Route::post('/add_testimonial', [CmsController::class, 'add_testimonial']);
    Route::post('/update_testimonial/{id}', [CmsController::class, 'update_testimonial']);
    Route::get('/delete_testimonial/{id}', [CmsController::class, 'delete_testimonial']);

    //{{ Promo }}
    Route::get('/show_promo', [CmsController::class, 'show_promo']);
    Route::post('/add_promo', [CmsController::class, 'add_promo']);
    Route::post('/update_promo/{id}', [CmsController::class, 'update_promo']);
    Route::get('/delete_promo/{id}', [CmsController::class, 'delete_promo']);

    // {{ Social }}
    Route::get('/show_social', [CmsController::class, 'show_social']);
    Route::get('/update_social/{id}', [CmsController::class, 'update_social']);
    Route::post('/update_social_confirm/{id}', [CmsController::class, 'update_social_confirm']);
});

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index']);
Route::post('/message', [HomeController::class, 'message']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
