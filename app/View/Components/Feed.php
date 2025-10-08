<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

final class Feed extends Component
{
    /**
     * @param  Collection<int, Post>  $posts
     */
    public function __construct(public string $title, public Collection $posts) {}

    public function render(): View
    {
        return view('components.feed');
    }
}
