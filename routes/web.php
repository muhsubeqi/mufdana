<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.front.home');
});

Route::get('/tentang', function () {
    return view('pages.front.about');
})->name('about');

Route::get('/kontak', function () {
    return view('pages.front.contact');
})->name('contact');

Route::name('front.')->group(function () {

    Route::get('pertanyaan', function () {
        $faqs = \App\Models\Faq::all();
        return view('pages.front.faq', compact('faqs'));
    })->name('faq');

    Route::get('cabang-kami', function () {
        return view('pages.front.brand');
    })->name('brand');

    Route::get('cabang/{slug}', function ($slug) {
        $brand = \App\Models\Brand::where('slug', $slug)->first();
        return view('pages.front.brand-detail', compact('brand'));
    })->name('brand.detail');
});

Route::middleware('auth', 'verified')->group(function () {

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });


    Route::resource('pages', PagesController::class);

    Route::get('brand/import', [BrandsController::class, 'import'])->name('brand.import');
    Route::post('brand/import', [BrandsController::class, 'importData'])->name('brand.import.data');
    Route::get('brand/export', [BrandsController::class, 'exportData'])->name('brand.export.data');
    Route::resource('brand', BrandsController::class);

    Route::resource('faq', FaqController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
