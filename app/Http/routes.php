<?php

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'admin'], function (){

    Route::get('/', 'Admin\IndexController@index');

    Route::get('/add-post', 'Admin\PostController@addIndex');
    Route::post('/add-post', 'Admin\PostController@add');

    Route::get('/edit-post/{id}', 'Admin\PostController@editIndex');
    Route::post('/edit-post/{id}', 'Admin\PostController@edit');
});