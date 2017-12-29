<?php

Route::auth();

Route::get('/', 'MainController@index');
Route::get('/blog', 'MainController@blog');

/* Админка */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){

    Route::get('/', 'Admin\IndexController@index');

    /* Блог */
    Route::group(['prefix' => 'post'], function (){
        Route::get('/', 'Admin\PostController@index');

        Route::get('/add', 'Admin\PostController@addIndex');
        Route::post('/add', 'Admin\PostController@add');

        Route::get('/edit/{id}', 'Admin\PostController@editIndex');
        Route::post('/edit/{id}', 'Admin\PostController@edit');

        Route::post('/delete', 'Admin\PostController@delete');

        // Корзина блога
        Route::group(['prefix' => 'basket'], function (){
            Route::get('/', 'Admin\PostController@basketIndex');
            Route::post('/delete', 'Admin\PostController@basketDelete');
            Route::post('/recover', 'Admin\PostController@basketRecover');
            Route::post('/clear', 'Admin\PostController@basketClear');
        });
    });

    /* Расписание */
    Route::group(['prefix' => 'lessons'], function () {
        Route::get('/', 'Admin\LessonsController@index');

        Route::get('/add', 'Admin\LessonsController@addIndex');
        Route::post('/add', 'Admin\LessonsController@add');

        Route::get('/edit/{id}', 'Admin\LessonsController@editIndex');
        Route::post('/edit/{id}', 'Admin\LessonsController@edit');
        Route::post('/edit', 'Admin\LessonsController@editAll');

        Route::post('/delete', 'Admin\LessonsController@delete');
    });
});