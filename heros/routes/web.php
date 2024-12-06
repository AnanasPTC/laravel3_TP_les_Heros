<?php

use Illuminate\Support\Facades\Route;
use App\Models\Hero;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/heros', function () {
    $heros = Hero::with('skill')->get();
    return view('index');
})->name('index');

Route::get('/login', function () {
    $heros = Hero::with('skill')->get();
    return view('login');
})->name('login');