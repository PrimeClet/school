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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/students', 'StudentController@index')->name('students');
Route::post('/students', 'StudentController@store')->name('students.create');
Route::PUT('/students/{id}', 'StudentController@update')->name('students.update');
Route::PUT('/students/step-two/{id}', 'StudentController@updateTwo')->name('students.updateTwo');
Route::PUT('/students/step-three/{id}', 'StudentController@updateThree')->name('students.updateThree');
