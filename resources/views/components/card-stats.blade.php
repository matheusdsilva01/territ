<?php

declare(strict_types=1);

?>
@props([
    'color' => 'indigo-primary',
    'icon' => 'lucide-building-2',
    'label' => 'Quantidade de usuários',
    'value' => '10000',
])

<div
    class="border-{{ $color }}/30 from-{{ $color }}/[8%] to-{{ $color }}/0 max-w-[320px] rounded-xl border bg-gradient-to-r p-8"
>
    <div class="flex gap-3">
        <div class="bg-{{ $color }} rounded-sm p-2.5">
            <x-dynamic-component :component="$icon" class="size-5 text-white" />
        </div>
        <div class="flex flex-col gap-1">
            <p class="text-c-medium text-2xs">{{ $label }}</p>
            <span class="text-sm font-semibold">{{ $value }}</span>
        </div>
    </div>
</div>
<?php 
