<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
Route::get('/link', function () {
    Artisan::call('storage:link');
});
Route::get('/', [FrontController::class, 'index'])->name('home');

Route::get('/request-demo', [FrontController::class, 'RequestDemoPage']);
// New Services Page
Route::get('/microsoft-dynamics-365-implementation-Services', [FrontController::class, 'NewImplServices']);
Route::get('/microsoft-dynamics-365-migration-services', [FrontController::class, 'NewUpgrServices']);
Route::get('/microsoft-dynamics-365-remote-resources', [FrontController::class, 'NewRemServices']);
Route::get('/dynamics-365-customization', [FrontController::class, 'NewCustServices']);
Route::get('/dynamics-365-support', [FrontController::class, 'NewSupportService']);


// New Services Page End
// New Landing Pages
Route::get('/microsoft-dynamics-365-business-central', [FrontController::class, 'bcNewLanding']);
Route::get('/dynamics-365-finance-and-operations', [FrontController::class, 'financeNewLanding']);
Route::get('/microsoft-dynamics-365-supply-chain-management', [FrontController::class, 'SCNewLanding']);
Route::get('/dynamics-365-human-resources', [FrontController::class, 'HRNewLanding']);
Route::get('/dynamics-365-sales', [FrontController::class, 'SalesNewLanding']);
Route::get('/dynamics-365-marketing', [FrontController::class, 'MarketingNewLanding']);
// New Landing Pages End
// Guided Tour
Route::get('/business-central-guided-tour', [FrontController::class, 'bcGuided']);
Route::get('/finance-and-operations-guided-tour', [FrontController::class, 'financeGuided']);
Route::get('/microsoft-dynamics-365-supply-chain-tour', [FrontController::class, 'supplyGuided']);
Route::get('/human-resource-guided-tour', [FrontController::class, 'hrguided']);
// Guided Tour End
Route::post('/guided-tour-contact-form', [HomeController::class, 'bcguidedcontactForm']);
Route::get('/contact-us', [FrontController::class, 'contact']);
Route::get('/about-us', [FrontController::class, 'about']);
Route::get('/work-with-us', [FrontController::class, 'workwithus']);
Route::get('/copilot', [FrontController::class, 'copilot']);
Route::get('/privacy-policy', [FrontController::class, 'privacypolicy']);
Route::get('/terms-and-conditions', [FrontController::class, 'terms']);
Route::get('/cookie-policy', [FrontController::class, 'cookies']);
Route::get('/form-submitted', [FrontController::class, 'thank'])->name('/form-submitted');
Route::get('/our-apps', [HomeController::class, 'vertical']);
Route::get('/dynamics-365-business-central-pricing-plan', [FrontController::class, 'onlinePricing']);
Route::get('/basic-plan', [FrontController::class, 'onlinecontactone']);
Route::get('/essential-plan', [FrontController::class, 'onlinecontacttwo']);
Route::get('/career-apply/{slug}', [FrontController::class, 'careerForm'])->name('career-apply');
Route::get('/premium-plan', [FrontController::class, 'onlinecontactthree']);
Route::get('/blogs', [FrontController::class, 'blog']);
Route::get('/blog/{slug}', [HomeController::class, 'blogsDetail'])->name('blogs_detail');
Route::post('/contact-form', [HomeController::class, 'contactForm']);
Route::post('submit-form-popup', [HomeController::class, 'contactFormPopup'])->name('submit-form-popup');
Route::post('submit-pricing', [HomeController::class, 'contactFormpricing'])->name('submit-pricing');
Route::group(['prefix' => 'webdsss/admin'], function () {
    Voyager::routes();
});
Route::get('/{slug}/{child?}', [HomeController::class, 'page'])->name('page_detail')->where('slug', '.+');
