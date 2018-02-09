<?php

/*
----------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('rooms', 'RoomController')->middleware('auth');
Route::resource('students', 'StudentController')->middleware('auth');
Route::resource('subjects', 'SubjectController')->middleware('auth');
Route::resource('teachers', 'TeacherController')->middleware('auth');
Route::resource('subject_tables', 'SubjectTableController')->middleware('auth');
Route::resource('subject_registers', 'SubjectRegisterController')->middleware('auth');

Route::get('/', function () {
	return view('welcome');
}
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
