<?php

declare(strict_types=1);

?>

<section>
    <x-guest-container-layout>
        {{ $slot }}
    </x-guest-container-layout>
    <div
        class="from-indigo-primary to-app-gradient-end pointer-events-none fixed top-0 left-0 h-full w-full bg-gradient-to-br opacity-[4%]"
    ></div>
</section>
