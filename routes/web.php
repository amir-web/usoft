<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\IconController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\UsoftController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BidController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\WebDevelopmentController;
use App\Http\Controllers\Admin\BenefitController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PortfolioCategoryController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['set.locale'])->group(function (){
    Route::get('/', [UsoftController::class, 'main'])->name('main');
    Route::get('/service', [UsoftController::class, 'service'])->name('service');
    Route::get('service-show/{id}', [UsoftController::class, 'service_show'])->name('service_show');
    Route::get('/about', [UsoftController::class, 'about'])->name('about');
    Route::get('/portfolio', [UsoftController::class, 'portfolio'])->name('portfolio');
    Route::get('/contact', [UsoftController::class, 'contact'])->name('contact');
    Route::post('/bid', [UsoftController::class, 'bid'])->name('bid');
    Route::post('/bid-modal', [UsoftController::class, 'bid_modal'])->name('bid_modal');
    Route::match(['get','post'], '/login', [UserController::class, 'login'])->name('login');
    Route::get('portfolio/{id}', [UsoftController::class, 'portfolio_show'])->name('show_portfolio');
    Route::get('website', [UsoftController::class, 'website'])->name('website');
    Route::get('automation', [UsoftController::class, 'automation'])->name('automation');
    Route::get('mobile-app', [UsoftController::class, 'mobile_app'])->name('mobile_app');
});


Route::get('locale/{locale}', [UsoftController::class, 'locale'])->name('locale');

Route::prefix('admin')->middleware('admin')->group(function (){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('contact',ContactController::class);
    /*Route::resource('client', ClientController::class);
    Route::resource('banner', BannerController::class);*/
    Route::resource('bid', BidController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::post('/portfolio-main-item', [PortfolioController::class, 'main_item'])->name('portfolio.main_item');
    Route::resource('profile', ProfileController::class);
    Route::resource('web-development', WebDevelopmentController::class);
    Route::post('/website-main-item', [WebDevelopmentController::class, 'main_item'])->name('web.main_item');
    Route::resource('benefit', BenefitController::class);
    Route::post('/benefit-main-item', [BenefitController::class, 'main_item'])->name('benefit.main_item');
    Route::resource('service', ServiceController::class);
    Route::post('/service-main-item', [ServiceController::class, 'main_item'])->name('service.main_item');
    Route::get('logout', [ProfileController::class, 'logout'])->name('logout');
    Route::get('filter-bid', [BidController::class, 'filter_bid'])->name
    ('bid_filter');
    Route::resource('portfolio-category', PortfolioCategoryController::class);
    Route::resource('about', AboutController::class);
    Route::resource('page', PageController::class);
    Route::resource('icon', IconController::class);

    Route::get('/portfolio-web', [PortfolioController::class, 'web'])->name('portfolio.web');
    Route::get('/portfolio-mobile', [PortfolioController::class, 'mobile'])->name('portfolio.mobile');
    Route::get('/portfolio-business', [PortfolioController::class, 'business'])->name('portfolio.business');

    Route::get('websort', [PortfolioController::class, 'web_sort'])->name('web_sort');
    Route::get('businesssort', [PortfolioController::class, 'business_sort'])->name('business_sort');
    Route::get('mobilesort', [PortfolioController::class, 'mobile_sort'])->name('mobile_sort');
});
