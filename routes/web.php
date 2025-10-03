<?php

declare(strict_types=1);

use App\Livewire\pages\Login;
use App\View\Components\Pages\Community;
use App\View\Components\Pages\Home;
use App\View\Components\Pages\Post;
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
    Route::post('/logout', function () {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->intended(route('home'));
    })->name('logout');
    Route::get('/', Home::class)->name('home');
    Route::get('/community', Community::class)->name('community');
    Route::get('/post', Post::class)->name('post');
});
