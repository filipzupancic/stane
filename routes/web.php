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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/kredit', function () {
    return view('welcome');
})->name('welcome');

Route::get('/stroski', function () {
    return view('costs');
})->name('costs');

Route::get('/eko', function () {
    return view('co2');
})->name('co2');

Route::get('/nalozbe', function () {
    return view('investments');
})->name('investments');

Route::get('/profil', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
