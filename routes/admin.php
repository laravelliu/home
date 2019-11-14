<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2019-11-08
 * Time: 11:05
 */

use Illuminate\Support\Facades\Route;

Route::get('dashboard','DashboardController@index')->middleware('admin');

Route::group(['prefix'=>'father'],function(){
   Route::get('card','FatherController@card');
   Route::post('card','FatherController@postCard');
});

Route::get('count','DashboardController@index');
