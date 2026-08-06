<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// AUTHENTICATION ROUTES
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Route::livewire('/register', 'pages::auth.register')->name('register');
Route::livewire('/login', 'pages::auth.login')->name('login');

Route::post('/logout', function () {
    auth()->logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('login');
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::livewire('/student_dashboard', 'pages::dashboard.students.home')->name('student_dashboard')->middleware('student');
    Route::livewire('/students/profile', 'pages::dashboard.students.profile.view')->name('student.profile')->middleware('student');
    Route::livewire('/students/profile/edit', 'pages::dashboard.students.profile.edit')->name('student.profile.edit');

    
    Route::livewire('/tutor_dashboard', 'pages::dashboard.tutors.home')->name('tutor_dashboard')->middleware('tutor');
});
