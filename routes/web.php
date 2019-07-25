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

Route::get('/admin/student', function () {
    return view('admin.users.student');
});