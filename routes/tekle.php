<?php
use Illuminate\Support\Facades\Route;


Route::prefix('tekle')->group(function (){
    Route::get('/menu', 'MenuController@menu')->name('menu');
    Route::get('/create', 'MenuController@create')->name('menu.create');
    Route::post('/create', 'MenuController@create')->name('menu.create.post');
    Route::get('/edit/{menuId}','MenuController@edit')->name('menu.edit');
    Route::post('/edit/{menuId}','MenuController@edit')->name('menu.edit.post');
    Route::get('/delete/{menuId}','MenuController@delete')->name('menu.delete');
    Route::get('/blog', 'PostController@post')->name('post');
    Route::get('/blog/create', 'PostController@create')->name('post.create');
    Route::post('/blog/create', 'PostController@create')->name('post.create.post');
    Route::get('/blog/edit/{postId}','PostController@edit')->name('post.edit');
    Route::post('/blog/edit/{postId}','PostController@edit')->name('post.edit.post');
    Route::get('/blog/delete/{postId}','PostController@delete')->name('post.delete');
    Route::get('/news', 'PostController@news')->name('news');
    Route::get('/news/table', 'PostController@newsPost')->name('news.post');
    Route::get('/news/edit/{postId}', 'PostController@newsEdit')->name('news.edit');

});




