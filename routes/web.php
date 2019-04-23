<?php

Route::get('/','HomeController@index')->name('home');

Route::get('/usuario','HomeController@teste');

Route::group(['prefix' => 'login'], function() {
    Route::get('/','Auth\LoginController@index')->name('login');
    Route::post('/', 'Auth\LoginController@authenticate')->name('login');
});

Route::group(['prefix' => 'register'], function() {
    Route::get('/', 'HomeController@registerGet')->name('register');
    Route::post('/post', 'UsuarioController@novo')->name('register/post');
});

Route::group(['prefix' => 'forgot-password'], function() {
    Route::get('/', 'HomeController@forgotGet')->name('forgot');
    Route::post('/', 'HomeController@forgot')->name('forgot');
});

Route::group(['middleware' => ['auth:admin']], function () { 
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/logout-admin','Auth\LoginController@logout')->name('logoutAdmin');
    Route::get('/admin-reg', 'Auth\Admin\AdminController@indexLogin')->name('adminRegister');
    Route::post('/admin-reg', 'Auth\Admin\AdminController@register')->name('adminRegister');
    Route::get('/register-user', 'Auth\Admin\AdminController@registerGet')->name('registerUser');
    Route::post('/register-user', 'Auth\Admin\AdminController@registerUser')->name('registerUSer');
});


Route::get('/logout','Auth\LoginController@logout')->name('logout');
