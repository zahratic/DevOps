<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
  //  return view('welcome');
//});


require __DIR__.'/auth.php';

Route::get('service/create','App\Http\Controllers\ServiceController@create')->middleware(['auth'])->name("create");
Route::get('service/destroy/{id}','App\Http\Controllers\ServiceController@destroy')->middleware(['auth'])->name("destroy");
Route::get('service/active/{id}','App\Http\Controllers\ServiceController@active')->middleware(['auth'])->name("active");
Route::post('service/store','App\Http\Controllers\ServiceController@store')->middleware(['auth'])->name("store");
Route::post('service/update','App\Http\Controllers\ServiceController@update')->middleware(['auth'])->name("update");
Route::get('service/show/{id}','App\Http\Controllers\ServiceController@show')->middleware(['auth'])->name("show");
Route::get('service/index','App\Http\Controllers\ServiceController@index')->name("index");
Route::get('/dashboard','App\Http\Controllers\ServiceController@index')->middleware(['auth'])->name('dashboard');
Route::get('/','App\Http\Controllers\ServiceController@liste')->name('liste');
Route::get('service/contact','App\Http\Controllers\ServiceController@contact')->name('contact');