<?php

declare(strict_types=1);

?>
@props([
    'title' => 'Veja',
])

<section class="bg-elevation-01dp border-outline-dark flex flex-col gap-8 rounded-3xl border p-8">
    <h2 class="text-md font-secondary">{{ $title }}</h2>
    <section class="flex flex-col gap-8">
        {{ $slot }}
    </section>
</section>
<?php 
