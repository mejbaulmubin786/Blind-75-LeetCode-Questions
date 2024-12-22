<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/user/{id}/profile', function (string $id) {
    return '<h1>My Profile</h1>';
})->name('profile');

Route::get('/user/{id}/profile', function (string $id) {
    return "User ID: $id | Photos: " . request('photos');
})->name('profile');

// $url = route('profile', ['id' => 1, 'photos' => 'yes']);

Route::get('/about', function () {
    return '<a href="' . route('profile', ['id' => 1]) . '">My Profile</a>';
})->name('about');
// $url = route('profile', ['id' => 1]);
