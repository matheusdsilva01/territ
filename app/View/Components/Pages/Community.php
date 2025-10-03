<?php

declare(strict_types=1);

namespace App\View\Components\Pages;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class Community extends Component
{
    public function render(): View
    {
        return view('components.pages.community');
    }
}
