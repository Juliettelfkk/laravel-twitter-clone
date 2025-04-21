<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\IdeaLikeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';


// Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/feed', FeedController::class)->middleware('auth')->name('feed');


// Idea Routes
Route::resource('ideas', IdeaController::class)->except(['index', 'create', 'show'])->middleware('auth');
Route::resource('ideas', IdeaController::class)->only(['show']);

// Comment Routes (Properly Defined)
Route::resource('ideas.comments', CommentController::class)
	->only(['store'])
	->middleware('auth');

// Standalone Delete Route (Optional, if you prefer not using resource routing)
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

// Comment Store Route (Alternative to resource routing)



Route::resource('users' , UserController::class)->only('show');

Route::resource('users' , UserController::class)->only([ 'edit' , 'update'])->middleware('auth');

Route::get('/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');

Route::post('users/{user}/follow', [FollowerController::class, 'follow'])->name('users.follow')->middleware('auth');
Route::post('users/{user}/unfollow', [FollowerController::class, 'unfollow'])->name('users.unfollow')->middleware('auth');

Route::post('ideas/{idea}/like', [IdeaLikeController::class, 'like'])->name('ideas.like')->middleware('auth');
Route::post('ideas/{idea}/unlike', [IdeaLikeController::class, 'unlike'])->name('ideas.unlike')->middleware('auth');

Route::get('/terms' , function () {
    return view('terms');
})->name('terms');

