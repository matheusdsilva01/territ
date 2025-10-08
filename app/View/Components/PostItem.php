<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class PostItem extends Component
{
    public function __construct(public Post $post) {}

    public function render(): View
    {
        return view('components.post-item');
    }
}
