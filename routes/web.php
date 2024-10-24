<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

// show the home page
Route::get('/', [HomeController::class, 'index'])->name('home');


// show the about page
Route::view('/about', 'about')->name('about');

// show the services page
Route::view('/services', 'services')->name('services');

// show the contact page
Route::view('/contact', 'contact')->name('contact');


// route for admin

// show all employees
Route::resource('employees', EmployeeController::class);


// show the admin dashboard page
Route::get('/admin', function () {
    // if the user is logged in, show the admin dashboard
    if (Auth::check()) {
        return view('admin.dashboard');
    } 
    // if the user is not logged in, redirect to the login page
    else {
        return redirect()->route('login');
    }
})->name('admin.dashboard');


// show the admin dashboard page
Route::get('/admin', [EmployeeController::class, 'dashboard'])->name('admin.dashboard');

 
// authentication routes
Auth::routes();

// show the home page after login
Route::get('/home', [HomeController::class, 'index'])->name('home');
