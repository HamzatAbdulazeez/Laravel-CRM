<?php

use App\Http\Livewire\Dashboard\Customer;
use App\Http\Livewire\Dashboard\Index;
use App\Http\Livewire\Dashboard\Staff;
use App\Http\Livewire\Dashboard\StaffDetail;
use App\Http\Livewire\Dashboard\StaffEdit;
use App\Http\Livewire\Dashboard\Ticket;
use App\Http\Livewire\Login;
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
Route::get('/', Login::class)->name('login');
Route::post('/logout', function () {
    //logout user
    auth()->logout();
    // redirect to homepage
    return redirect('/');
})->name('logout');
// Dashboard
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', Index::class)->name('admin.dashboard');
    Route::get('/all-board', [App\Http\Controllers\DashboardController::class, 'board'])->name('admin.all.board');
    Route::get('/tickets', Ticket::class)->name('admin.tickets');
    Route::get('/all-pipeline', [App\Http\Controllers\DashboardController::class, 'pipeline'])->name('admin.all.pipeline');
    Route::get('/staffs', Staff::class)->name('admin.staffs');
    Route::get('/staffs/{staff}/detail', StaffDetail::class)->name('admin.staff.detail');
    Route::get('/staffs/{staff}/edit', StaffEdit::class)->name('admin.staff.edit');
    Route::get('/contact-card', [App\Http\Controllers\DashboardController::class, 'contact_card'])->name('admin.contact.card');
    Route::get('/edit-contact', [App\Http\Controllers\DashboardController::class, 'edit_contact'])->name('admin.edit.contact');
    Route::get('/customer', Customer::class)->name('admin.view.customer');
    Route::get('/edit-profile', [App\Http\Controllers\DashboardController::class, 'edit_profile'])->name('admin.edit.profile');
    Route::get('/profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('admin.profile');
});