<?php

use App\Livewire\Dashboard;
use App\Livewire\User;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('dashboard', Dashboard::class);
Route::get('users', User::class);

Route::view('profile', 'profile')
    ->middleware(['auth']) 
    ->name('profile');

require __DIR__ . '/auth.php';
