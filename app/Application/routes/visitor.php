<?php

Route::get('/', 'HomeController@welcome');

Route::get('/shop', 'HomeController@shop');
Route::get('/shoplike', 'HomeController@shoplike');

Route::get('/update/{id}', 'HomeController@update');

Route::get('/page/{slug}', 'HomeController@getPageBySlug');

Auth::routes();
