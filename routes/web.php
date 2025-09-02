<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

Route::Resource('students', StudentController::class);
Route::Resource('teachers', TeacherController::class);
Route::Resource('courses', CourseController::class);
Route::Resource('batches', BatchController::class);
Route::Resource('enrollments', EnrollmentController::class);
Route::Resource('payments', PaymentController::class);