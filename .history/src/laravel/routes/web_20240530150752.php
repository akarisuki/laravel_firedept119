<?php

use App\Http\Controllers\Api\FireDepartmentController as ApiFireDepartmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrefectureController;
use App\Http\Controllers\FireDepartmentController;
use App\Models\FireDepartment;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(PrefectureController::class)->group(function () { 
    Route::get('api/prefecture/index', 'index');
});

Route::controller(ApiFireDepartmentController::class)->group(function () { 
    Route::get('api/firedepartment/index', 'index');
});

require __DIR__.'/auth.php';
