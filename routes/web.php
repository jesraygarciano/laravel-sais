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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DiaryController@index')->name('dairy.index');
Route::get('/diary/create', 'DiaryController@create')->name('dairy.create');

Route::post('diary/create', 'DiaryController@store')
    ->name('diary.create');