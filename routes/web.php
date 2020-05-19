<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','FrontendController@homepage')->name('homepage');

Route::get('/add-ads','AdvertiseController@add')->name('add.ads');

Route::get('/submit/thank-you-ads','AdvertiseController@thankyouads')->name('thank.you.ads');

Route::post('/submit','AdvertiseController@submit')->name('submit');

Route::get('/ads/detail/{id}/{title}','FrontendController@ad_details')->name('ad.details');

Route::get('/category-ads/{id}/{name}','AdvertiseController@category_ads')->name('category.ads');