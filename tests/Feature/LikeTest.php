<?php

declare(strict_types=1);

use App\Models\Community;
use App\Models\Post;
use App\Models\User;

test('should like a comment', function (): void {
    $community = Community::factory()->create();
    $post = Post::factory()->for($community)->create();
    $comment = $post->comments()->create([
        'author_id' => User::factory()->create()->id,
        'content' => 'This is a test comment.',
    ])->first();
    $anotherUser = User::factory()->create();

    $response = $this->actingAs($anotherUser)->post(route('post.comment.like', [
        'comment' => $comment->id,
    ]));

    $response->assertStatus(302);
});
