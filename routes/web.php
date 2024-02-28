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
Route::get('/implementation', [FrontController::class, 'NewImplServices']);
Route::get('/upgrade', [FrontController::class, 'NewUpgrServices']);
Route::get('/remote-resources', [FrontController::class, 'NewRemServices']);
Route::get('/customization', [FrontController::class, 'NewCustServices']);
Route::get('/support', [FrontController::class, 'NewSupportService']);


// New Services Page End
// New Landing Pages
Route::get('/business-central', [FrontController::class, 'bcNewLanding']);
Route::get('/finance', [FrontController::class, 'financeNewLanding']);
Route::get('/supply-chain', [FrontController::class, 'SCNewLanding']);
Route::get('/human-resource', [FrontController::class, 'HRNewLanding']);
Route::get('/sales', [FrontController::class, 'SalesNewLanding']);
Route::get('/marketing', [FrontController::class, 'MarketingNewLanding']);
// New Landing Pages End
// Guided Tour
Route::get('/business-central-guided-tour', [FrontController::class, 'bcGuided']);
Route::get('/finance-and-operations-guided-tour', [FrontController::class, 'financeGuided']);
Route::get('/supply-chain-guided-tour', [FrontController::class, 'supplyGuided']);
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
Route::get('/dynamics-365', [FrontController::class, 'landing_dynamics_365']);
Route::get('/dynamics-365-partner', [FrontController::class, 'landing_partner']);
Route::get('/finance-and-operations', [FrontController::class, 'landing_fo']);
Route::get('/dynamics-365-usa', [FrontController::class, 'landing_bc_s']);
Route::get('/about', [FrontController::class, 'newabout']);
Route::get('/form-submitted', [FrontController::class, 'thank'])->name('/form-submitted');
Route::get('/our-apps', [HomeController::class, 'vertical']);
Route::get('/dynamics-365-business-central-pricing-plan', [FrontController::class, 'onlinePricing']);
Route::get('/basic-plan', [FrontController::class, 'onlinecontactone']);
Route::get('/essential-plan', [FrontController::class, 'onlinecontacttwo']);
Route::get('/career-apply/{slug}', [FrontController::class, 'careerForm'])->name('career-apply');
Route::get('/premium-plan', [FrontController::class, 'onlinecontactthree']);
Route::get('/dynamics-erp', [FrontController::class, 'dynamics365']);
Route::get('/blogs', [FrontController::class, 'blog']);
Route::get('thank-you-for-contactus', [HomeController::class, 'thankyouContactus'])->name('thank-you-for-contactus');
Route::get('/blog/{slug}', [HomeController::class, 'blogsDetail'])->name('blogs_detail');
Route::get('/career/{slug}', [HomeController::class, 'carer'])->name('career_detail');
Route::get('/careers', [HomeController::class, 'careermain'])->name('career_main');
Route::get('/careers/{slug}', [HomeController::class, 'featuredjobs'])->name('featured_jobs');
Route::post('/contact-form', [HomeController::class, 'contactForm']);
Route::post('submit-form', [HomeController::class, 'contactFormbclanding'])->name('submit-form');
Route::post('submit-form-popup', [HomeController::class, 'contactFormPopup'])->name('submit-form-popup');
Route::post('submit-form-partner', [HomeController::class, 'contactFormlandingpartner'])->name('submit-form-partner');
Route::post('business-central-usa-landing-contact-form', [HomeController::class, 'contactFormbcUSAlanding'])->name('business-central-usa-landing-contact-form');
Route::post('finance-operations-landing-contact-form', [HomeController::class, 'contactformforfolanding'])->name('finance-operations-landing-contact-form');
Route::post('/newsletter-form', [HomeController::class, 'newsletterForm']);
Route::post('career-form', [HomeController::class, 'careerFormData'])->name('career-form');
Route::post('submit-pricing', [HomeController::class, 'contactFormpricing'])->name('submit-pricing');
Route::group(['prefix' => 'webdsss/admin'], function () {
    Voyager::routes();
});
Route::get('/{slug}/{child?}', [HomeController::class, 'page'])->name('page_detail')->where('slug', '.+');
