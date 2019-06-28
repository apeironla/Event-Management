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
Route::group(['middleware'=>['auth','web']],function(){

Route::get('/home', 'HomeController@index')->name('home');




Route::get('event','EventController@index')->name('index_event');
Route::get('event/new','EventController@create_event')->name('create_event');
Route::post('event','EventController@store_event')->name('store_event');
Route::put('event/{event}','EventController@update_event')->name('update_event');
Route::get('event/{event}/edit','EventController@edit_event')->name('edit_event');
Route::delete('event/{event}','EventController@destroy_event')->name('destroy_event');

Route::get('index_package','PackageController@index_package')->name('index_package');
Route::get('package/new','PackageController@create_package')->name('create_package');
Route::post('index_package','PackageController@store_package')->name('store_package');
Route::put('package/{package}','packageController@update_package')->name('update_package');
Route::get('package/{package}/edit','packageController@edit_package')->name('edit_package');
Route::delete('package/{package}','packageController@destroy_package')->name('destroy_package');

Route::get('Book/{packageid}','BookController@book')->name('book_form');
Route::post('/home','BookController@store_book')->name('store_book');

// Route::get('package','PackageController@package')->name('package');

Route::get('/admin_gallary', function () {
    return view('admin_gallary');
})->name('admin_gallary');

});

Route::get('/', function () {
    // if (Auth::check()) {
    //     $this->user = Auth::user();
 
    return view('index');
})->name('land');

Route::get('/invalid', 'BookController@book')->name('invalid');
Route::get('/sendemail', 'SendEmailController@index')->name('sendemail');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::get('package','PackageController@package')->name('package');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/album', function () {
    return view('user.user_gallery');
})->name('user_gallery');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();





