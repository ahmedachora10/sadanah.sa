<?php

use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\SetLocale;
use App\Livewire\Actions\QuestionnaireRequestForm;
use App\Livewire\Container\InfluencerJoinRequest;
use App\Models\JobPost;
use App\Models\OurService;
use App\Models\OurWork;
use App\Models\Permission;
use App\Models\Questionnaire;
use App\Models\Support;
use App\Models\User;
use App\Services\InstagramService;
use Barryvdh\DomPDF\Facade\Pdf;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/template', function () {
    return view('welcome');
});


// Route::get('instagram/auth', fn() => app(InstagramService::class)->auth());
Route::get('instagram/feeds', fn() => dd(app(InstagramService::class)->getPosts()));
Route::get('terms', fn() => 'Terms');
// Route::get('instagram-auth-failure', fn() => dd(request()));
// Route::get('instagram-auth-success', fn() => dd(app(InstagramService::class)->getProfile()));

Route::get('switch-theme', function () {
    $theme = request()->session()->get('theme', 'light');

    // Toggle between 'light' and 'dark' themes
    $newTheme = ($theme === 'light') ? 'dark' : 'light';

    // Store the new theme in the session
    request()->session()->put('theme', $newTheme);

    return redirect()->back();
})->name('switch.theme');

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/service', 'service')->name('service');
        Route::get('/service/{service}/details', 'service_details')->name('service.details');
        Route::get('/about', 'about')->name('about');
        Route::get('/influencers', 'influencers')->name('influencers');
        Route::get('/influencers/{team}/details', 'influencers_details')->name('influencers.details');
        Route::get('/portfolio', 'portfolio')->name('portfolio');
        Route::get('/portfolio/{work}/details', 'portfolio_details')->name('portfolio.details');
        Route::get('/blog', 'blog')->name('blog');
        Route::post('/addComment', 'add_comment')->name('add.comment');
        Route::get('/blog/{blog}/details', 'blog_details')->name('blog.details');
        Route::get('/job', 'job')->name('job');
        Route::get('/contactus', 'contact')->name('contactus');
    });

Route::view('influencers/join-request','site.influencer-join-request')->name('influencers.join-request');

Route::get('/switch-langauge/{locale?}', function ($locale = 'ar') {
    Session::put('lang', $locale);

    App::setLocale($locale);

    return redirect()->back();
})->withoutMiddleware(SetLocale::class)->name('switch-language');

Route::get('clients/reviews', function () {
    return view('reviews');
})->name('clients.reviews');

Route::resource('reviews', ReviewController::class)->only('store');

Route::get('/jobs/{job}', function (JobPost $job) {
    return view('job', compact('job'));
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

Route::get('questionnaire-form', QuestionnaireRequestForm::class)->name('clients.questionnaire');

require __DIR__ . '/auth.php';

require __DIR__ . '/_dashboard.php';