<?php

declare(strict_types=1);

use App\Filament\Shared\Pages\LoginPage;
use App\View\Components\Pages\Community;
use App\View\Components\Pages\Home;
use App\View\Components\Pages\Post;
use Illuminate\Support\Facades\Route;

Route::get('/login', LoginPage::class);
Route::get('/', Home::class)->name('home');
Route::get('/community', Community::class)->name('community');
Route::get('/post', Post::class)->name('post');
