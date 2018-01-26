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

Route::resource('rooms', 'RoomController');
Route::resource('students', 'StudentController');
Route::resource('subjects', 'SubjectController');
Route::resource('teachers', 'TeacherController');
Route::resource('subject_tables', 'SubjectTableController');
Route::resource('subject_registers', 'SubjectRegisterController');

Route::get('/', function () {
    return view('welcome');
});
