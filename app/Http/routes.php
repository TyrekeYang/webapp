<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/{page?}', function () {
    return 'home.index';
});

Route::get('about', function () {
    return 'about.index';
});

Route::get('hot/{page?}', function () {
    return 'posts.hot';
});

Route::get('random', function () {
    return 'posts.random';
});

Route::group(['prefix' => 'posts'], function() {
    Route::post('/', function () {
        return 'posts.store';
    });

    Route::get('{id}/edit', function () {
        return 'posts.edit';
    });

    Route::patch('{id}', function () {
        return 'posts.update';
    });

    Route::delete('{id}', function () {
        return 'posts.destroy';
    });

    Route::post('{id}/comment', function () {
        return 'posts.comment';
    });

    Route::get('{page?}', function () {
        return 'posts.index';
    });

    Route::get('{id}', function () {
        return 'posts.show';
    });

    Route::get('create', function () {
        return 'posts.create';
    });
});