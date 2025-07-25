<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;


Route::get('/login', action: [\App\Http\Controllers\Auth\AuthenticatedSessionController::class,"create"])->name('login');
Route::get("/search", [SearchController::class,"search"]);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/about', [PostController::class, 'about']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
    Route::get('/posts/{user_id}/edit', [PostController::class,'edit'])->name('posts.edit');
    Route::get('/posts/{user_id}/delete', [PostController::class,'destroy'])->name('posts.delete');
    Route::get('/posts/{user_id}/comments', [PostController::class, 'showComments'])->name('posts.comments');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/posts/{user_id}/comments', [CommentController::class, 'index'])->name('comments.index');
   

});
require __DIR__.'/auth.php';
