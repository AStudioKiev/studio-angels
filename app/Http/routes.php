<?php

Route::auth();

Route::get('/', 'MainController@index');
Route::get('/blog', 'MainController@blog');
Route::get('/article/{id}', 'MainController@article');

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

    /* Коментарии на странице */
    Route::group(['prefix' => 'page-comments'], function (){
        Route::get('/', 'Admin\PageCommentsController@index');
        Route::get('/add', 'Admin\PageCommentsController@addIndex');
        Route::post('/add', 'Admin\PageCommentsController@add');
        Route::get('/edit/{id}', 'Admin\PageCommentsController@editIndex');
        Route::post('/edit', 'Admin\PageCommentsController@edit');
        Route::post('/delete', 'Admin\PageCommentsController@delete');

       // Корзина коментариев на странице
        Route::group(['prefix' => 'basket'], function(){
            Route::get('/', 'Admin\PageCommentsController@basketIndex');
            Route::post('/delete', 'Admin\PageCommentsController@basketDelete');
            Route::post('/recover', 'Admin\PageCommentsController@basketRecover');
            Route::post('/clear', 'Admin\PageCommentsController@basketClear');
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