<?php

declare(strict_types=1);

use App\Http\Controllers\AuthController;
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
    Route::get('/', fn () => view('components.pages.home'))->name('home');
    Route::get('/community', fn () => view('components.pages.community'))->name('community');
    Route::get('/post', fn () => view('components.pages.post'))->name('post');
});
