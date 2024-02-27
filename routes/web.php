<?php

use App\Http\Controllers\CourseController;

Route::post('/courses', [CourseController::class, 'store']);
Route::get('/courses', [CourseController::class, 'index']);
