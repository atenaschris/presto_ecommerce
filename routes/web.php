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

Route::post('/ads/images/upload','AdvertiseController@uploadImages')->name('ads.images.upload');

Route::delete('/ads/images/remove','AdvertiseController@removeImages')->name('ads.images.remove');

Route::get('/ads/images','AdvertiseController@getImages')->name('ads.images');



Route::post('/submit','AdvertiseController@submit')->name('submit');

Route::get('/ads/detail/{id}/{title}','FrontendController@ad_details')->name('ad.details');

Route::get('/category-ads/{id}/{name}','CategoryController@category_ads')->name('category.ads');



Route::post('/newsletter','NewsletterController@newsletter')->name('newsletter');

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

Route::get('/revisor/edit/profile/{user}','RevisorController@edit')->name('revisor.edit');

//Admin routes

Route::get('/admin-dashboard', 'AdminController@index')->name('admin.home');

Route::get('/admin-dashboard/all-ads', 'AdminController@allads')->name('admin.all.ads');

Route::get('/admin-dashboard/all-users', 'AdminController@allusers')->name('admin.all.users');


Route::post('/admin-dashboard/all-request/{id}/accepted', 'AdminController@accepted')->name('request.accepted');

Route::post('/admin-dashboard/all-request/{id}/rejected', 'AdminController@rejected')->name('request.rejected');

Route::get('/admin-dashboard/all-request', 'AdminController@allrequest')->name('admin.all.request');

Route::post('/admin-dashboard/all-users/{id}/revoked', 'AdminController@revokedPermission')->name('permission.revoked');

Route::get('/admin/edit/profile/{user}','AdminController@edit')->name('admin.edit');

Route::get('/admin-dashboard/revisioning/ads','AdminController@adminAds')->name('admin.to.be.revisioned.ads');


// user routes

 Route::get('/user-dashboard', 'UserController@index')->name('user.home');
 Route::get('/user-dashboard/ads', 'UserController@ads')->name('user.all.ads');

 Route::get('/user/edit/profile/{user}','UserController@edit')->name('user.edit');
 
 Route::patch('/user/update/profile/{user}','UserController@update')->name('user.update');

 
 //languages routes

 Route::post('/{locale}','FrontEndController@locale')->name('locale');