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
    return view('index');
});

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('event','EventController@index')->name('index');
Route::get('event/new','EventController@create_event')->name('create_event');
Route::post('event','EventController@store_event')->name('store_event');
Route::put('event/{event}','EventController@update_event')->name('update_event');
Route::get('event/{event}/edit','EventController@edit_event')->name('edit_event');
Route::delete('event/{event}','EventController@destroy_event')->name('destroy_event');

Route::get('package','PackageController@index_package')->name('index_package');
Route::get('package/new','PackageController@create_package')->name('create_package');
Route::post('package','PackageController@store_package')->name('store_package');
Route::put('package/{package}','packageController@update_package')->name('update_package');
Route::get('package/{package}/edit','packageController@edit_package')->name('edit_package');
Route::delete('package/{package}','packageController@destroy_package')->name('destroy_package');

