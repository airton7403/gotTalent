<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->namespace('Api')->group(function () {

    Route::post('login', 'Auth\LoginJwtController@login')->name('login');
    Route::get('logout', 'Auth\LoginJwtController@logout')->name('logout');
    Route::post('refresh', 'Auth\LoginJwtController@refresh')->name('logout');

    Route::group(['middleware' => ['jwt.auth']], function () {
        Route::prefix('user')->name('user.')->group(function () {
            Route::get('/', 'UserController@index')->name('me');
            Route::get('/show/{id}', 'UserController@show')->name('show');
        });

        Route::prefix('project')->name('project.')->group(function () {
            Route::get('/', 'ProjectController@index')->name('project');
        });
    });
});
