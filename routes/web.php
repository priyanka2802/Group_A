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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/calendar', function() {
    return view('calendar');
});
Route::get('/user_profile', 'HomepageController@user_profile');

<<<<<<< HEAD
Route::get('/user_profile1/{user_details}', 'HomepageController@user_profile1');


Route::get('/holidaylist', 'HolidayController@display'); 
=======
Route::get('/holidaylist', 'HolidayController@display');
>>>>>>> daeb269164bcd883a7a56a54a8a30b18c1f25790

Route::get('/holidaylist1', 'HolidayController@display1');



Route::get('/holidaylist3', 'HolidayController@display3'); 
Route::get('/holidaylist2', 'HolidayController@display2'); 



Route::get('/Displayholidays', 'AdminController@displayHolidays');

Route::post('/Addholidays', 'AdminController@Addholidays');


Route::post('/u', 'RegistrationController@updateUsers');

Route::get('/useredit', 'HomepageController@showuserdetails1');

Route::post('/useredit', 'RegistrationController@updateUser');

Route::get('/search', 'HomepageController@showall');

Route::get('/clform', 'CasualleaveController@show');

Route::post('/clform', 'CasualleaveController@store');

Route::post('/delete', 'AdminController@delete_user');

Route::get('/odform', 'OnDutyController@show');

Route::get('/listofleaves', 'CasualleaveController@showlist');

Route::post('/sclform', 'sclController@store');

Route::post('/studyform', 'studyController@store');

Route::get('/sclform', 'sclController@show');

Route::get('/studyform', 'studyController@show');

Route::get('/leave_history', 'HomepageController@show_leaves_history');

Route::get('/leave_history_approving', 'HomepageController@show_leaves_history_approving');

Route::get('/user', 'HomepageController@showuser')->name('homeGeneral');

Route::post('/odform', 'OnDutyController@store');

Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/recommend', 'HomepageController@showrecommend')->name('homeRecommend');

Route::get('/leaverecommended', 'RecommendController@showrecommendedleaves');

Route::get('/leavereverted', 'RecommendController@showrevertedleaves');

Route::get('/leavepending', 'RecommendController@showpendingrecommend');

Route::get('/recommended/{user_details}', 'RecommendController@updatestatus1');

Route::get('/reverted/{user_details}', 'RecommendController@updatestatus2');

Route::get('/recommend/{user_details}', 'RecommendController@showleavedetails');

Route::get('/approval', 'HomepageController@showapproval')->name('homeApproval');

Route::get('/leavependingapproval', 'ApprovalController@showpendingapproval');

Route::get('/leaveapproved', 'ApprovalController@showapprovedleaves');

Route::get('/leaverejected', 'ApprovalController@showrejectedleaves');

Route::get('/approval/{user_details}', 'ApprovalController@showleavedetails');

Route::get('/approved/{user_details}', 'ApprovalController@updatestatus1');

Route::get('/update/{user_details}', 'HomepageController@showuserdetails');

Route::get('/admin', 'AdminController@showadmin')->name('homeAdmin');

Route::get('/rejected/{user_details}', 'ApprovalController@updatestatus2');



Route::get('/admin/{user_details}', 'AdminController@showleavedetails');

