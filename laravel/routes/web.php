<?php

use App\Http\Controllers\BukuController ;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});
Route::resource('buku', BukuController::class);

// Route::get('/buku', function () {
//     return view('buku/index');
// });
// Route::get('/buku/tambah-buku', function () {
//     return view('buku/create');
// });
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
