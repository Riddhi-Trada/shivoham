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
Route::group(['middleware'=>'auth'],function(){

Route::get('/adminlogin','admin\indexcontroller@index')->name('admin');

});

Auth::routes();

Route::get('/home', 'admin\indexcontroller@index')->name('home');
