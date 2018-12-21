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
Route::resource('/admmaster', 'AdminMasterController');
Route::post('/regis', 'AdminMasterController@register');
/* Master */
//Sub Course Master
Route::resource('/Sub_Course','SubCourseController');
/* Course List */
Route::resource('course-list','CourseMasterController');

/*SubCourse*/
//edit Sub Course
Route::post('UpdateSub/{id_sub}','SubCourseController@update');
Route::get('DeleteSubCourse/{id_sub}','SubCourseController@destroy');
/*Monthly Meeting Master */
Route::resource('Monthly','MonthlyMeetingController');
Route::post('MonthlyUpdate/{id_monthly}','MonthlyMeetingController@update')->name('MonthlyUpdate');
Route::get('MonthlyDelete/{id_monthly}','MonthlyMeetingController@destroy');
/* Member of Monthly meeting */
Route::resource('MemberListMaster','Master_MemberController');
Route::get('MonthlyMember/{idMonhtly}','Master_MemberController@show');
/* Library Master */
Route::resource('LibraryMaster','Master_LibraryController');
//delete
Route::get('LibraryMasterDelete/{idLib}','Master_LibaryController@');
/*BAGIAN COURSE*/
Route::resource('/course', 'AdminCourseController');
Route::get('/update_courseview/{id_course}', 'AdminCourseController@edit');
Route::post('course_update/{id_course}', 'AdminCourseController@update');
Route::get('/deletecourse/{id_course}', 'AdminCourseController@destroy');
/*BAGIAN SUB-COURSE*/
Route::post('/tambahsub', 'AdminSubCourseController@store');
Route::get('/update_subcourseview/{id_sub_course}', 'AdminSubCourseController@edit');
Route::post('/subcourse_update/{id_sub_course}', 'AdminSubCourseController@update');
Route::get('/deletesubcourse/{id_sub_course}', 'AdminSubCourseController@destroy');
/*BAGIAN MEMBER*/
Route::resource('/member', 'AdminMemberController');
Route::get('/deletemember/{id_info_user}', 'AdminMemberController@destroy');
/*BAGIAN LIBRARY*/
Route::resource('/library', 'AdminLibraryController');
Route::get('/deletelib/{id_library}', 'AdminLibraryController@delete');
/*BAGIAN DASHBOARD*/
Route::resource('/dashadmin', 'AdminDashadminController');
Route::resource('/Dashboard', 'DashboardController');
Route::resource('Setting', 'SettingController');
/*BAGIAN ANNOUNCEMENT*/
Route::resource('/announce', 'AdminAnnouncementController');
/*BAGIAN FORUM*/
Route::resource('/forum', 'AdminForumController');
Route::get('/deleteforum/{id_forum}', 'AdminForumController@delete');
/*BAGIAN REWARD*/
Route::resource('/reward', 'AdminRewardController');
Route::get('/deletereward/{id_reward}', 'AdminRewardController@delete');
Route::get('/', function () {
    return view('welcome');
});
/*BAGIAN PESERTA MONTHLY*/
Route::resource('/monthlymeet', 'AdminMonthController');
/*Route::resource('/reward', 'RewardController');
Route::get('/deletereward/{id_reward}', 'RewardController@delete');*/
Route::get('/','AccountController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login','AccountController@login');
Route::get('logout', 'AccountController@logout');
Route::post('register', 'AccountController@register');
Route::get('profile','AccountController@profil');
Route::post('profile','AccountController@update');
Route::get('one','AccountController@loginadmin');
Route::post('one','AccountController@adm');

Route::resource('/Dashboard', 'DashboardController');
Route::resource('/CC_Advertising', 'CC_AdvertController');
Route::resource('/CC_Architecture', 'CC_ArchitectureController');
Route::resource('/CC_Crafts', 'CC_CraftsController');
Route::resource('/Others', 'OthersController');


Route::resource('/MDBukudanAlat','MDBukudanAlatController');
Route::get('route', function(){

  $app = app();
  $routes = $app->routes->getRoutes();
  return view ('routing',compact('routes'));

});
