<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::Resource('Student', StudentController::class);
Route::Resource('Teacher', TeacherController::class);
Route::Resource('Course', CourseController::class);
Route::Resource('Batche', BatchController::class);
Route::Resource('Enrollment', EnrollmentController::class);
Route::Resource('Payment', PaymentController::class);