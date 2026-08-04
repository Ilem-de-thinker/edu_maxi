<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');



#++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# AUTHENTICATION ROUTES
#++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Route::livewire('/register', "pages::auth.register_student")->name('register');
// Route::livewire('/login', "pages::aut")


Route::middleware('auth')->group(function(){
    Route::livewire('/student_dashboard', 'pages::dashboard.students.home')->name('student_dashboard');
});
