<?php

use App\Livewire\Dashboard;
use App\Livewire\User;
use App\Livewire\User\Create as CreateUser;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('dashboard', Dashboard::class);


Route::name('users.')->group(function () {
    Route::get('users', User::class)->name('index');
    Route::get('users/create', CreateUser::class)->name('create');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
