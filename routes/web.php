<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/tasks', function () {
    return Inertia::render('Task/TaskOverview');
})->middleware(['auth', 'verified'])->name('tasks');

Route::get('/calendar', function () {
    return Inertia::render('Calendar/CalendarOverview');
})->middleware(['auth', 'verified'])->name('calendar');

Route::get('/friends', function () {
    return Inertia::render('Friends/FriendsOverview');
})->middleware(['auth', 'verified'])->name('friends');

Route::get('/timer', function () {
    return Inertia::render('Timer/TimerOverview');
})->middleware(['auth', 'verified'])->name('timer');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/locale/{lang}',[LocaleController::class, 'setLocale']);

require __DIR__.'/auth.php';
