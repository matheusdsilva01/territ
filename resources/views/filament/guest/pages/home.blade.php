<?php
declare(strict_types=1);

?>

@php
    use CodeWithDennis\FilamentLucideIcons\Enums\LucideIcon;
    use Filament\Schemas\Components\Icon;
@endphp

<section class="mx-auto flex flex-col gap-8 p-8">
    <div class="flex flex-col gap-4">
        <h1 class="text-md font-secondary font-semibold">
            Olá,
            <span class="text-indigo-primary">${{ auth()->user()->username }}</span>
        </h1>
        <p class="text-c-medium">Confira as estatísticas das comunidades que você segue</p>
    </div>
    <section class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        <div
            class="border-brand-primary/30 from-brand-primary/[8%] to-brand-primary/0 max-w-[320px] rounded-xl border bg-gradient-to-r p-8"
        >
            <div class="flex gap-3">
                <div class="bg-brand-primary rounded-sm p-2.5">
                    {{
                        Icon::make('building')
                            ->icon(LucideIcon::Building2)
                            ->color('white')
                    }}
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-c-medium text-2xs">Quantidade de usuários</p>
                    <span class="text-sm font-semibold">10000</span>
                </div>
            </div>
        </div>
        <div
            class="border-lime-primary/30 from-lime-primary/[8%] to-lime-primary/0 max-w-[320px] rounded-xl border bg-gradient-to-r p-8"
        >
            <div class="flex gap-3">
                <div class="bg-lime-primary rounded-sm p-2.5">
                    {{
                        Icon::make('building')
                            ->icon(LucideIcon::Building2)
                            ->color('white')
                    }}
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-c-medium text-2xs">Quantidade de posts</p>
                    <span class="text-sm font-semibold">10000</span>
                </div>
            </div>
        </div>
        <div
            class="border-indigo-primary/30 from-indigo-primary/[8%] to-indigo-primary/0 max-w-[320px] rounded-xl border bg-gradient-to-r p-8"
        >
            <div class="flex gap-3">
                <div class="bg-indigo-primary rounded-sm p-2.5">
                    {{
                        Icon::make('building')
                            ->icon(LucideIcon::Building2)
                            ->color('white')
                    }}
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-c-medium text-2xs">Quantidade de replies</p>
                    <span class="text-sm font-semibold">10000</span>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-elevation-01dp border-outline-dark flex flex-col gap-8 rounded-3xl border p-8">
        <h2 class="text-md font-secondary">Veja os últimos posts das comunidades que você segue</h2>
        <section class="flex flex-col gap-8">
            @for ($i = 0; $i < 5; $i++)
                <div class="bg-elevation-02dp border-outline-dark flex flex-col gap-4 rounded-xl border px-8 py-4">
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-2">
                            <img
                                src="https://cdn-icons-png.flaticon.com/32/10851/10851235.png"
                                alt="logo community"
                                class="size-8"
                            />
                            <p class="leading-xs">/r/dev</p>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h2 class="font-secondary text-sm">
                                How I learn any type of new technology (As a Senior Developer)
                            </h2>
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
