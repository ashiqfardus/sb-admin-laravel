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

    //Slider Routes

    Route::get('/slider/create',[
        'uses'=>'SliderController@create',
        'as'=>'slider.create'
    ]);

    Route::post('/slider/store',[
        'uses'=>'SliderController@store',
        'as'=>'slider.store'
    ]);

    Route::get('slider/show',[
       'uses'=>'SliderController@index',
       'as'=>'slider.index'
    ]);
    Route::get('slider/edit/{id}',[
        'uses'=>'SliderController@edit',
        'as'=>'slider.edit'
    ]);
    Route::post('slider/update/{id}',[
        'uses'=>'SliderController@update',
        'as'=>'slider.update'
    ]);

    Route::get('slider/delete/{id}',[
        'uses'=>'SliderController@destroy',
        'as'=>'slider.delete'
    ]);

    //Logo Routes
    ROute::get('logo/index',[
       'uses'=>'LogoController@index',
       'as'=>'logo.index'
    ]);
});
