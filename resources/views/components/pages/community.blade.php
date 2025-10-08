<?php

declare(strict_types=1);

?>

<x-layouts.guest>
    <section class="mx-auto flex flex-col gap-11 px-8 py-6">
        <section class="flex items-center justify-between gap-8">
            <div class="flex gap-4">
                <img
                    src="https://cdn-icons-png.flaticon.com/32/10851/10851235.png"
                    alt="community logo"
                    class="size-16"
                />
                <div class="flex flex-col gap-3">
                    <h1 class="font-secondary text-md">/r/ Dev</h1>
                    <p class="text-c-medium leading-xs text-xs">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porttitor pretium..
                    </p>
                    <div class="flex gap-8">
                        <div class="flex items-center gap-3">
                            <x-lucide-users class="size-5 text-white" />
                            <p class="leading-xs text-xs">1bi de membros</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-lucide-users class="size-5 text-white" />
                            <p class="leading-xs text-xs">Criado em Jan, 2025</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex gap-8">
                <button class="font-secondary border-outline-dark cursor-pointer rounded-lg border px-4 py-3">
                    Entrar
                </button>
                <button class="font-secondary bg-indigo-primary cursor-pointer rounded-lg px-4 py-3">Criar post</button>
            </div>
        </section>
        <x-feed
            :title="count($posts) > 0
                ? 'Veja os últimos posts da comunidade'
            : 'Esta comunidade ainda não possui Posts ;-;'"
            :posts="$posts"
        />
    </section>
</x-layouts.guest>

<?php
