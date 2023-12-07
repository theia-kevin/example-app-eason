<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::group([
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
	Route::get('/', [\App\Http\Controllers\PageDisplayController::class, 'home'])->name('frontend.home');
	Route::get('{slug}', [\App\Http\Controllers\PageDisplayController::class, 'show'])->name('frontend.page');
	Route::get('/projects/{slug}', [\App\Http\Controllers\PageDisplayController::class, 'project'])->name('frontend.project');
});
