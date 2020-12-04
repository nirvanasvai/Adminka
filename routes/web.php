<?php

use Illuminate\Support\Facades\Route;

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

//Front
Route::get('/',[App\Http\Controllers\Client\MainController::class,'show'])->name('main.front');
Route::get('/uslugi',[App\Http\Controllers\Client\ServiceController::class,'show'])->name('service.front');
Route::get('/portfolio',[App\Http\Controllers\Client\PortfolioController::class,'show'])->name('portfolio.front');
Route::get('portfolio/{slug}',[App\Http\Controllers\Client\PortfolioInnerController::class,'show'])->name('portfolioInner.front');
Route::get('/about',[App\Http\Controllers\Client\AboutController::class,'show'])->name('about.front');
Route::get('/news',[App\Http\Controllers\Client\BlogController::class,'show'])->name('blog.front');
Route::get('/news/{slug}',[App\Http\Controllers\Client\BlogInnerController::class,'show'])->name('blog.inner.front');
Route::get('/kontakty',[App\Http\Controllers\Client\ContactController::class,'show'])->name('contact.inner');



//Back Controller
Route::prefix('admin')->middleware(['auth'])->group(function (){
    Route::resource('/main',\App\Http\Controllers\Admin\MainController::class);
    Route::resource('/about',\App\Http\Controllers\Admin\AboutController::class);
    Route::resource('/portfolio',\App\Http\Controllers\Admin\PortfolioController::class);
    Route::resource('/service',\App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('/blog',\App\Http\Controllers\Admin\BlogController::class);
    Route::resource('/team',\App\Http\Controllers\Admin\TeamController::class);
    Route::resource('logo',\App\Http\Controllers\Admin\LogoController::class);
    Route::resource('/gallery',\App\Http\Controllers\Admin\GalleryController::class);
    Route::resource('/doing',\App\Http\Controllers\Admin\DoingController::class);
    Route::resource('/review',\App\Http\Controllers\Admin\ReviewController::class);
    Route::resource('/banner',\App\Http\Controllers\Admin\BannerController::class);
    Route::resource('/work',\App\Http\Controllers\Admin\WorkController::class);
    Route::resource('/contact',\App\Http\Controllers\Admin\ContactController::class);


});



Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
