<?php

declare(strict_types=1);

use App\Models\Community;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test('comment', function (): void {
    $community = Community::factory()->create();
    $post = Post::factory()->create([
        'community_id' => $community->id,
    ]);
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->post(
            route('post.comment.create', ['post' => $post->id]),
            ['content' => 'simple comment']
        );

    $response->assertStatus(302);
    $this->assertDatabaseCount('comments', 1);
});
