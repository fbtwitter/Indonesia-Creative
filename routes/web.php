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
    return view('welcome');
});


Route::get('login',function(){
  return view('login');
});
Route::post('login','CreativeController@login');
Route::get('/dashboard',function(){
  return view('dashboard');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test',function(){
    return view('test');
});
Route::post('login','AccountController@login');
// Route::get('register', function()
// {
//   return view('register');
// });
Route::get('logout', 'AccountController@logout');
Route::post('register', 'AccountController@register');
Route::get('profile','AccountController@profil');
Route::post('profile','AccountController@update');
Route::get('one','AccountController@loginadmin');
Route::post('one','AccountController@adm');