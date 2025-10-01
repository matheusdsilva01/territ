<?php

declare(strict_types=1);

?>

@props([
    'label' => 'Label',
    'href' => '#',
    'icon' => null,
    'helper' => null,
])

<div
    @class([
        'hover:bg-indigo-primary/5 relative isolate flex cursor-pointer items-center justify-between rounded-xl p-4 transition-all',
        'border-indigo-primary/30 from-indigo-primary/[8%] to-indigo-primary/0 border bg-gradient-to-r hover:bg-inherit' =>
            request()->url() === $href,
    ])
>
    <div class="flex items-center gap-3">
        {{ $icon }}
        <a href="{{ $href }}" class="leading-xs">
            <span class="absolute inset-0"></span>
            {{ $label }}
        </a>
    </div>
    @if ($helper)
        <div class="font-secondary bg-indigo-primary/15 border-indigo-primary/30 h-fit rounded-full px-4 py-0.5">
            {{ $helper }}
        </div>
    @endif
</div>
