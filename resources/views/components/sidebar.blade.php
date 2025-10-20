<?php

declare(strict_types=1);

?>

<aside
    x-cloak
    x-show="$store.sidebar.isOpen"
    class="bg-elevation-01dp border-helper-outline text-icon-medium min-w-[352px] border-r p-8"
>
    <section class="flex flex-col gap-8">
        <div class="flex items-center justify-between text-white">
            <img src="{{ asset('sidebar-logo.png') }}" class="w-28" alt="sidebar logo" />
            <button @click="$store.sidebar.close()" class="hover:bg-elevation-02dp rounded-md p-1">
                <x-lucide-panels-top-left class="size-6" />
            </button>
        </div>
        <section class="flex flex-col gap-11">
            {{-- sidebar content --}}
            <div class="flex flex-col gap-4">
                <x-sidebar-item
                    label="Home"
                    :href="route('home')"
                    icon="lucide-home"
                    :active="request()->is(route('home'))"
                />
            </div>
            {{-- sidebar content with title --}}
            <div class="flex flex-col gap-4">
                @if (! $hasCommunities)
                    <p class="pl-2 font-semibold">Participe de uma comunidade</p>
                @else
                    <p>Minhas comunidades</p>
                @endif
                @forelse ($communities as $c)
                    <x-sidebar-item
                        :label="$c->title"
                        :href="route('community', $c->id)"
                        :active="str_contains(request()->url(), $c->id)"
                        :icon="$c->icon_img"
                        :helper="$c->users->count()"
                    />
                @empty
                    
                @endforelse
            </div>
        </section>
    </section>
</aside>

<?php
