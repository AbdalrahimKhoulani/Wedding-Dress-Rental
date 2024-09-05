<?php

use App\Models\DressImage;
use Illuminate\Support\Facades\Route;

Route::get('/new', function (Request $request) {
    $dress = DressImage::create([
        'dress_id' => 1
    ]);
    dd($dress);
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/dress')->group(function () {
    Route::get('/', [App\Http\Controllers\Front\DressController::class, 'index'])->name('front.dress.index');
    Route::get('/{id}', [App\Http\Controllers\Front\DressController::class, 'show'])->name('front.dress.show');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
