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

Route::get('/search', 'HomepageController@showall')->name('homeAdmin');

Route::get('/clform', 'CasualleaveController@show');

Route::get('/user', 'HomepageController@showuser')->name('homeGeneral');

Route::post('/clform', 'CasualleaveController@store');

Route::get('/admin', 'HomepageController@showadmin')->name('homeAdmin');

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

Route::get('/rejected/{user_details}', 'ApprovalController@updatestatus2');
