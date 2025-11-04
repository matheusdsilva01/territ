<?php

declare(strict_types=1);

?>

<x-layouts.guest>
    <section class="mx-auto flex flex-col gap-11 px-8 py-6">
        <section class="flex flex-col gap-8">
            <div class="flex gap-3">
                <img src="{{ $community->icon_img }}" alt="logo community" class="size-10 rounded-full" />
                <div class="text-2xs flex flex-col gap-1">
                    <div class="flex items-center gap-4">
                        <p class="font-bold">{{ '@' . $post->user->username }}</p>
                        <span class="bg-c-medium size-1 rounded-full"></span>
                        <p class="text-c-medium">
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                    </div>
                    <h4 class="text-brand-primary font-bold">/{{ $community->title }}</h4>
                </div>
            </div>
            <h1 class="text-md leading-xs font-bold">{{ $post->title }}</h1>
            <p class="leading-xs text-c-medium">{{ $post->content }}</p>
        </section>
        <form
            action="{{ route('post.comment.create', ['post' => $post->id]) }}"
            method="POST"
            class="bg-elevation-01dp border-outline-dark flex flex-col gap-4 rounded-xl border p-4"
        >
            @csrf
            <textarea
                class="focus:ring-indigo-primary focus:ring-offset-elevation-01dp rounded-sm focus:ring-2 focus:ring-offset-4 focus:outline-none"
                rows="5"
                name="content"
                required
                placeholder="Escreva um comentário..."
            ></textarea>
            <span class="bg-helper-outline h-[1px] w-full"></span>
            <button type="submit" class="font-secondary bg-indigo-primary ms-auto cursor-pointer rounded-lg px-8 py-2">
                Responder
            </button>
        </form>
        <x-content-wrapper :title="sizeof($comments->toArray()) > 0 ? 'Todas as respostas' : 'Sem comentários'">
            @foreach ($comments as $comment)
                <x-post-comment :comment="$comment" />
            @endforeach
        </x-content-wrapper>
    </section>
</x-layouts.guest>
