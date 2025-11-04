<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\RedirectResponse;

final class CommentController extends Controller
{
    public function likeComment(Comment $comment): RedirectResponse
    {
        $id = auth()->id();

        $comment->likes()->create([
            'user_id' => $id,
        ]);

        return redirect()->back();
    }
}
