
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