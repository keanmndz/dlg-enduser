<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('website/user-main');
});

Route::get('/menu', 'userController@show');

Route::get('/checkout', function () {
    return view('order/checkout');
});


Route::get('/register', 'userController@register');



