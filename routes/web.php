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

Route::resource('users', 'UserController');
Route::resource('seniors', 'SeniorController');
Route::resource('comments', 'CommentController');

Route::get('/holiday', 'CalendarController@getHoliday');
Route::post('/holiday', 'CalendarController@postHoliday');
Route::get('/holiday/{id}', 'CalendarController@getHolidayId');
Route::delete('/holiday', 'CalendarController@deleteHoliday');

Route::get('/calendar', 'CalendarController@index');

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::patch('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');

