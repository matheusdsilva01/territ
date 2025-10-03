<?php

declare(strict_types=1);

namespace App\Livewire\pages;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

final class Login extends Component
{
    public string $email = '';

    public string $password = '';

    public bool $remember = false;

    public function mount(): void
    {
        if (Auth::check()) {
            redirect()->intended(route('home'));

            return;
        }

        $user = User::query()->where('email', '!=', 'admin@admin.com')->first();
        $this->email = $user->email;
        $this->password = 'password';
        $this->remember = true;
    }

    public function authenticate()
    {
        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ], $this->remember)) {
            session()->regenerate();

            return redirect()->intended(route('home'));
        }

        throw ValidationException::withMessages([
            'email' => 'As credenciais fornecidas não são válidas.',
        ]);

    }

    public function render(): View
    {
        return view('components.pages.login');
    }
}
