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

// Route::get('/', function () {
//     return view('welcome');
// });


////////////// Page Routes:-
Route::match(['get','post'],'/','IndexController@index');
Route::match(['get','post'],'/about','IndexController@about');
Route::match(['get','post'],'/contact','IndexController@contact');
Route::match(['get','post'],'/projects','IndexController@projects');
Route::match(['get','post'],'/privacy','IndexController@privacy');
Route::match(['get','post'],'/services','IndexController@services');



////////////// Contact Routes:-
Route::match(['get','post'],'/insert','ContactController@insert');


////////////// Admin Routes:- 
Route::match(['get','post'],'/4rmw3b','AdminController@login');
Route::group(['middleware' =>['auth']],function(){
Route::match(['get','post'],'/4rmw3b/dashboard','AdminController@dashboard');
Route::match(['get','post'],'/4rmw3b-profile','AdminController@profile');


////////////// Blog Routes:-
Route::match(['get','post'],'/4rmw3b/add-project','ProjectController@addProject');
Route::match(['get','post'],'/4rmw3b/view-project','ProjectController@viewProject');
Route::match(['get','post'],'/4rmw3b/view-message','ContactController@message'); 

});


////////////// Laravel Auth Routes:- 
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


////////////// Logout Route
Route::get('/logout','AdminController@logout');
