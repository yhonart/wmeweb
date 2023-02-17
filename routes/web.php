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


Auth::routes();

if (file_exists(app_path('Http/Controllers/LocalizationController.php')))
{
    Route::get('lang/{locale}', [App\Http\Controllers\LocalizationController::class , 'lang']);
    Route::get('/lang/{locale}', [App\Http\Controllers\LocalizationController::class , 'lang']);
}
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home/projectCategory', [App\Http\Controllers\HomeController::class, 'projectcategory']);
Route::get('/project', [App\Http\Controllers\ProjectController::class, 'listproject'])->name('project');
Route::get('/project/detail/{id}', [App\Http\Controllers\ProjectController::class, 'detailProject']);
Route::get('/aboutme', [App\Http\Controllers\PageController::class, 'aboutme'])->name('aboutme');
Route::get('/quality', [App\Http\Controllers\PageController::class, 'quality'])->name('quality');
Route::get('/services', [App\Http\Controllers\PageController::class, 'services'])->name('services');
Route::get('/services/{locale}/{id}', [App\Http\Controllers\PageController::class, 'servicesPage']);
Route::get('/qms', [App\Http\Controllers\PageController::class, 'detailQMS'])->name('qms');
Route::get('/qualityPolice', [App\Http\Controllers\PageController::class, 'detailQuality'])->name('qualityPolice');


// Carier
Route::get('/carier', [App\Http\Controllers\CarierController::class, 'indexcarier'])->name('carier');


// Route DIR
include __DIR__.'/Admin/admin.php';

