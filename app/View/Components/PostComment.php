<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Models\Comment;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class PostComment extends Component
{
    public function __construct(public Comment $comment) {}

    public function render(): View
    {
        return view('components.post-comment');
    }
}
