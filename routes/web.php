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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['middleware'=>'auth'],function(){

Route::get('/adminlogin','admin\indexcontroller@index')->name('admin');
Route::get('logo-edit','admin\LogoController@edit')->name('logo-edit');
Route::post('logo-update','admin\LogoController@update')->name('logo-update');

Route::get('contact-edit','admin\ContactUsController@edit')->name('contact-edit');
Route::post('contact-update','admin\ContactUsController@update')->name('contact-update');

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
});

Auth::routes();
Route::get('/home', 'admin\indexcontroller@index')->name('home');
