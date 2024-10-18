
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewAuthorManager;
use App\Http\Controllers\FileUploadController; 

// Each route should have a unique URL path
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/home', function () {
    return view('index'); // index is often used as home
})->name('index');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/services', function () {
    return view('services');
})->name('services');




Route::get('/upload', [FileUploadController::class, 'showUploadForm']);
Route::post('/upload', [FileUploadController::class, 'uploadFile']);




Route::get('/login', [NewAuthorManager::class , 'login'])->name('login');
Route::post('/login', [NewAuthorManager::class , 'loginPost'])->name('login.post');

Route::get('/registrasi', [NewAuthorManager::class , 'registrasi'])->name('registrasi');
Route::post('/registrasi', [NewAuthorManager::class , 'registrasiPost'])->name('registrasi.post');

Route::get('/logout', [NewAuthorManager::class , 'logout'])->name('logout');
Route::post('/logout', [NewAuthorManager::class , 'logout'])->name('logout');

// Menangani logout
Route::get('/logout', [NewAuthorManager::class, 'logout'])->name('logout');
Route::post('/logout', [NewAuthorManager::class, 'logout'])->name('logout.post');



use Illuminate\Support\Facades\Auth;

// Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::get('/layout', function () {
    return view('layout'); // Route ke dokumen.blade.php
})->name('layout');

Route::get('/login', function () {
    return view('login'); // Route ke dokumen.blade.php
})->name('login');
