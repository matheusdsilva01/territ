<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Models\Community;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

final class Sidebar extends Component
{
    /** @var Collection<int, Community> */
    public Collection $communities;

    public bool $hasCommunities = false;

    public function __construct()
    {
        if (auth()->check() || auth()->user()?->communities()->exists()) {
            $this->hasCommunities = true;
            $this->communities = auth()->user()->communities()->latest('pivot_created_at')->get();
        } else {
            $this->communities = Community::query()->latest()->limit(6)->get();
        }
    }

    public function render(): View
    {
        return view('components.sidebar');
    }
}
