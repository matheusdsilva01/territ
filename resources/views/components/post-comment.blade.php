<?php

declare(strict_types=1);

?>

<div class="flex flex-row gap-3 rounded-xl [&+div[data-comment]]:ml-11">
    <div class="relative isolate shrink-0 basis-8">
        <img src="https://cdn-icons-png.flaticon.com/32/10851/10851235.png" alt="logo community" class="block" />
        @if ($hasReplies)
            <span
                class="bg-helper-outline absolute top-8 right-1/2 left-1/2 h-[calc(100%+(var(--spacing)*8/2))] w-[1px] -translate-x-1/2"
            ></span>
        @endif
    </div>
    <div class="flex flex-col gap-1">
        <div class="flex items-center gap-3">
            <p class="font-secondary">NexTurHe4rt</p>
            <p class="text-3xs text-c-medium font-semibold">Há 3 dias</p>
            @if ($isReply)
                <span
                    class="text-2xs rounded-xl border border-green-500/15 bg-green-500/10 px-3 py-1 font-semibold text-green-500"
                >
                    Resposta
                </span>
            @else
                <span
                    class="bg-brand-500/10 border-brand-500/15 text-2xs text-brand-500 rounded-xl border px-3 py-1 font-semibold"
                >
                    Autor
                </span>
            @endif
            <x-lucide-ellipsis class="text-text-high ms-auto size-6" />
        </div>
        <p class="leading-xs text-c-medium font-medium">
            Recently, I had a task of learning a new tool that I had never used or seen anything related to, and I
            thought: why not write about how I learned it? This is the kind of article that teaches you to learn things
            from a different perspective. Not the best way, but you can reuse some of the concepts written here.
        </p>
        <div class="flex gap-5">
            <button class="text-2xs flex cursor-pointer items-center gap-2 p-2">
                <x-lucide-message-circle class="size-4 text-white" />
                1
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
</div>
@if ($replies)
    <div class="ml-11 flex flex-col gap-4">
        @foreach ($replies as $reply)
            <x-post-comment :replies="$reply['replies']" :is-reply="true" />
        @endforeach
    </div>
@endif

<?php
