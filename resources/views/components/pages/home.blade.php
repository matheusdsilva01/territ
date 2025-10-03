<?php
declare(strict_types=1);

?>

<x-layouts.guest>
    <section class="mx-auto flex flex-col gap-8 p-8">
        <div class="flex flex-col gap-4">
            <h1 class="text-md font-secondary font-semibold">
                Olá,
                <span class="text-indigo-primary">${{ auth()->user()->username ?? 'null' }}</span>
            </h1>
            <p class="text-c-medium">Confira as estatísticas das comunidades que você segue</p>
        </div>
        <section class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <x-card-stats color="brand-primary" icon="lucide-building-2" label="Quantidade de usuários" value="10000" />
            <x-card-stats color="lime-primary" icon="lucide-building-2" label="Quantidade de posts" value="10000" />
            <x-card-stats color="indigo-primary" icon="lucide-building-2" label="Quantidade de replies" value="10000" />
        </section>
        <x-content-wrapper title="Veja os últimos posts das comunidades que você segue">
            @for ($i = 0; $i < 5; $i++)
                <x-post-item />
            @endfor
        </x-content-wrapper>
    </section>
</x-layouts.guest>

<?php
