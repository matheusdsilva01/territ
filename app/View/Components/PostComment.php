<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class PostComment extends Component
{
    public bool $hasReplies = true;

    public array $replies = [];

    public function __construct(
        array $replies = [],
        public bool $isReply = false,
    ) {
        $this->hasReplies = $replies !== [];
        $this->replies = $replies;
    }

    public function render(): View
    {
        return view('components.post-comment');
    }
}
