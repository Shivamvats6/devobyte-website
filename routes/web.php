<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'pages.home')->name('home');

Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/about', 'pages.about-us')->name('about');
Route::view('/our-team', 'pages.our-team')->name('our-team');
Route::view('/our-services', 'pages.service')->name('our-services');
Route::view('/development', 'pages.development')->name('development');
Route::view('/seo', 'pages.seo')->name('seo');


Route::post('/contact-submit', [ContactController::class, 'store'])
    ->name('contact.submit');

Route::get('/terms-and-conditions', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/privacy-policy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/refund', function () {
    return view('pages.refund');
})->name('refund');
