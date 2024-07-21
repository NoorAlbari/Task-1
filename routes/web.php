<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(App\Http\Controllers\productController::class)->group(function(){
    Route::get('/all-product','index');
    Route::get('/add-product','create');
    Route::post('/add-product','store');

    Route::get('/edit-product/{product_id}','edit');
    Route::put('/update-product/{product_id}','update');
    Route::delete('/delete-product/{product_id}','destroy');
    
});
