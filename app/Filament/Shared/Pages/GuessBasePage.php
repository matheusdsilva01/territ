<?php

declare(strict_types=1);

namespace App\Filament\Shared\Pages;

use Filament\Pages\Page;

abstract class GuessBasePage extends Page
{
    public bool $sidebar = false;

    protected static string $layout = 'components.layouts.app';
}
