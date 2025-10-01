<?php

declare(strict_types=1);

namespace App\Filament\Guest\Pages;

use App\Filament\Shared\Pages\GuestBasePage;

final class Home extends GuestBasePage
{
    protected static ?int $navigationSort = -2;

    protected string $view = 'filament.guest.pages.home';
}
