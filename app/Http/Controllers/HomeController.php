<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

final class HomeController extends Controller
{
    public function index(): View
    {
        if (auth()->check()) {
            $communitiesIds = auth()->user()->communities()
                ->whereHas('posts', null, '>=', 3)->limit(4)->pluck('id');

            $posts = Post::query()->whereIn('community_id', $communitiesIds)->latest()->limit(8)->get();
        } else {
            $posts = Post::query()->latest()->limit(8)->get();
        }

        return view('components.pages.home', ['posts' => $posts]);
    }
}
