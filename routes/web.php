<?php

declare(strict_types=1);

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Livewire\Pages\Login;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Middleware\ShareErrorsFromSession;

Route::group(['middleware' => [
    EncryptCookies::class,
    AddQueuedCookiesToResponse::class,
    StartSession::class,
    AuthenticateSession::class,
    ShareErrorsFromSession::class,
    VerifyCsrfToken::class,
    SubstituteBindings::class,
]], function (): void {
    Route::get('/login', Login::class)->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/community/{community}', [CommunityController::class, 'getCommunity'])->name('community');
    Route::get('/community/{community}/post/{post}', [CommunityController::class, 'getPost'])->name('post');
    Route::middleware(['auth'])->group(function (): void {
        Route::post('/community/{community}/join', [CommunityController::class, 'join'])->name('community.join');
        Route::post('/community/{community}/leave', [CommunityController::class, 'leave'])->name('community.leave');
        Route::post('/post/{post}/comment/create', [PostController::class, 'createComment'])->name('post.comment.create');
        Route::post('/comment/{comment}/like', [CommentController::class, 'likeComment'])->name('post.comment.like');
    });
});
