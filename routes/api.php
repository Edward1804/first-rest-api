<?php

use App\Http\Controllers\FreelancerController;
use Illuminate\Http\Request;
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
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::prefix('/freelancers')->group(function () {

    Route::get('/', [FreelancerController::class, 'get']);
    Route::get('/{freelancer_name}', [FreelancerController::class, 'detail']);
    Route::post('/', [FreelancerController::class, 'createFreelancer']);
    Route::delete('/{freelancer_id}', [FreelancerController::class, 'delete'])
        ->where(['freelancer_id' => '[0-9]+']);
    Route::put('/{freelancer_id}', [FreelancerController::class, 'updateFreelancer'])
        ->where(['freelancer_id' => '[0-9]+']);;

});
//
//Route::prefix('/freelancers')->group(function () {
//
//    Route::get('/', ['uses' => FreelancerController::class, 'get']);
//    Route::get('/{freelancer_name}', ['uses' => FreelancerController::class, 'detail']);
//    Route::post('/', ['uses' => FreelancerController::class, 'create']);
//    Route::delete('/{freelancer_id}', ['uses' => FreelancerController::class, 'delete'])
//        ->where(['freelancer_id' => '[0-9]+']);
//    Route::put('/{freelancer_id}', ['uses' => FreelancerController::class, 'update'])
//        ->where(['freelancer_id' => '[0-9]+']);;
//
//});

//
//Route::prefix('/customer')->group(function () {
//
//    Route::get('/', ['uses' => CustomerController::class, 'get']);
//    Route::get('/{customer_name}', ['uses' => CustomerController::class, 'detail']);
//    Route::post('/', ['uses' => CustomerController::class, 'create']);
//    Route::delete('/{customer_id}', ['uses' => CustomerController::class, 'delete'])
//        ->where(['customer_id' => '[0-9]+']);
//    Route::put('/{customer_id}', ['uses' => CustomerController::class, 'update'])
//        ->where(['customer_id' => '[0-9]+']);;
//
//});
//
//Route::prefix('/orders')->group(function () {
//
//    Route::get('/', ['uses' => OrdersController::class, 'get']);
//    Route::get('/{order_name}', ['uses' => OrdersController::class, 'detail']);
//    Route::post('/', ['uses' => OrdersController::class, 'create']);
//    Route::delete('/{order_id}', ['uses' => OrdersController::class, 'delete'])
//        ->where(['order_id' => '[0-9]+']);
//    Route::put('/{order_id}', ['uses' => OrdersController::class, 'update'])
//        ->where(['order_id' => '[0-9]+']);;
//
//});
//
//Route::prefix('/applications')->group(function () {
//
//    Route::get('/', ['uses' => ApplicationController::class, 'get']);
//    Route::get('/{order_name}', ['uses' => ApplicationController::class, 'detail']);
//    Route::post('/', ['uses' => ApplicationController::class, 'create']);
//    Route::delete('/{order_id}', ['uses' => ApplicationController::class, 'delete'])
//        ->where(['order_id' => '[0-9]+']);
//    Route::put('/{order_id}', ['uses' => ApplicationController::class, 'update'])
//        ->where(['order_id' => '[0-9]+']);;
//
//});
