<?php

declare(strict_types=1);

?>

<x-layouts.main>
    <div class="flex min-h-screen">
        <!-- Top Nav -->
        <x-sidebar />
        <main class="w-full">
            <x-navbar />
            <!-- Content -->
            {{ $slot }}
        </main>
    </div>
    <div
        class="from-indigo-primary to-app-gradient-end pointer-events-none fixed top-0 left-0 h-full w-full bg-gradient-to-br opacity-[4%]"
    ></div>
</x-layouts.main>

<?php
