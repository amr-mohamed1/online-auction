<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Blogs\BlogController;
use App\Http\Controllers\Api\ContactUs\ContactUsController;
use App\Http\Controllers\Api\Feedback\FeedbackController;
use App\Http\Controllers\Api\Locations\LocationsController;
use App\Http\Controllers\Api\Orders\IncomingOrdersController;
use App\Http\Controllers\Api\Orders\OrderController;
use App\Http\Controllers\Api\Orders\OrderHistoryController;
use App\Http\Controllers\Api\Rate\RateController;
use App\Http\Controllers\Api\Services\ServicesController;
use App\Http\Controllers\Api\SpecialistWork\SpecialistWorkController;
use App\Http\Controllers\Api\Specialities\SpecialityController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::post('check_member_avilabelety', [AuthController::class, 'check_member_avilabelety']);
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

/**
 * locations Apis
 */
Route::get('cities', [LocationsController::class, 'cities']);
Route::get('areas', [LocationsController::class, 'areas']);

/**
 * Specialist Apis
 */
Route::get('specialities', [SpecialityController::class, 'specialities']);

/**
 * Blogs Apis
 */
Route::get('blogs', [BlogController::class, 'blogs']);


Route::middleware('auth:api')->group(function () {
    /**
     * Contactus Apis
     */
    Route::post('store_contact_message', [ContactUsController::class, 'store_contact']);


    Route::post('store_specialist_work_images', [SpecialistWorkController::class, 'store']);
    Route::get('get_specialist_work', [SpecialistWorkController::class, 'get_specialist_images']);


    Route::post('store_feedback', [FeedbackController::class, 'store']);
    Route::get('get_specialist_feedback', [FeedbackController::class, 'specialist_feedback']);


    Route::post('store_stars', [RateController::class, 'store']);


    Route::get('specialists_with_speciality', [ServicesController::class, 'services_with_specialist']);
    Route::get('specialist_info', [ServicesController::class, 'specialist_info']);


    Route::post('store_order', [OrderController::class, 'store']);
    Route::get('order_history', [OrderHistoryController::class, 'order_history']);
    Route::get('incomming_orders', [IncomingOrdersController::class, 'incomming_orders']);
    Route::post('change_status', [OrderController::class, 'change_status']);
});
