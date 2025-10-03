<?php

declare(strict_types=1);

namespace App\View\Components\Pages;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class Post extends Component
{
    /** @var array<int, array{isReply: bool, replies: ?array<int, array{isReply: bool, replies: null}>}> */
    public array $replies = [
        ['isReply' => false, 'replies' => [
            ['isReply' => true, 'replies' => null],
        ]],
        ['isReply' => false, 'replies' => null],
        ['isReply' => false, 'replies' => null],
        ['isReply' => false, 'replies' => null],
    ];

    public function render(): View
    {
        return view('components.pages.post');
    }
}
