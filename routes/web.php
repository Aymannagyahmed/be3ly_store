<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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

Route::get('/admin', function () {
    return view('layouts.admin');
});


Route::group(['prefix' => LaravelLocalization::setLocale()
,'middleware' =>  'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
, function()
{
	Route::get('welcome', function () {
        return view('welcome');
    })->name('welcomelang');

    Route::get('test',function(){
		return view('test');
	})->name('testlang');
});