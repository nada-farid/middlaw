<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api')->namespace('Api')->group(function () {
    Route::get('/', 'HomeController@index')->name('api.home');
});