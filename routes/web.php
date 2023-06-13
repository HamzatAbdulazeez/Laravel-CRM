<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/test', [App\Http\Controllers\DashboardController::class, 'test']);
Route::get('/', [App\Http\Controllers\DashboardController::class, 'login'])->name('login');
// Dashboard
Route::prefix('dashboard')->group(function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/all-board', [App\Http\Controllers\DashboardController::class, 'board'])->name('admin.all.board');
    Route::get('/all-kanban', [App\Http\Controllers\DashboardController::class, 'kanban'])->name('admin.all.kanban');
    Route::get('/all-pipeline', [App\Http\Controllers\DashboardController::class, 'pipeline'])->name('admin.all.pipeline');
    Route::get('/contact-list', [App\Http\Controllers\DashboardController::class, 'contact_list'])->name('admin.contact.list');
    Route::get('/contact-card', [App\Http\Controllers\DashboardController::class, 'contact_card'])->name('admin.contact.card');
    Route::get('/edit-contact', [App\Http\Controllers\DashboardController::class, 'edit_contact'])->name('admin.edit.contact');
    Route::get('/customer', [App\Http\Controllers\DashboardController::class, 'customer'])->name('admin.view.customer');
    Route::get('/edit-profile', [App\Http\Controllers\DashboardController::class, 'edit_profile'])->name('admin.edit.profile');
    Route::get('/profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('admin.profile');
});
