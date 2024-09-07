<?php

use App\Models\DressImage;
use Illuminate\Support\Facades\Auth;
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

Route::put('/profile/{user_id}', [App\Http\Controllers\Front\ProfileController::class, 'update'])->name('front.profile.update');
Route::get('/profile', [App\Http\Controllers\Front\ProfileController::class, 'show'])->name('front.profile.show');

Route::post('/reservation', [App\Http\Controllers\Front\ReservationController::class, 'store'])->name('front.reservation.store');
Route::get('/reservation', [App\Http\Controllers\Front\ReservationController::class, 'index'])->name('front.reservation.index');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
