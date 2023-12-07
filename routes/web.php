<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Auth;
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
Route::post('/login', [AuthController::class, 'login'])->name('process.login');
Route::get('/logout', function () {
    Auth::logout();

    return redirect()->route('home');
})->name('logout');

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/destination', [PageController::class, 'destination'])->name('destination');
Route::get('/destination/{slug}', [PageController::class, 'showDestination'])->name('show.destination');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/gallery/{slug}', [PageController::class, 'showGallery'])->name('show.gallery');

Route::middleware('auth')->group(function () {
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

        Route::prefix('gallery')->name('gallery.')->group(function () {
            Route::get('/', [GalleryController::class, 'index'])->name('index');
            Route::get('/create', [GalleryController::class, 'create'])->name('create');
            Route::post('/store', [GalleryController::class, 'store'])->name('store');
            Route::get('/edit/{slug}', [GalleryController::class, 'edit'])->name('edit');
            Route::put('/update/{slug}', [GalleryController::class, 'update'])->name('update');
            Route::delete('/delete/{slug}', [GalleryController::class, 'destroy'])->name('delete');
        });

        Route::prefix('setting')->name('setting.')->group(function () {
            Route::get('/', [SettingController::class, 'index'])->name('index');
            Route::post('/update', [SettingController::class, 'update'])->name('update');
        });
    });
});

