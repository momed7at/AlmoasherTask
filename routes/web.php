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

Route::namespace('Doctors')->name('doctors.')->group(function () { 
    Route::get('/','TherapistsController@index')->name('therapists-list');
    Route::get('/all','TherapistsController@get_all')->name('therapists-list-all');

    Route::get('/{id}','TherapistsController@show')->name('therapist.show');

    Route::get('/doc/search/{search}/get','TherapistsController@search')->name('therapists.search');
});
