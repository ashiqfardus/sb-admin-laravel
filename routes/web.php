<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Admin Routes

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function() {

    Route::get('/slider/create',[
        'uses'=>'SliderController@create',
        'as'=>'slider.create'
    ]);

    Route::post('/slider/store',[
        'uses'=>'SliderController@store',
        'as'=>'slider.store'
    ]);

    Route::get('/show',[
       'uses'=>'SliderController@index',
       'as'=>'slider.index'
    ]);
});
