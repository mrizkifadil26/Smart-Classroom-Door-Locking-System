<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('attend', 'AuthController@attend');

Route::apiResource('attendances', 'Api\v1\AttendanceController');
Route::apiResource('classrooms', 'Api\v1\ClassroomController');
Route::apiResource('courses', 'Api\v1\CourseController');
Route::apiResource('schedules', 'Api\v1\ScheduleController');
Route::apiResource('lecturers', 'Api\v1\LecturerController');
Route::apiResource('students', 'Api\v1\StudentController');
Route::apiResource('users', 'Api\v1\UserController');