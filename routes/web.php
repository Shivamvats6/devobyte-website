<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Controllers
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContactLeadController;
use App\Http\Controllers\Admin\CareerController as AdminCareerController;
use App\Http\Controllers\Admin\CareerVacancyController;
use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\Frontend\CareerPageController;
use App\Http\Controllers\Frontend\BlogPageController;


/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
|--------------------------------------------------------------------------
*/

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
Route::view('/ai_chatbots', 'pages.AI-chatbot')->name('ai_chatbots');
Route::view('/youtube', 'pages.youtube')->name('youtube');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/case-study', 'pages.case-study')->name('case-study');

Route::view('/social-media-marketing', 'pages.social-media-marketing')
    ->name('social-media-marketing');


/*
|--------------------------------------------------------------------------
| FRONTEND DYNAMIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/careers', [CareerPageController::class, 'index'])
    ->name('careers');

/*
|--------------------------------------------------------------------------
| BLOG ROUTES (IMPORTANT ORDER)
|--------------------------------------------------------------------------
*/

/*
Category Filter Route MUST be above blog.show
Otherwise slug conflict ho jayega
*/
Route::get('/blog/category/{slug}', [BlogPageController::class, 'category'])
    ->name('blog.category');

Route::get('/blog', [BlogPageController::class, 'index'])
    ->name('blog.index');

Route::get('/blog/{slug}', [BlogPageController::class, 'show'])
    ->name('blog.show');


/*
|--------------------------------------------------------------------------
| FRONTEND FORM SUBMISSIONS
|--------------------------------------------------------------------------
*/

Route::post('/contact-submit', [ContactController::class, 'store'])
    ->name('contact.submit');

Route::post('/career-apply', [CareerController::class, 'store'])
    ->name('career.apply');


/*
|--------------------------------------------------------------------------
| STATIC PAGES
|--------------------------------------------------------------------------
*/

Route::view('/terms-and-conditions', 'pages.terms')->name('terms');
Route::view('/privacy-policy', 'pages.privacy')->name('privacy');
Route::view('/refund', 'pages.refund')->name('refund');


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->as('admin.')
    ->group(function () {

        /*
        ---------- Dashboard ----------
        */
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');


        /*
        ---------- Leads ----------
        */
        Route::get('/leads', [ContactLeadController::class, 'index'])
            ->name('leads');

        Route::patch('/leads/{id}/important',
            [ContactLeadController::class, 'toggleImportant']
        )->name('leads.important');

        Route::delete('/leads/{id}',
            [ContactLeadController::class, 'destroy']
        )->name('leads.delete');


        /*
        ---------- Career Applications ----------
        */
        Route::get('/careers', [AdminCareerController::class, 'index'])
            ->name('careers');

        Route::patch('/careers/{id}/important',
            [AdminCareerController::class, 'toggleImportant']
        )->name('careers.important');

        Route::delete('/careers/{id}',
            [AdminCareerController::class, 'destroy']
        )->name('careers.delete');


        /*
        ---------- Career Vacancies ----------
        */
        Route::get('/career-vacancies', [CareerVacancyController::class, 'index'])
            ->name('careers.vacancies');

        Route::get('/career-vacancies/create', [CareerVacancyController::class, 'create'])
            ->name('careers.vacancies.create');

        Route::post('/career-vacancies', [CareerVacancyController::class, 'store'])
            ->name('careers.vacancies.store');

        Route::get('/career-vacancies/{id}/edit', [CareerVacancyController::class, 'edit'])
            ->name('careers.vacancies.edit');

        Route::put('/career-vacancies/{id}', [CareerVacancyController::class, 'update'])
            ->name('careers.vacancies.update');

        Route::patch('/career-vacancies/{id}/toggle', [CareerVacancyController::class, 'toggleStatus'])
            ->name('careers.vacancies.toggle');

        Route::delete('/career-vacancies/{id}', [CareerVacancyController::class, 'destroy'])
            ->name('careers.vacancies.delete');


        /*
        ---------- BLOG ADMIN ----------
        */
        Route::get('/blogs', [BlogController::class, 'index'])
            ->name('blogs.index');

        Route::get('/blogs/create', [BlogController::class, 'create'])
            ->name('blogs.create');

        Route::post('/blogs', [BlogController::class, 'store'])
            ->name('blogs.store');

        Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])
            ->name('blogs.edit');

        Route::put('/blogs/{id}', [BlogController::class, 'update'])
            ->name('blogs.update');

        Route::patch('/blogs/{id}/status', [BlogController::class, 'toggleStatus'])
            ->name('blogs.toggle');

        Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])
            ->name('blogs.delete');

});


/*
|--------------------------------------------------------------------------
| USER PROFILE ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
