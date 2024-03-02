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


Route::get('/','frontedcontroller@index')->name('index');
Route::get('About-Us','frontedcontroller@about')->name('about');
Route::get('Contact-Us','frontedcontroller@contact')->name('contact');
Route::get('Gallery','frontedcontroller@gallery')->name('gallery');
Route::get('Service','frontedcontroller@service')->name('service');
Route::get('Service-Details','frontedcontroller@servicedetails')->name('servicedetails');
Route::post('contactquery','frontedcontroller@contactquery')->name('contactquery');


Route::group(['middleware'=>'auth'],function(){

Route::get('/adminlogin','admin\indexcontroller@index')->name('admin');
Route::get('logo-edit','admin\LogoController@edit')->name('logo-edit');
Route::post('logo-update','admin\LogoController@update')->name('logo-update');

Route::get('contact-edit','admin\ContactUsController@edit')->name('contact-edit');
Route::post('contact-update','admin\ContactUsController@update')->name('contact-update');


Route::get('Contact-query','admin\ContactUsController@contactquery')->name('admincontactquery');
Route::get('contactquerydelete/{id}','admin\ContactUsController@contactquerydelete')->name('contactquerydelete');

Route::get('about-us-edit','admin\AboutUsController@edit')->name('about-us-edit');
Route::post('about-update','admin\AboutUsController@update')->name('about-us-update');

Route::get('gallery-list','admin\GalleryController@index')->name('gallery-list');
Route::get('gallery-create','admin\GalleryController@create')->name('gallery-create');
Route::post('gallery-store','admin\GalleryController@store')->name('gallery-store');
Route::get('gallery-edit/{id}','admin\GalleryController@edit')->name('gallery-edit');
Route::post('gallery-update/{id}','admin\GalleryController@update')->name('gallery-update');
Route::get('gallery-delete/{id}','admin\GalleryController@delete')->name('gallery-delete');

Route::get('slider-list','admin\HomeController@index')->name('slider-list');
Route::get('slider-create','admin\HomeController@create')->name('slider-create');
Route::post('slider-store','admin\HomeController@store')->name('slider-store');
Route::get('slider-edit/{id}','admin\HomeController@edit')->name('slider-edit');
Route::post('slider-update/{id}','admin\HomeController@update')->name('slider-update');
Route::get('slider-delete/{id}','admin\HomeController@delete')->name('slider-delete');

Route::get('service-list','admin\ServicesController@index')->name('service-list');
Route::get('service-create','admin\ServicesController@create')->name('service-create');
Route::post('service-store','admin\ServicesController@store')->name('service-store');
Route::get('service-edit/{id}','admin\ServicesController@edit')->name('service-edit');
Route::post('service-update/{id}','admin\ServicesController@update')->name('service-update');
Route::get('service-delete/{id}','admin\ServicesController@delete')->name('service-delete');

Route::get('offer-list','admin\OfferController@index')->name('offer-list');
Route::get('offer-create','admin\OfferController@create')->name('offer-create');
Route::post('offer-store','admin\OfferController@store')->name('offer-store');
Route::get('offer-edit/{id}','admin\OfferController@edit')->name('offer-edit');
Route::post('offer-update/{id}','admin\OfferController@update')->name('offer-update');
Route::get('offer-delete/{id}','admin\OfferController@delete')->name('offer-delete');

Route::get('testimonial-list','admin\testimonialcontroller@index')->name('testimonial-list');
Route::get('testimonial-create','admin\testimonialcontroller@create')->name('testimonial-create');
Route::post('testimonial-store','admin\testimonialcontroller@store')->name('testimonial-store');
Route::get('testimonial-edit/{id}','admin\testimonialcontroller@edit')->name('testimonial-edit');
Route::post('testimonial-update/{id}','admin\testimonialcontroller@update')->name('testimonial-update');
Route::get('testimonial-delete/{id}','admin\testimonialcontroller@delete')->name('testimonial-delete');


});

Auth::routes();
Route::get('/home', 'admin\indexcontroller@index')->name('home');
