<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

final class CommunityController extends Controller
{
    public function getCommunity(Request $request): View
    {
        $id = (string) $request->id;
        $posts = Post::query()->where('community_id', $id)->get();
        $community = Community::query()->find($id);
        $isMember = auth()->user()->communities->contains($community);

        return view('components.pages.community', ['posts' => $posts, 'community' => $community, 'isMember' => $isMember]);
    }

    public function getPost(Request $request): View
    {
        $id = (string) $request->id;
        $postId = (string) $request->postId;
        $community = Community::query()->find($id);
        $post = Post::query()->find($postId);
        $comments = $post->comments()->whereNull('comment_parent_id')->get();

        return view('components.pages.post', ['community' => $community, 'post' => $post, 'comments' => $comments]);
    }

    public function join(Request $request): RedirectResponse
    {
        $id = (string) $request->id;
        $community = Community::query()->findOrFail($id);
        $user = auth()->user();
        $user->communities()->attach($community);

        return redirect()->back();
    }

    public function leave(Request $request): RedirectResponse
    {
        $id = (string) $request->id;
        $community = Community::query()->findOrFail($id);
        $user = auth()->user();
        $user->communities()->detach($community);

        return redirect()->back();
    }
}
