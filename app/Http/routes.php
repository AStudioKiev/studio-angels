<?php

Route::auth();

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){

    Route::get('/', 'Admin\IndexController@index');

    Route::group(['prefix' => 'post'], function (){
        Route::get('/', 'Admin\PostController@index');

        Route::get('/add-post', 'Admin\PostController@addIndex');
        Route::post('/add-post', 'Admin\PostController@add');

        Route::get('/edit-post/{id}', 'Admin\PostController@editIndex');
        Route::post('/edit-post/{id}', 'Admin\PostController@edit');

        Route::post('/delete', 'Admin\PostController@deletePost');

        Route::group(['prefix' => 'basket'], function (){
            Route::get('/', 'Admin\PostController@basketIndex');
            Route::post('/delete', 'Admin\PostController@basketDelete');
            Route::post('/recover', 'Admin\PostController@basketRecover');
            Route::post('/clear', 'Admin\PostController@basketClear');
        });
    });
});