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
Route::resource('/adminmaster', 'AdminMasterController');
Route::post('/regis', 'AdminMasterController@register');
Route::get('/update_masterview/{id_info_user}', 'AdminMasterController@edit');
Route::post('/master_update/{id_info_user}', 'AdminMasterController@update');
Route::get('/deletemasteradmin/{id_info_user}', 'AdminMasterController@destroy');
/*BAGIAN COURSE*/
Route::resource('/admincourse', 'AdminCourseController');
Route::get('/update_courseview/{id_course}', 'AdminCourseController@edit');
Route::post('/course_update/{id_course}', 'AdminCourseController@update');
Route::get('/deletecourse/{id_course}', 'AdminCourseController@destroy');
/*BAGIAN SUB-COURSE*/
Route::post('/admintambahsub', 'AdminSubCourseController@store');
Route::get('/update_subcourseview/{id_sub_course}', 'AdminSubCourseController@edit');
Route::post('/subcourse_updateadmin/{id_sub_course}', 'AdminSubCourseController@update');
Route::get('/deletesubcourseadmin/{id_sub_course}', 'AdminSubCourseController@destroy');
/*BAGIAN MEMBER*/
Route::resource('/adminmember', 'AdminMemberController');
Route::get('/deletememberadmin/{id_info_user}', 'AdminMemberController@destroy');
/*BAGIAN LIBRARY*/
Route::resource('/adminlibrary', 'AdminLibraryController');
Route::get('/deletelibadmin/{id_library}', 'AdminLibraryController@delete');
/*BAGIAN DASHBOARD*/
Route::resource('/Dashadmin', 'AdminDashadminController');
Route::resource('/Dashboard', 'DashboardController');
Route::resource('Setting', 'SettingController');
/*BAGIAN ANNOUNCEMENT*/
Route::resource('/adminannounce', 'AdminAnnouncementController');
Route::get('/update_announceview/{ID_ANNOUNCEMENT}', 'AdminAnnouncementController@edit');
Route::post('/announce_update/{ID_ANNOUNCEMENT}', 'AdminAnnouncementController@update');
Route::get('/deleteannounceadmin/{ID_ANNOUNCEMENT}', 'AdminAnnouncementController@destroy');
/*BAGIAN FORUM*/
Route::resource('/adminforum', 'AdminForumController');
Route::get('/deleteforumadmin/{id_forum}', 'AdminForumController@delete');
Route::resource('/forum', 'AdminForumController');
Route::get('/forumchatadmin', 'AdminForumController@chat');
Route::post('/admintambahforum', 'AdminForumController@store');
Route::resource('/Forum', 'ForumController');
Route::get('/deleteforum/{id_forum}', 'AdminForumController@delete');
/*BAGIAN REWARD*/
Route::resource('/adminreward', 'AdminRewardController');
Route::get('/deleterewardadmin/{id_reward}', 'AdminRewardController@delete');
Route::get('/', function () {
    return view('welcome');
});
/*BAGIAN PESERTA MONTHLY*/
Route::resource('/adminmonthlymeet', 'AdminMonthController');
Route::get('/deletemonth/{ID_MONTHLYMEETING}', 'AdminMonthController@destroy');
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
