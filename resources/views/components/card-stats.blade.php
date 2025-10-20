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
    class="max-w-[320px] rounded-xl border border-[var(--color-variant)]/30 bg-gradient-to-r from-[var(--color-variant)]/[8%] to-[var(--color-variant)]/0 p-8"
    style="--color-variant: var({{ '--' . $color }})"
>
    <div class="flex gap-3">
        <div class="rounded-sm bg-[var(--color-variant)] p-2.5">
            <x-dynamic-component :component="$icon" class="size-5 text-white" />
        </div>
        <div class="flex flex-col gap-1">
            <p class="text-c-medium text-2xs">{{ $label }}</p>
            <span class="text-sm font-semibold">{{ $value }}</span>
        </div>
    </div>
</div>

<?php
