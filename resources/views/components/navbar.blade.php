<?php

declare(strict_types=1);

?>

<header class="bg-elevation-01dp border-outline-dark sticky top-0 flex border-b px-8 py-4">
    <button x-clock x-show="!$store.sidebar.isOpen" @click="$store.sidebar.open()">
        <x-lucide-menu class="text-text-medium h-6 w-6" />
    </button>
    <nav class="ms-auto">
        @if (Auth()->user())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-brand-primary rounded-md p-2">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="bg-brand-primary rounded-md p-2">Login</a>
        @endif
    </nav>
</header>

<?php
