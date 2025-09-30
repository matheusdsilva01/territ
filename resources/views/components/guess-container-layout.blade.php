<?php

declare(strict_types=1);

?>

<div class="flex min-h-screen">
    <!-- Top Nav -->
    <x-sidebar />
    <main class="w-full">
        <livewire:navbar />
        <!-- Content -->
        {{ $slot }}
    </main>
</div>

<?php
