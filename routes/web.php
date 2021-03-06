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
//主页
Route::get('/', 'StaticPagesController@home')->name('home');
// 帮助页面
Route::get('/help', 'StaticPagesController@help')->name('help');
//关于我们
Route::get('/about', 'StaticPagesController@about')->name('about');
// 注册页面和个人主页
Route::get('/signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

//登录和登出
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('login', 'SessionsController@destroy')->name('logout');
