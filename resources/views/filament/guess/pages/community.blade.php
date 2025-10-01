<?php

declare(strict_types=1);

?>

@php
    use CodeWithDennis\FilamentLucideIcons\Enums\LucideIcon;
    use Filament\Actions\Action;
    use Filament\Schemas\Components\Icon;
    use App\Filament\Guess\Pages\Post;
@endphp

<section class="mx-auto flex flex-col gap-11 px-8 py-6">
    <section class="flex items-center justify-between gap-8">
        <div class="flex gap-4">
            <img src="https://cdn-icons-png.flaticon.com/32/10851/10851235.png" alt="community logo" class="size-16" />
            <div class="flex flex-col gap-3">
                <h1 class="font-secondary text-md">/r/ Dev</h1>
                <p class="text-c-medium leading-xs text-xs">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porttitor pretium..
                </p>
                <div class="flex gap-8">
                    <div class="flex items-center gap-3">
                        {{ Icon::make('users')->icon(LucideIcon::Users)->color('white') }}
                        <p class="leading-xs text-xs">1bi de membros</p>
                    </div>
                    <div class="flex items-center gap-3">
                        {{ Icon::make('users')->icon(LucideIcon::Users)->color('white') }}
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
    <section class="bg-elevation-01dp border-outline-dark flex flex-col gap-8 rounded-3xl border p-8">
        <h2 class="text-md font-secondary">Veja todos os posts da comunidade</h2>
        <section class="flex flex-col gap-8">
            @for ($i = 0; $i < 5; $i++)
                <div class="bg-elevation-02dp border-outline-dark flex flex-col gap-4 rounded-xl border px-8 py-4">
                    <div class="relative isolate flex flex-col gap-4">
                        <div class="flex items-center gap-2">
                            <img
                                src="https://cdn-icons-png.flaticon.com/32/10851/10851235.png"
                                alt="logo community"
                                class="size-8"
                            />
                            <p class="leading-xs">/r/dev</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <a href="{{ route(Post::getRouteName()) }}" class="font-secondary text-sm">
                                <span class="absolute inset-0"></span>
                                How I learn any type of new technology (As a Senior Developer)
                            </a>
                            <p class="leading-xs text-c-medium font-medium">
                                Recently, I had a task of learning a new tool that I had never used or seen anything
                                related to, and I thought: why not write about how I learned it? This is the kind of
                                article that teaches you to learn things from a different perspective. Not the best way,
                                but you can reuse some of the concepts written here.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-5">
                        <button class="text-2xs flex items-center gap-2 p-2">
                            {{
                                Icon::make('message')
                                    ->icon(LucideIcon::MessageCircle)
                                    ->color('white')
                            }}
                            1
                        </button>
                        <button class="text-2xs flex items-center gap-2 p-2">
                            {{
                                Icon::make('like')
                                    ->icon(LucideIcon::ThumbsUp)
                                    ->color('white')
                            }}
                        </button>
                        <button class="text-2xs flex items-center gap-2 p-2">
                            {{
                                Icon::make('dislike')
                                    ->icon(LucideIcon::ThumbsDown)
                                    ->color('white')
                            }}
                        </button>
                        <button class="text-2xs flex items-center gap-2 p-2 font-semibold">Responder</button>
                    </div>
                </div>
            @endfor
        </section>
    </section>
</section>

<?php
