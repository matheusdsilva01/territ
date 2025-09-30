<?php

declare(strict_types=1);

namespace App\Livewire;

use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Support\Enums\Size;
use Illuminate\View\View;
use Livewire\Component;

final class Navbar extends Component implements HasActions, HasSchemas
{
    use InteractsWithActions;
    use InteractsWithSchemas;

    public function logoutAction(): Action
    {
        return Action::make('logout')
            ->action(fn () => auth()->logout())
            ->size(Size::ExtraSmall);
    }

    public function loginAction(): Action
    {
        return Action::make('login')
            ->outlined()
            ->size(Size::ExtraSmall)
            ->label('Logar')
            ->action(fn () => redirect('/login'));
    }

    public function render(): View
    {
        return view('components.navbar');
    }
}
