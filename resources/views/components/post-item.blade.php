<?php

declare(strict_types=1);

?>
@props([
    'community' => 'dev',
    'title' => 'How I learn any type of new technology (As a Senior Developer)',
    'content' => 'Recently, I had a task of learning a new tool that I had never used or seen anything related to,
        and I thought: why not write about how I learned it? This is the kind of article that teaches you to learn
        things from a different perspective. Not the best way, but you can reuse some of the concepts written here.',
    'comments' => 1,
])
<div class="bg-elevation-02dp border-outline-dark flex flex-col gap-4 rounded-xl border px-8 py-4">
    <div class="relative isolate flex flex-col gap-4">
        <div class="flex items-center gap-2">
            <img src="https://cdn-icons-png.flaticon.com/32/10851/10851235.png" alt="logo community" class="size-8" />
            <p class="leading-xs">/r/{{ $community }}</p>
        </div>
        <div class="flex flex-col gap-2">
            <a href="/post" class="font-secondary text-sm">
                <span class="absolute inset-0"></span>
                {{ $title }}
            </a>
            <p class="leading-xs text-c-medium font-medium">
                {{ $content }}
            </p>
        </div>
    </div>
    <div class="flex gap-5">
        <button class="text-2xs flex cursor-pointer items-center gap-2 p-2">
            <x-lucide-message-circle class="size-4 text-white" />
            {{ $comments }}
        </button>
        <button class="text-2xs flex cursor-pointer items-center gap-2 p-2">
            <x-lucide-thumbs-up class="size-4 text-white" />
        </button>
        <button class="text-2xs flex cursor-pointer items-center gap-2 p-2">
            <x-lucide-thumbs-down class="size-4 text-white" />
        </button>
        <button class="text-2xs flex cursor-pointer items-center gap-2 p-2 font-semibold">Responder</button>
    </div>
</div>
<?php 
