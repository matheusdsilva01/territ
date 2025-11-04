<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

final class PostController extends Controller
{
    public function createComment(CreateCommentRequest $request, Post $post): RedirectResponse
    {
        $content = $request->input('content');
        $commentParentId = $request->input('comment_parent_id');
        $id = auth()->id();
        $post->comments()->create([
            'author_id' => $id,
            'content' => $content,
            'comment_parent_id' => $commentParentId,
        ]);

        return redirect()->back();
    }
}
