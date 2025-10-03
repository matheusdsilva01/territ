<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

final class Navbar extends Component
{
    public function render(): View
    {
        return view('components.navbar');
    }
}
