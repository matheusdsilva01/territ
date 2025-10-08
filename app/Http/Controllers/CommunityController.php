<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class CommunityController extends Controller
{
    public function getCommunity(Request $request): View
    {
        $id = (string) $request->id;
        $posts = Post::query()->where('community_id', $id)->get();

        return view('components.pages.community', ['posts' => $posts]);
    }
}
