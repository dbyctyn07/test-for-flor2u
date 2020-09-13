<?php

//////// Public

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

//////// Authorised:users

Route::get('/home', 'HomeController@index')->name('home');

//////// Authorised:admins

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'allowOnlyFor:admin']], function () {

    Route::get('/', function () {
        return redirect()->route('admin.weather.index');
    });

    Route::group(['prefix' => 'weather', 'as' => 'weather.'], function () {

        Route::get('/index', 'WeatherController@index')->name('index');
        Route::post('/search', 'WeatherController@search')->name('search');
        Route::get('/autocomplete', 'WeatherController@autocomplete')->name('autocomplete');

    });

    Route::group(['prefix' => 'order', 'as' => 'order.'], function () {

        Route::get('/index', 'OrderController@index')->name('index');
        Route::get('/{order}/edit', 'OrderController@edit')->name('edit');
        Route::put('/{order}', 'OrderController@update')->name('update');

    });

    Route::group(['prefix' => 'orderProduct', 'as' => 'orderProduct.'], function () {

        Route::post('/add', 'OrderProductController@add')->name('add');
        Route::post('/destroy', 'OrderProductController@destroy')->name('destroy');

    });

});