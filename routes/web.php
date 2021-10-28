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
Route::get('/language', 'LanguageController@index')->middleware('auth');



Route::get('/', 'SlideController@index');
//Route::get('/', 'PostController@index');
//Route::get('/', 'FooterController@index');
//Route::get('/', 'GalleryController@index');
////Route::get('/', function () {
//
////    return view('111\rame');
//    return view('111.rame');
//});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LogoutController@logout');

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/menu', 'HomeController@menu')->name('menu');



