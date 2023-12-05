<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;
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

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/destination', [PageController::class, 'destination'])->name('destination');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [PageController::class, 'dashboard'])->name('index');

    Route::prefix('destination')->name('destination.')->group(function () {
        Route::get('/', [DestinationController::class, 'index'])->name('index');
        Route::get('/create', [DestinationController::class, 'create'])->name('create');
        Route::post('/store', [DestinationController::class, 'store'])->name('store');
        Route::get('/edit/{slug}', [DestinationController::class, 'edit'])->name('edit');
        Route::put('/update/{slug}', [DestinationController::class, 'update'])->name('update');
        Route::delete('/delete/{slug}', [DestinationController::class, 'destroy'])->name('delete');
    });

    Route::resource('gallery', GalleryController::class);
});
