<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2019-11-08
 * Time: 11:05
 */

use Illuminate\Support\Facades\Route;

Route::get('dashboard','DashboardController@index')->middleware('admin');

