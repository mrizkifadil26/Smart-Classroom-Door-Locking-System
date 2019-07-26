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
//     return view('auth.login');
// });

Route::post('/', 'AuthController@attend');

Route::get('/', 'AuthController@index');

Route::get('/admin', function () {
    return view('home.dashboard');
});

// Courses
Route::get('/admin/courses', function() {
    return view('home.list.course.index');
});

Route::get('/admin/courses/create', function() {
    return view('home.list.course.create');
});

Route::get('/admin/courses/edit', function() {
    return view('home.list.course.edit');
});

// Classrooms
Route::get('/admin/classrooms', function() {
    return view('home.list.classroom.index');
});

Route::get('/admin/classrooms/create', function() {
    return view('home.list.classroom.create');
});

Route::get('/admin/classrooms/edit', function() {
    return view('home.list.classroom.edit');
});

// Schedules
Route::get('/admin/schedules', function() {
    return view('home.list.schedule.index');
});

Route::get('/admin/schedules/create', function() {
    return view('home.list.schedule.create');
});

Route::get('/admin/schedules/edit', function() {
    return view('home.list.schedule.edit');
});

// Lecturers
Route::get('/admin/lecturers', function() {
    return view('home.users.lecturer.index');
});

Route::get('/admin/lecturers/create', function() {
    return view('home.users.lecturer.create');
});

Route::get('/admin/lecturers/edit', function() {
    return view('home.users.lecturer.edit');
});

// Students
Route::get('/admin/students', function() {
    return view('home.users.student.index');
});

Route::get('/admin/students/create', function() {
    return view('home.users.student.create');
});

Route::get('/admin/students/edit', function() {
    return view('home.users.student.edit');
});

Route::get('/login', function() {
    return view('auth.login');
});