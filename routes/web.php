<?php

use App\Livewire\Appointment;
use App\Livewire\Dashboard;
use App\Livewire\Patient;
use App\Livewire\User;
use App\Livewire\Dentist;

use App\Livewire\User\Create as CreateUser;
use App\Livewire\Patient\Create as CreatePatient;
use App\Livewire\Dentist\Create as CreateDentist;
use App\Livewire\Schedule\Create as CreateSchedule;
use App\Livewire\Appointment\Create as CreateAppointment;
use App\Livewire\MedicalHistory\Create as CreateMedicalHistory;

use App\Livewire\PatientPage\Create as PatientCreateAppointment;

use App\Livewire\User\Edit as EditUser;
use App\Livewire\Patient\Edit as EditPatient;
use App\Livewire\Dentist\Edit as EditDentist;
use App\Livewire\Appointment\Edit as EditAppointment;
use App\Livewire\MedicalHistory\Edit as EditMedicalHistory;

use App\Livewire\MedicalHistory;
use App\Livewire\PatientAppointment;
use App\Livewire\PatientDashboard;
use App\Livewire\PatientLogin;
use App\Livewire\Schedule;
use App\Livewire\Schedule\Edit as EditSchedule;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('dashboard', Dashboard::class)->name('dashboard');

    Route::name('users.')->prefix('users')->group(function () {
        Route::get('', User::class)->name('index');
        Route::get('create', CreateUser::class)->name('create');
        Route::get('edit/{id}', EditUser::class)->name('edit');
    });

    Route::name('patients.')->prefix('patients')->group(function () {
        Route::get('', Patient::class)->name('index');
        Route::get('create', CreatePatient::class)->name('create');
        Route::get('edit/{id}', EditPatient::class)->name('edit');
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


    Route::name('appointments.')->prefix('appointments')->group(function () {
        Route::get('/', Appointment::class)->name('index');
        Route::get('/create', CreateAppointment::class)->name('create');
        Route::get('/edit/{id}', EditAppointment::class)->name('edit');
    });

    Route::name('medical-histories.')->prefix('medical-histories')->group(function () {
        Route::get('/', MedicalHistory::class)->name('index');
        Route::get('/create', CreateMedicalHistory::class)->name('create');
        Route::get('/edit/{id}', EditMedicalHistory::class)->name('edit');
    });
});

Route::prefix('patient')->group(function () {
    Route::get('/login', PatientLogin::class)->name('index');
    Route::get('/dashboard', PatientDashboard::class)->name('patient-dashboard');
    Route::name('patient-appointments.')->prefix('appointments')->group(function () {
        Route::get('/', PatientAppointment::class)->name('index');
        Route::get('/create', PatientCreateAppointment::class)->name('create');
    });
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
