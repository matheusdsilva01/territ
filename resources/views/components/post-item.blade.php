<?php

declare(strict_types=1);

?>

<div class="bg-elevation-02dp border-outline-dark flex flex-col gap-4 rounded-xl border px-8 py-4">
    <div class="relative isolate flex flex-col gap-4">
        <div class="flex items-center gap-2">
            <img src="https://cdn-icons-png.flaticon.com/32/10851/10851235.png" alt="logo community" class="size-8" />
            <p class="leading-xs">/r/{{ $post->community->title }}</p>
        </div>
        <div class="flex flex-col gap-2">
            <a
                href="{{ route('post', ['id' => $post->community_id, 'postId' => $post->id]) }}"
                class="font-secondary text-sm"
            >
                <span class="absolute inset-0"></span>
                {{ $post->title }}
            </a>
            <p class="leading-xs text-c-medium font-medium">
                {{ $post->content }}
            </p>
        </div>
    </div>
    <div class="flex gap-5">
        <button class="text-2xs flex cursor-pointer items-center gap-2 p-2">
            <x-lucide-message-circle class="size-4 text-white" />
            {{ $post->comments->count() }}
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
