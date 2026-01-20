<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'pages.home')->name('home');

Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/about', 'pages.about-us')->name('about');
Route::view('/our-team', 'pages.our-team')->name('our-team');
Route::view('/our-services', 'pages.service')->name('our-services');
Route::view('/web-development', 'pages.web-development')->name('web-development');
Route::view('/mobile-development', 'pages.mobile-development')->name('mobile-development');
Route::view('/seo', 'pages.seo')->name('seo');
Route::view('/influencer', 'pages.influencer')->name('influencer');
Route::view('/custom_solution', 'pages.custom_solution')->name('custom_solution');
Route::view('/lead_generation', 'pages.lead_generation')->name('lead_generation');
Route::view('/email', 'pages.email')->name('email');
Route::view('/industry', 'pages.industry')->name('industry');
Route::view('/instagram', 'pages.instagram')->name('instagram');
Route::view('/linkedin', 'pages.linkedin')->name('linkedin');



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
