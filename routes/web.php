<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Homepage */
Route::get('/', function () { return view('home');});
Route::get('/aboutus', function () { return view('aboutus');});
Route::get('/events', function () { return view('events');});

/* Login */
Route::get('/login', function () { return view('forms/login');});
Route::get('/signup', function () { return view('forms/signup');});

/* Admin */
Route::get('/admindashboard', function () { return view('admin/admindashboard');});
Route::get('/adminevent', function () { return view('admin/adminevent');});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
