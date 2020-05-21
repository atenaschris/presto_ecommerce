<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/category-ads/{id}/{name}','CategoryController@category_ads')->name('category.ads');

Route::get('/newsletter/thank-you', 'NewsletterController@thankyounewsletter'
    
)->name('newsletter.thankyou');

Route::post('/newsletter','NewsletterController@newsletter'
    
)->name('newsletter');

// Revisor Routes

Route::get('/revisor', 'RevisorController@index')->name('revisor.home');

Route::post('/revisor/ad/{id}/accepted', 'RevisorController@accepted')->name('revisor.accepted');

Route::post('/revisor/ad/{id}/rejected', 'RevisorController@rejected')->name('revisor.rejected');

Route::get('/revisor/request','RequestRevisorController@revisor_request')->name('revisor.request');

Route::post('/revisor/submit','RequestRevisorController@revisor_submit')->name('revisor.submit');

Route::get('/revisor/undo','RevisorController@undo_ads')->name('revisor.undo.ads');

Route::post('/revisor/undo/{id}/accepted','RevisorController@update_accepted')->name('ads.accepted');

Route::post('/revisor/undo/{id}/rejected','RevisorController@update_rejected')->name('ads.rejected');