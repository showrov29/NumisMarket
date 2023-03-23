<?php

use App\Http\Controllers\AdvartiseController;
use App\Http\Controllers\DelivaryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register',[UserController::class,'Register']);
Route::get('/login',[UserController::class,'Login']);
Route::get('/logout',[UserController::class,'Logout']);
Route::put('/edit',[UserController::class,'Update']);


Route::post('advertisement/add',[AdvartiseController::class,'Add']);
Route::get('advertisement/{id}',[AdvartiseController::class,'GetById']);
Route::delete('advertisement/delete/{id}',[AdvartiseController::class,'Delete']);
Route::put('advertisement/edit/{id}',[AdvartiseController::class,'Update']);
Route::get('advertisement',[AdvartiseController::class,'Get']);

Route::post('order/add',[OrderController::class,'Add']);
Route::get('order/{id}',[OrderController::class,'GetById']);
Route::delete('order/delete/{id}',[OrderController::class,'Delete']);
Route::put('order/edit/{id}',[OrderController::class,'Edit']);
Route::get('order',[OrderController::class,'Get']);

Route::post('delivary/add',[DelivaryController::class,'Add']);
Route::get('delivary/{id}',[DelivaryController::class,'GetById']);
Route::delete('delivary/delete/{id}',[DelivaryController::class,'Delete']);
Route::put('delivary/edit/{id}',[DelivaryController::class,'Update']);
Route::get('delivary',[DelivaryController::class,'Get']);

Route::post('payment/add',[PaymentController::class,'Add']);
Route::get('payment/{id}',[PaymentController::class,'GetById']);
Route::delete('payment/delete/{id}',[PaymentController::class,'Delete']);
Route::put('payment/edit/{id}',[PaymentController::class,'Edit']);
Route::get('payment',[PaymentController::class,'Get']);