<?php

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



Route::get('title','SpiderController@title');

Route::get('content','SpiderController@content');

Route::get('/','HomeController@index');

Route::get('/list_{id}','HomeController@lists');

Route::get('/show_{id}.html','HomeController@show');

Route::get('/sitemap.html','SitemapController@index');

Route::get('/sitemap.xml','SitemapController@indextwo');
