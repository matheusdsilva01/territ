<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends Factory<Comment>
 */
final class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'content' => fake()->sentence(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'author_id' => User::factory(),
            'post_id' => Post::factory(),
            'comment_parent_id' => null,
        ];
    }
}
