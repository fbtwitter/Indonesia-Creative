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

/*BAGIAN MASTER*/
Route::resource('/master', 'MasterController');
Route::post('/regis', 'MasterController@register');
/*BAGIAN COURSE*/
Route::resource('/course', 'CourseController');
Route::get('/update_courseview/{id_course}', 'CourseController@edit');
Route::post('course_update/{id_course}', 'CourseController@update');
Route::get('/deletecourse/{id_course}', 'CourseController@destroy');
/*BAGIAN SUB-COURSE*/
//Route::resource('/subcourse', 'SubCourseController');
Route::post('/tambahsub', 'SubCourseController@store');
Route::get('/update_subcourseview/{id_sub_course}', 'SubCourseController@edit');
Route::post('subcourse_update/{id_sub_course}', 'SubCourseController@update');
/*BAGIAN MEMBER*/
Route::resource('/member', 'MemberController');
/*BAGIAN LIBRARY*/
Route::resource('/library', 'LibraryController');
Route::get('/deletelib/{id_library}', 'LibraryController@delete');
/*BAGIAN DASHBOARD*/
Route::resource('/dashboard', 'DashboardController');
/*BAGIAN ANNOUNCEMENT*/
Route::resource('/announce', 'AnnouncementController');
/*BAGIAN FORUM*/
Route::resource('/forum', 'ForumController');
Route::get('/deleteforum/{id_forum}', 'ForumController@delete');
/*BAGIAN REWARD*/
Route::resource('/reward', 'RewardController');
Route::get('/deletereward/{id_reward}', 'RewardController@delete');
Route::get('/', function () {
    return view('welcome');
});
Route::get('login',function(){
  return view('login');
});
Route::post('login','CreativeController@login');
Route::get('dashboard',function(){
  return view('dashboard');
});
