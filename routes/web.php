<?php

declare(strict_types=1);

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\HomeController;
use App\Livewire\pages\Login;
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
    Route::get('/community/{id}', [CommunityController::class, 'getCommunity'])->name('community');
    Route::get('/community/{id}/post/{postId}', [CommunityController::class, 'getPost'])->name('post');
    Route::post('/community/{id}/join', [CommunityController::class, 'join'])->middleware('auth')->name('community.join');
    Route::post('/community/{id}/leave', [CommunityController::class, 'leave'])->middleware('auth')->name('community.leave');
});
