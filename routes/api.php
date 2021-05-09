<?php

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

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');





Route::group(['middleware' => ['jwt.verify']], function() {
    //ClientController
Route::get('/clients', 'ClientController@index');
Route::get('/client-order', 'ClientController@show');

//ProductController
Route::get('/products', 'ProductController@index');
// Route::delete('/product/{id}', 'ProductController@destroy');


//OrderController
Route::get('/orders-user/{userId}', 'OrderController@show');
Route::get('/order/{orderId}', 'OrderController@showOrder');
Route::delete('/order-user-delete/{id}', 'OrderController@destroy');
Route::post('/order-user', 'OrderController@store');
Route::patch('/order-user/{orderId}', 'OrderController@edit');


//OrderProductController
Route::delete('/order-product-delete/{id}', 'OrderProductController@destroy');
Route::post('/order-product', 'OrderProductController@store');

});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
