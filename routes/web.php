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



Route::get('/search-results','FrontendController@search')->name('search');

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

Route::get('/revisor-dashboard', 'RevisorController@index')->name('revisor.home');

Route::get('/revisor-dashboard/revisioning/ads', 'RevisorController@revisioning_Ads')->name('revisor.to.be.revisioned.ads');

Route::post('/revisor-dashboard/ad/{id}/accepted', 'RevisorController@accepted')->name('revisor.accepted');

Route::post('/revisor-dashboard/ad/{id}/rejected', 'RevisorController@rejected')->name('revisor.rejected');

Route::get('/revisor-dashboard/request','RequestRevisorController@revisor_request')->name('revisor.request');

Route::post('/revisor-dashboard/submit','RequestRevisorController@revisor_submit')->name('revisor.submit');

Route::get('/revisor-dashboard/undo','RevisorController@undo_ads')->name('revisor.undo.ads');

Route::post('/revisor-dashboard/undo/{id}/accepted','RevisorController@update_accepted')->name('ads.accepted');

Route::post('/revisor-dashboard/undo/{id}/rejected','RevisorController@update_rejected')->name('ads.rejected');

//Admin routes

Route::get('/admin-dashboard', 'AdminController@index')->name('admin.home');

Route::get('/admin-dashboard/all-ads', 'AdminController@allads')->name('admin.all.ads');

Route::get('/admin-dashboard/all-users', 'AdminController@allusers')->name('admin.all.users');


Route::post('/admin-dashboard/all-request/{id}/accepted', 'AdminController@accepted')->name('request.accepted');

Route::post('/admin-dashboard/all-request/{id}/rejected', 'AdminController@rejected')->name('request.rejected');

Route::get('/admin-dashboard/all-request', 'AdminController@allrequest')->name('admin.all.request');

Route::post('/admin-dashboard/all-users/{id}/revoked', 'AdminController@revokedPermission')->name('permission.revoked');
 // user routes

 Route::get('/user-dashboard', 'UserController@index')->name('user.home');
 Route::get('/user-dashboard/ads', 'UserController@ads')->name('user.all.ads');

 
 //lenguages routes

 Route::post('/{locale}','FrontEndController@locale')->name('locale');