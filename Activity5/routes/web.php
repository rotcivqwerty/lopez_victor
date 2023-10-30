<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('loginPage');});

Route::get('/register', function() {return view('registerPage');}) -> name('register');

Route::get('/dashboard', function() {return view('dashboardPage');}) -> name('dashboard');

Route::post('/register', 'App\Http\Controllers\AccountController@register');

Route::post('/', 'App\Http\Auth\LoginController@login');