<?php

use core\Route;

Route::get('', "MainController@index");
Route::get('clothes', "MainController@clothes");
Route::get('smoke', "MainController@smoke");
Route::get('covers', "MainController@covers");
Route::get('shop', "MainController@shop");
Route::get('qa', "MainController@qa");
Route::get('contacts', "MainController@contacts");
Route::get('cart', "MainController@cart");
Route::get('clothes/product', "MainController@cloth_prod");
Route::get('covers/product', "MainController@cover_prod");
Route::get('smoke/product', "MainController@smoke_prod");
