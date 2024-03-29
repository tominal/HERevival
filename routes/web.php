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

Route::middleware(['auth'])->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('internet')->group(function() {

        Route::get('/', 'BrowserController@index')->name('get.browser.index');
        Route::get('/login', 'BrowserController@login')->name('get.browser.login');
        Route::get('/hack', 'BrowserController@hack')->name('get.browser.hack');
        Route::post('/ip', 'BrowserController@setIp')->name('set.browser.ip');

    });
});
