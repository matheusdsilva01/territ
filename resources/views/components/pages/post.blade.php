<?php

declare(strict_types=1);

?>

@props([
    'replies' => [['isReply' => false, 'replies' => [['isReply' => true, 'replies' => null]]], ['isReply' => false, 'replies' => null], ['isReply' => false, 'replies' => null], ['isReply' => false, 'replies' => null]],
])

<x-layouts.guest>
    <section class="mx-auto flex flex-col gap-11 px-8 py-6">
        <section class="flex flex-col gap-8">
            <div class="flex gap-3">
                <img
                    src="https://cdn-icons-png.flaticon.com/32/10851/10851235.png"
                    alt="logo community"
                    class="size-10 rounded-full"
                />
                <div class="text-2xs flex flex-col gap-1">
                    <div class="flex items-center gap-4">
                        <p class="font-bold">@nextur.design</p>
                        <span class="bg-c-medium size-1 rounded-full"></span>
                        <p class="text-c-medium">now</p>
                    </div>
                    <h4 class="text-brand-primary font-bold">/Flamengo</h4>
                </div>
            </div>
            <h1 class="text-md leading-xs font-bold">How I learn any type of new technology (As a Senior Developer)</h1>
            <p class="leading-xs text-c-medium">
                Recently, I had a task of learning a new tool that I had never used or seen anything related to, and I
                thought: why not write about how I learned it? This is the kind of article that teaches you to learn
                things from a different perspective. Not the best way, but you can reuse some of the concepts written
                here.
            </p>
        </section>
        <section class="bg-elevation-01dp border-outline-dark flex flex-col gap-4 rounded-xl border p-4">
            <textarea
                class="focus:ring-indigo-primary focus:ring-offset-elevation-01dp rounded-sm focus:ring-2 focus:ring-offset-4 focus:outline-none"
                rows="5"
                placeholder="Escreva um comentário..."
            ></textarea>
            <span class="bg-helper-outline h-[1px] w-full"></span>
            <button class="font-secondary bg-indigo-primary ms-auto cursor-pointer rounded-lg px-8 py-2">
                Responder
            </button>
        </section>
        <x-content-wrapper title="Todas as respostas">
            @foreach ($replies as $reply)
                <x-post-comment :replies="$reply['replies']" :is-reply="false" />
            @endforeach
        </x-content-wrapper>
    </section>
</x-layouts.guest>
