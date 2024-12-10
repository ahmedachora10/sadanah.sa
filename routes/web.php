<?php

use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\SetLocale;
use App\Models\OurService;
use App\Models\OurWork;
use App\Models\Support;
use App\Services\InstagramService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/template', function () {
    return view('welcome');
});

Route::get('instagram/auth', fn() => redirect()->to(InstagramService::auth()));
Route::get('instagram/feeds', fn() => dd((new InstagramService)->getImages()));
Route::get('terms', fn() => 'Terms');
Route::get('instagram-auth-failure', fn() => dd(request()));
Route::get('instagram-auth-success', fn() => 'success');

Route::get('switch-theme', function () {
    $theme = request()->session()->get('theme', 'light');

    // Toggle between 'light' and 'dark' themes
    $newTheme = ($theme === 'light') ? 'dark' : 'light';

    // Store the new theme in the session
    request()->session()->put('theme', $newTheme);

    return redirect()->back();
})->name('switch.theme');

// Route::get('mail', function () {
//     return view('mails.send-reminder', ['title' => '', 'corp' => Corp::first(), 'target' => '']);
// });

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/service', 'service')->name('service');
        Route::get('/serviceDetails', 'service_details')->name('service.details');
        Route::get('/about', 'about')->name('about');
        Route::get('/influencers', 'influencers')->name('influencers');
        Route::get('/influencersDetails', 'influencers_details')->name('influencers.details');
        Route::get('/portfolio', 'portfolio')->name('portfolio');
        Route::get('/portfolioDetails', 'portfolio_details')->name('portfolio.details');
        Route::get('/blog', 'blog')->name('blog');
        Route::post('/addComment', 'add_comment')->name('add.comment');
        Route::get('/blogDetails', 'blog_details')->name('blog.details');
        Route::get('/job', 'job')->name('job');
        Route::get('/contactus', 'contact')->name('contactus');
        // Route::get('/set-locale/{local}', 'lang')->name('lang');
    });

Route::get('/switch-langauge/{locale?}', function ($locale = 'ar') {

    // $locale = Session::get('lang') === 'ar' ? 'en' : 'ar';

    Session::put('lang', $locale);

    App::setLocale($locale);

    return redirect()->back();
})->withoutMiddleware(SetLocale::class)->name('switch-language');

Route::get('clients/reviews', function () {
    return view('reviews');
})->name('clients.reviews');

Route::resource('reviews', ReviewController::class)->only('store');

Route::get('/jobs', function () {
    return view('job');
})->name('jobs.request');

Route::get('contact', function () {
    $supports = Support::all();
    return view('contact', compact('supports'));
})->name('contact');

Route::get('works/{work}/details', function (OurWork $work) {
    return view('work-details', compact('work'));
})->name('works.show');

Route::get('services/all', function () {
    return view('services');
})->name('services.all');

Route::get('services/{service}/details', function (OurService $service) {
    return view('service-details', compact('service'));
})->name('services.details');

Route::get('services/request/{service}', function (OurService $service) {
    return view('service-request', compact('service'));
})->name('services.request');

require __DIR__ . '/auth.php';

require __DIR__ . '/_dashboard.php';