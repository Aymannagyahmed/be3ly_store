<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix'=>'admin','namespace'=> 'Dashboard','middleware'=>'auth:admin',],function(){
    //this is first page visits if cuthenticated
    Route::group(['prefix'=>'dashboard'],function(){
        Route::get('/', 'DashboardController@index')->name('admin.dashboard');
        Route::get('admins','AdminController@index');
        Route::get('users',function(){
            return 'in admin';
        });
    });
    
});

Route::group(['prefix'=>'admin','namespace'=> 'Dashboard','middleware'=>'guest:admin',],function(){
    Route::get('/' ,'LoginController@adminLogin');
    Route::get('login' ,'LoginController@login')->name('admin.login');
    Route::post('login','LoginController@checkLogin')->name('admin.check.login');
});
