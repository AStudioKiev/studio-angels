<?php

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'admin'], function (){

    Route::get('/', 'Admin\IndexController@index');

    Route::get('/add-post', 'Admin\IndexController@addPostIndex');

    Route::get('/edit-post/{id}', 'Admin\IndexController@editPostIndex');
});