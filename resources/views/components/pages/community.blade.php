<?php

declare(strict_types=1);

?>

@php
    use App\Models\Community;

    function getMembersCount(Community $community): string
    {
        $membersCount = $community->users->count();
        if ($membersCount === 1) {
            return '1 Membro';
        }

        $formatted = Number::abbreviate($membersCount);

        if ($membersCount >= 1000) {
            return "{$formatted} de Membros";
        }

        return "{$formatted} Membros";
    }
@endphp

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
                            <p class="leading-xs text-xs">
                                {{ getMembersCount($community) }}
                            </p>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-lucide-users class="size-5 text-white" />
                            <p class="leading-xs text-xs">Criado em {{ $community->created_at->format('M, Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex gap-8">
                @if ($isMember)
                    <form method="POST" action="{{ route('community.leave', ['community' => $community->id]) }}">
                        @csrf
                        <button
                            type="submit"
                            class="font-secondary border-outline-dark cursor-pointer rounded-lg border px-4 py-3"
                        >
                            Sair
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{ route('community.join', ['community' => $community->id]) }}">
                        @csrf
                        <button
                            type="submit"
                            class="font-secondary border-outline-dark cursor-pointer rounded-lg border px-4 py-3"
                        >
                            Entrar
                        </button>
                    </form>
                @endif
                @if ($isMember)
                    <button class="font-secondary bg-indigo-primary cursor-pointer rounded-lg px-4 py-3">
                        Criar post
                    </button>
                @endif
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
