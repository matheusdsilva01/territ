<?php

declare(strict_types=1);

?>

<aside class="bg-elevation-01dp border-helper-outline text-icon-medium min-w-[352px] border-r p-8">
    <section class="flex flex-col gap-8">
        <div class="flex items-center justify-between text-white">
            <img src="{{ asset('sidebar-logo.png') }}" class="w-28" alt="sidebar logo" />
            <x-lucide-panels-top-left class="size-6" />
        </div>
        <section class="flex flex-col gap-11">
            {{-- sidebar content --}}
            <div class="flex flex-col gap-4">
                <x-sidebar-item label="Home" :href="route('home')" icon="lucide-home" />
            </div>
            {{-- sidebar content with title --}}
            <div class="flex flex-col gap-4">
                <p>Minhas comunidades</p>
                <x-sidebar-item
                    label="Auto peça jacaré"
                    :href="route('community')"
                    icon="heroicon-o-wrench"
                    helper="+999"
                />
                <x-sidebar-item
                    label="Costureiras graça e paz"
                    :href="route('community')"
                    icon="heroicon-o-scissors"
                    helper="+999"
                />
            </div>
        </section>
    </section>
</aside>

<?php
