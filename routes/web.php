<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Teams\TeamInvitationController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get('/dashboard', DashboardController::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/admin', function () {
    return Inertia::render('admin/dashboard');
})->middleware(['auth', 'role:admin'])->name('admin.dashboard');

Route::get('/siswa', function () {
    return Inertia::render('siswa/dashboard');
})->middleware(['auth', 'role:siswa'])->name('siswa.dashboard');

Route::middleware('auth')->group(function () {
    Route::post('invitations/{invitation}/accept', [TeamInvitationController::class, 'accept'])->name('invitations.accept');
    Route::delete('invitations/{invitation}/decline', [TeamInvitationController::class, 'decline'])->name('invitations.decline');
});

require __DIR__.'/auth.php';
require __DIR__.'/settings.php';
