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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

#对应路由在Routing/Router下
Auth::routes(['verify'=>true]);

Route::get('/home', 'Admin\DashboardController@index')->name('home')->middleware('verified');

//简历
Route::get('/lfs', function(){
    return view('resume');
});

//结婚时间
Route::get('/love', function(){
    return view('resume');
});

//我的生命
Route::get('/life', function(){
    return view('resume');
});

