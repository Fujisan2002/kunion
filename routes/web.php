<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;



Route::middleware('auth')->group(function () {
    Route::get('/kunion/create', [PostController::class, 'create']);
    Route::post('/kunion/store', [PostController::class, 'store']);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/posts/{post}', [PostController::class ,'show']);
    // '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する
    Route::get('/recruitment/create', [PostController::class, 'create']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('creats', CreateController::class);
});

Route::get('/index', [PostController::class, 'index'])->name('index');

require __DIR__.'/auth.php';