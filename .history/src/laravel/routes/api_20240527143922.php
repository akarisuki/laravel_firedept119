<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PrefectureController;
use App\Http\Controllers\Api\FireDepartmentController;

Route::get('/prefectures', [PrefectureController::class, 'index']);
Route::get('/fire-departments', [FireDepartmentController::class, 'index']);















?>