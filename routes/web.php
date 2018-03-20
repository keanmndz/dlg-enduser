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

Route::get('/account', function () {
    return view('user/account');
});


//cart
Route::get('/menu', 'userController@show');
Route::post('/menu', 'userController@show');

//increment
Route::get('/menu','userController@increment');

//remove
Route::get('/menu/remove', 'userController@remove');

Route::post('/checkout', 'userController@cart');

Route::post('confirm','userController@checkDetails');


Route::get('/register', 'userController@register');

//Login

Route::post('/','Auth\LoginController@login');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
