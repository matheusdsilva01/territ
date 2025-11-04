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
        $id = auth()->id();
        $post->comments()->create([
            'author_id' => $id,
            'content' => $content,
        ]);

        return redirect()->back();
    }
}
