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

Route::get('/', 'Controller@Home');
Route::get('language/{locale}', 'Controller@SetLanguage');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------*/
Route::get('admin/log-in','UserController@GetLogIn');
Route::post('admin/log-in','UserController@PostLogIn');
Route::get('admin/log-out','UserController@LogOut');
Route::group(['prefix'=>'admin'],function (){
    Route::get('home', 'UserController@Home');
});