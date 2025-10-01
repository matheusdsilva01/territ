<?php

declare(strict_types=1);

?>

@php
    use App\Filament\Guest\Pages\Community;
    use App\Filament\Guest\Pages\Home;
    use CodeWithDennis\FilamentLucideIcons\Enums\LucideIcon;
    use Filament\Schemas\Components\Icon;
@endphp

<aside class="bg-elevation-01dp border-helper-outline text-icon-medium min-w-[352px] border-r p-8">
    <section class="flex flex-col gap-8">
        <div class="flex items-center justify-between text-white">
            <img src="{{ asset('sidebar-logo.png') }}" class="w-28" alt="sidebar logo" />
            {{ Icon::make('panel')->icon(LucideIcon::PanelsTopLeft)->color('inherit') }}
        </div>
        <section class="flex flex-col gap-11">
            {{-- sidebar content --}}
            <div class="flex flex-col gap-4">
                <x-sidebar-item
                    label="Home"
                    :href="route(Home::getRouteName())"
                    :icon="Icon::make('home')->icon(LucideIcon::Home)->color('inherit')"
                />
            </div>
            {{-- sidebar content with title --}}
            <div class="flex flex-col gap-4">
                <p>Minhas comunidades</p>
                <x-sidebar-item
                    label="Auto peça jacaré"
                    :href="route(Community::getRouteName())"
                    :icon="Icon::make('heroicon-o-wrench')->color('inherit')"
                    helper="+999"
                />
                <x-sidebar-item
                    label="Costureiras graça e paz"
                    :href="route(Community::getRouteName())"
                    :icon="Icon::make('heroicon-o-scissors')->color('inherit')"
                    helper="+999"
                />
            </div>
        </section>
    </section>
</aside>

<?php
