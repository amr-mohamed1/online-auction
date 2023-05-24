<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FeedBackController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('website.index');
})->name('index');

Route::get('/about', function () {
    return view('website.about');
})->name('about');

Route::get('/auctions', function () {
    return view('website.auctions');
})->name('auctions');

Route::get('/site_login', function () {
    return view('website.login');
})->name('site_login');
Route::post('/login_method',[\App\Http\Controllers\AuthController::class,'login'])->name('login_method');

Route::get('/signup', function () {
    return view('website.signup');
})->name('signup');

Route::get('/supplier_signup', function () {
    return view('website.supplier_signup');
})->name('supplier_signup');
Route::post('/register_supplier',[\App\Http\Controllers\AuthController::class,'register_supplier'])->name('register_supplier');

Route::get('/user_signup', function () {
    return view('website.user_signup');
})->name('user_signup');
Route::post('/register_user',[\App\Http\Controllers\AuthController::class,'register_user'])->name('register_user');

Route::get('/passwordReset', function () {
    return view('website.passwordReset');
})->name('passwordReset');

Route::get('/confirm_password', function () {
    return view('website.confirm_password');
})->name('confirm_password');

Route::get('/homepage', function () {
    return view('website.homepage');
})->name('homepage');

Route::get('/sellcenter', function () {
    return view('website.sellcenter');
})->name('sellcenter');

Route::get('/all_products', function () {
    return view('website.all_products');
})->name('all_products');

Route::get('/product', function () {
    return view('website.product');
})->name('product');

Route::get('/product_dashboard', function () {
    return view('website.product_dashboard');
})->name('product_dashboard');

Route::get('/profile', function () {
    return view('website.profile');
})->name('profile');

Route::get('/edit_profile', function () {
    return view('website.edit_profile');
})->name('edit_profile');

Route::get('/assigned-contract', function () {
    return view('website.assigned-contract');
})->name('assigned-contract');

Route::get('/yourorders', function () {
    return view('website.yourorders');
})->name('yourorders');

Route::get('/report-user', function () {
    return view('website.report');
})->name('report-user');


Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'admin_dashboard', 'as' => 'admin.'], function () {
        Route::get('/', function () {
            return view('admin.dash');
        });



        Route::get('/dashboard', function () {
            return view('admin.dash');
        })->middleware(['auth'])->name('dashboard');


        /*
        |--------------------------------------------------------------------------
        | Blogs Routes
        |--------------------------------------------------------------------------
        */
        Route::resource('blogs',BlogController::class);
        Route::Post('/blogs/delete', [BlogController::class, 'delete'])->name('blogs.delete');


        /*
        |--------------------------------------------------------------------------
        | Cities Routes
        |--------------------------------------------------------------------------
        */
        Route::resource('cities',CityController::class);
        Route::Post('/cities/delete', [CityController::class, 'delete'])->name('cities.delete');


        /*
        |--------------------------------------------------------------------------
        | Areas Routes
        |--------------------------------------------------------------------------
        */
        Route::resource('areas',AreaController::class);
        Route::post('/areas/delete',[AreaController::class,'delete'])->name('areas.delete');


        /*
        |--------------------------------------------------------------------------
        | Areas Routes
        |--------------------------------------------------------------------------
        */
        Route::resource('specialities',SpecialityController::class);
        Route::post('/specialities/delete',[SpecialityController::class,'delete'])->name('specialities.delete');


        /*
         |--------------------------------------------------------------------------
         |  admins Routes
         |--------------------------------------------------------------------------
        */
        Route::resource('admin',AdminController::class);
        Route::post('/admin/delete',[AdminController::class,'delete'])->name('admin.delete');
        Route::post('/admin/get_area',[AdminController::class,'get_area'])->name('admin.get_area');


        /*
         |--------------------------------------------------------------------------
         |  users Routes
         |--------------------------------------------------------------------------
        */
        Route::get('/users/',[UserController::class,'index'])->name('users.index');
        Route::get('/users/unblock_user/{id}',[UserController::class,'unblock_user'])->name('users.unblock_user');
        Route::post('/users/block_user',[UserController::class,'block_user'])->name('users.block_user');



        /*
         |--------------------------------------------------------------------------
         |  Fani Rate Routes
         |--------------------------------------------------------------------------
        */
        Route::get('/rates/',[RateController::class,'index'])->name('rates.index');



        /*
        |--------------------------------------------------------------------------
        |  Fani Feedbacks Routes
        |--------------------------------------------------------------------------
       */
        Route::get('/feedbacks/',[FeedBackController::class,'index'])->name('feedbacks.index');
        Route::post('/feedbacks/delete',[FeedBackController::class,'delete'])->name('feedbacks.delete');



        /*
        |--------------------------------------------------------------------------
        |  Fani contact_us Routes
        |--------------------------------------------------------------------------
       */
        Route::get('/contact_us/',[ContactUsController::class,'index'])->name('contact_us.index');
        Route::post('/contact_us/delete',[ContactUsController::class,'delete'])->name('contact_us.delete');



        /*
        |--------------------------------------------------------------------------
        |  Orders Routes
        |--------------------------------------------------------------------------
       */
        Route::resource('orders',OrderController::class);
        Route::Post('/orders/delete', [OrderController::class, 'delete'])->name('orders.delete');



    });
});

require __DIR__.'/auth.php';
