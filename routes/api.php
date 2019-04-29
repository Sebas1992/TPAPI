<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware(['api'])->group(function () {
    Route::post('computer/soap', 'SoapController@index');
    Route::get('computer/soap', 'SoapController@index');
    Route::resource('computer', 'ComputerController');
});
