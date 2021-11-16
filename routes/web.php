<?php

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
    Route::resource('profile', ProfileController::class);
    Route::get('logout', [ProfileController::class, 'logout'])->name('logout');
});
