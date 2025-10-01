<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class PostComment extends Component
{
    public bool $hasReplies = true;

    /** @var array<int, array{isReply: bool, replies: $this}> */
    public array $replies = [];

    /**
     * @param  array<int, array{isReply: bool, replies: $this}>  $replies
     */
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
