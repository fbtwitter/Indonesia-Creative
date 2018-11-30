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

Route::resource('/Dashboard', 'DashboardController');
Route::resource('/CC_Advert', 'CC_AdvertController');
Route::resource('/CC_Architecture', 'CC_ArchitectureController');
Route::resource('/CC_Crafts', 'CC_CraftsController');
Route::resource('/Others', 'OthersController');


Route::resource('/MDBukudanAlat','MDBukudanAlatController');
