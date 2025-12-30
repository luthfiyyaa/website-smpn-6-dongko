<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use App\Http\Middleware\AdminMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes - Public (Guest Access)
| https://drive.google.com/drive/folders/1zuLnCrAFRZNqGSEB46O7Jqo-CF1nkZHy?usp=drive_link
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/academics', [PageController::class, 'academics'])->name('academics');
Route::get('/student-affairs', [PageController::class, 'studentAffairs'])->name('student-affairs');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/{id}', [PageController::class, 'newsDetail'])->name('news.detail');
Route::get('/facilities', [PageController::class, 'facilities'])->name('facilities');
Route::get('/ppdb', [PageController::class, 'ppdb'])->name('ppdb');
Route::post('/ppdb/submit', [PageController::class, 'submitRegistration'])->name('ppdb.submit');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Admin Routes - Protected (Admin Only)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // News Management
    Route::resource('news', NewsController::class);
    
    // Gallery Management
    Route::resource('gallery', GalleryController::class);
    
    // Registration Management
    Route::resource('registrations', AdminRegistrationController::class)->only(['index', 'show', 'update', 'destroy']);
});