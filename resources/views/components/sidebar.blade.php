<?php

declare(strict_types=1);

?>

@php
    use App\Filament\Guess\Pages\Community;
    use App\Filament\Guess\Pages\Home;
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
            <div class="relative isolate flex cursor-pointer items-center justify-between p-4">
                <div class="flex items-center gap-3">
                    {{ Icon::make('home')->icon(LucideIcon::Home)->color('inherit') }}
                    <a href="{{ route(Home::getRouteName()) }}">
                        <span class="absolute inset-0"></span>
                        Home
                    </a>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <p>Minhas comunidades</p>
                <div class="relative isolate flex cursor-pointer items-center justify-between p-4">
                    <div class="flex items-center gap-3">
                        {{ Icon::make('heroicon-o-wrench')->color('inherit') }}
                        <a href="{{ route(Community::getRouteName()) }}" class="relative">
                            <span class="absolute inset-0"></span>
                            Auto peça jacaré
                        </a>
                    </div>
                    <div
                        class="font-secondary bg-indigo-primary/15 border-indigo-primary/30 h-fit rounded-full px-4 py-0.5"
                    >
                        +999
                    </div>
                </div>
                <div class="flex cursor-pointer items-center justify-between p-4">
                    <div class="relative isolate flex items-center gap-3">
                        {{ Icon::make('heroicon-o-scissors')->color('inherit') }}
                        <a href="{{ route(Community::getRouteName()) }}">
                            <span class="absolute inset-0"></span>
                            Costureiras graça e paz
                        </a>
                    </div>
                    <div
                        class="font-secondary bg-indigo-primary/15 border-indigo-primary/30 h-fit rounded-full px-4 py-0.5"
                    >
                        +999
                    </div>
                </div>
            </div>
        </section>
    </section>
</aside>

<?php
