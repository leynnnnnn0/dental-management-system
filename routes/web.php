<?php

use App\Livewire\Dashboard;
use App\Livewire\Patient;
use App\Livewire\User;
use App\Livewire\Dentist;

use App\Livewire\User\Create as CreateUser;
use App\Livewire\Patient\Create as CreatePatient;
use App\Livewire\Dentist\Create as CreateDentist;
use App\Livewire\Schedule\Create as CreateSchedule;

use App\Livewire\User\Edit as EditUser;
use App\Livewire\Patient\Edit as EditPatient;
use App\Livewire\Dentist\Edit as EditDentist;
use App\Livewire\Schedule;
use App\Livewire\Schedule\Edit as EditSchedule;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('dashboard', Dashboard::class);

Route::name('users.')->prefix('users')->group(function () {
    Route::get('/', User::class)->name('index');
    Route::get('/create', CreateUser::class)->name('create');
    Route::get('/edit/{id}', EditUser::class)->name('edit');
});

Route::name('patients.')->prefix('patients')->group(function () {
    Route::get('/', Patient::class)->name('index');
    Route::get('/create', CreatePatient::class)->name('create');
    Route::get('/edit/{id}', EditPatient::class)->name('edit');
});

Route::name('dentists.')->prefix('dentists')->group(function () {
    Route::get('/', Dentist::class)->name('index');
    Route::get('/create', CreateDentist::class)->name('create');
    Route::get('/edit/{id}', EditDentist::class)->name('edit');
});

Route::name('schedules.')->prefix('schedules')->group(function () {
    Route::get('/', Schedule::class)->name('index');
    Route::get('/create', CreateSchedule::class)->name('create');
    Route::get('/edit/{id}', EditSchedule::class)->name('edit');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
