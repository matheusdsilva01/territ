<?php

declare(strict_types=1);

namespace App\Filament\Guess\Pages;

use App\Filament\Shared\Pages\GuessBasePage;

final class Home extends GuessBasePage
{
    protected static ?int $navigationSort = -2;

    protected string $view = 'welcome';
}
