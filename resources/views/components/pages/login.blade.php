<?php

declare(strict_types=1);

?>

<main class="flex h-dvh">
    <form
        wire:submit="authenticate"
        class="bg-elevation-02dp m-auto flex w-full max-w-96 flex-col gap-6 rounded-2xl p-8"
    >
        <div class="flex flex-col gap-2">
            <label for="email">Email</label>
            <input type="email" id="email" class="bg-elevation-01dp rounded-md p-2" wire:model="email" required />
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                class="bg-elevation-01dp rounded-md p-2"
                wire:model="password"
                required
            />
        </div>
        <div>
            <input type="checkbox" id="remember" wire:model="remember" />
            <label for="remember">Lembrar-me</label>
        </div>
        <button type="submit" class="bg-indigo-primary flex w-full items-center justify-center rounded-md py-2">
            <x-lucide-loader class="mr-2 size-4 animate-spin" wire:loading />
            Login
        </button>
    </form>
</main>

<?php
