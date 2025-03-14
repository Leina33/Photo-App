<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UsersController;


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



    //Route::get('/album', [AlbumController::class, 'index'])->name('album');

    Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
    Route::get('/photo', [PhotoController::class, 'index'])->name('photo');
    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/user/{id}', [UsersController::class, 'show'])->name('user');
    Route::get('/album-photo/{id}', [UsersController::class, 'showAlbumPhoto'])->name('album-photo');



});

require __DIR__.'/auth.php';
