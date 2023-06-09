<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\ReportUserController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductAuctionController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\SellCenterController;
use App\Http\Controllers\SpecialityController;
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

Route::middleware('auth')->group(function () {
    Route::get('/auctions', [\App\Http\Controllers\CategoryController::class,'all_categories'])->name('auctions');


    Route::get('/homepage', [HomePageController::class,'index'])->name('homepage');
    Route::post('/homepage/search/', [HomePageController::class,'search_for_product'])->name('homepage_search');

    Route::get('/sellcenter',[SellCenterController::class,'index'])->name('sellcenter');

    Route::post('/store_bid',[BidController::class,'store'])->name('store_bid');

    Route::get('/all_products/{id}',[\App\Http\Controllers\CategoryController::class,'get_category_products'])->name('all_products');

    Route::get('/product/{id}',[\App\Http\Controllers\CategoryController::class,'product_data'])->name('product');

    Route::get('/product_dashboard/{id}',[ProductAuctionController::class,'index'])->name('product_dashboard');

    Route::get('/profile/{id}',[AuthController::class,'profile_date'])->name('profile')->middleware('auth');

    Route::get('/edit_profile', function () {
        return view('website.edit_profile');
    })->name('edit_profile');

    Route::post('/edit_profile_data/{id}',[AuthController::class,'update_profile'])->name('edit_profile_data');

    Route::get('/assigned-contract/{id}', [AuthController::class,'assigned_con'])->name('assigned-contract');

    Route::get('/yourorders',[OrderController::class,'all_orders'])->name('yourorders');
    Route::get('/my_orders',[OrderController::class,'my_orders'])->name('my_orders');
    Route::get('/accept_order/{id}',[OrderController::class,'accept_order'])->name('accept_order');
    Route::get('/complete_order/{id}',[OrderController::class,'complete_order'])->name('complete_order');
    Route::get('/refuse_order/{id}',[OrderController::class,'refuse_order'])->name('refuse_order');

    Route::post('/store_product',[SellCenterController::class,'store_product'])->name('store_product');

});


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


Route::get('/report-user', function () {
    return view('website.report');
})->name('report-user');


Route::post('/store-report-request',[ReportUserController::class,'store'])->name('store-report-request');
Route::post('/store-feedback',[FeedbackController::class,'store'])->name('store-feedback');
Route::post('/send_reset_code',[AuthController::class,'send_reset_code'])->name('send_reset_code');
Route::post('/reset_user_password',[AuthController::class,'reset_password'])->name('reset_user_password');



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
        | Categories Routes
        |--------------------------------------------------------------------------
        */
        Route::resource('categories',CategoryController::class);
        Route::post('/categories/delete',[CategoryController::class,'delete'])->name('categories.delete');


        /*
        |--------------------------------------------------------------------------
        | Reports Routes
        |--------------------------------------------------------------------------
        */
        Route::get('/all-reports',[ReportUserController::class,'index'])->name('all-reports');
        Route::post('/all-reports/delete',[ReportUserController::class,'delete'])->name('all-reports.delete');



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
        Route::resource('orders',\App\Http\Controllers\Admin\OrderController::class);
        Route::Post('/orders/delete', [\App\Http\Controllers\Admin\OrderController::class, 'delete'])->name('orders.delete');


        /*
       |--------------------------------------------------------------------------
       |  Products Routes
       |--------------------------------------------------------------------------
      */
        Route::resource('products',\App\Http\Controllers\Admin\ProductController::class);
        Route::Post('/products/delete', [\App\Http\Controllers\Admin\ProductController::class, 'delete'])->name('products.delete');



    });
});

require __DIR__.'/auth.php';
