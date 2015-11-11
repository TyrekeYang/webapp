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

Route::get('/', function () {
    $data = ['name' => 'Tyreke'];
    return view('home.index', $data);
});

Route::get('about', function () {
    return view('about.index');
});

Route::get('hot', function () {
    return view('posts.hot');
});

Route::get('random', function () {
    return view('posts.random');
});

Route::group(['prefix' => 'posts'], function() {
//    Route::post('/', function () {
//        return view('posts.store');
//    });

    Route::get('{id}/edit', ['as' => 'posts.edit', 'uses' => 'PostsController@edit']);

    Route::patch('{id}', function () {
        return view('posts.update');
    });

//    Route::delete('{id}', function () {
//        return view('posts.destroy');
//    });

    Route::post('{id}/comment', function () {
        return view('posts.comment');
    });

    Route::get('/', ['as' => 'posts.index', 'uses' => 'PostsController@index']);

    Route::get('{id}', ['as' => 'posts.show', 'uses' => 'PostsController@show']);

    Route::get('create', ['as' => 'posts.create', 'uses' => 'PostController@create']);
});