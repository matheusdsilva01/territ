<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Community;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

final class CommunityController extends Controller
{
    public function getCommunity(Community $community): View
    {
        $posts = $community->posts()->get();

        $isMember = auth()->user()?->communities->contains($community) ?? false;

        return view('components.pages.community', ['posts' => $posts, 'community' => $community, 'isMember' => $isMember]);
    }

    public function getPost(Community $community, Post $post): View
    {
        $comments = $post->comments()->whereNull('comment_parent_id')->get();

        return view('components.pages.post', ['community' => $community, 'post' => $post, 'comments' => $comments]);
    }

    public function join(Community $community): RedirectResponse
    {
        $user = auth()->user();
        $user->communities()->attach($community);

        return redirect()->back();
    }

    public function leave(Community $community): RedirectResponse
    {
        $user = auth()->user();
        $user->communities()->detach($community);

        return redirect()->back();
    }

    public function createComment(CreateCommentRequest $request, Post $post): RedirectResponse
    {
        $content = $request->input('content');
        $user = auth()->user();
        $post->comments()->create([
            'author_id' => $user->id,
            'content' => $content,
        ]);

        return redirect()->back();
    }
}
