<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HeadlineController;
use App\Http\Controllers\Admin\JobCityController;
use App\Http\Controllers\Admin\JobPostController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\OurClientController;
use App\Http\Controllers\Admin\OurServiceController;
use App\Http\Controllers\Admin\OurTeamController;
use App\Http\Controllers\Admin\OurWorkController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\VisionController;
use App\Http\Controllers\Admin\WhyUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard\Container\ContactUsContainer;
use App\Livewire\Dashboard\Container\JobRequestsContainer;
use App\Livewire\Dashboard\Container\ServiceRequestsContainer;
use App\Livewire\Dashboard\Container\SubscribersContainer;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function ()
{
    Route::controller(SettingController::class)
    ->prefix('settings')->name('settings.')
    ->group(function ()
    {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
    });

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('verified')->name('dashboard');

    Route::resource('users', UserController::class);

    Route::resource('visions', VisionController::class);

    Route::resource('roles', RoleController::class)->only('index', 'destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('sliders', SliderController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('our-services', OurServiceController::class);
    Route::resource('our-clients', OurClientController::class);
    Route::get('subscribers', SubscribersContainer::class)->name('subscribers.index');
    Route::get('contact-us', ContactUsContainer::class)->name('contact-us.index');
    Route::resource('statistics', StatisticController::class);
    Route::resource('services', ServiceController::class);

    Route::post('our-works/media/remove', [OurWorkController::class, 'removeMedia'])
        ->name('our-works.media.remove');

    Route::post('our-works/add-images/{work}', [OurWorkController::class, 'uploadImages'])->name('our-works.add-images.store');
    Route::resource('our-works', OurWorkController::class);
    Route::resource('tags', TagController::class);

    Route::get('job-requests', JobRequestsContainer::class)->name('job-requests.index');
    Route::resource('requests/jobs', JobPostController::class);//->parameter('translation', 'headlineTranslation');
    Route::resource('job-cities', JobCityController::class);
    Route::resource('support', SupportController::class);
    Route::resource('headlines', HeadlineController::class)->only(['index', 'update']);
    Route::get('service-requests', ServiceRequestsContainer::class)->name('services.requests');
    Route::resource('faq', FaqController::class);
    Route::resource('team', TeamController::class);
    Route::resource('our-team', OurTeamController::class);
    Route::post('about-us/media/remove', [AboutController::class, 'removeMedia'])
        ->name('about-us.media.remove');
    Route::resource('about-us', AboutController::class);
    Route::resource('reviews', ReviewController::class)->except('store');
    Route::resource('why-us', WhyUsController::class)->only(['index', 'update']);
    Route::post('certificates/add', [WhyUsController::class , 'add_certificate'])->name('add.certificate');
    Route::post('certificates/update', [WhyUsController::class , 'update_certificate'])->name('update.certificate');
    Route::post('certificates/delete', [WhyUsController::class , 'delete_certificate'])->name('delete.certificate');

    Route::controller(MediaController::class)
        ->name('media.')
        ->prefix('media')
        ->group(function () {
            Route::post('/', 'store')->name('store');
        });
});