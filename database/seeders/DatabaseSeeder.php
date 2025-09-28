<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Community;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (app()->isLocal()) {
            User::factory()->admin()->create();
        }

        User::factory(10)->create();
        Community::factory(5)->create();
        User::query()->limit(2)->get()->each(function (User $user): void {
            $user->communities()->attach(Community::query()->inRandomOrder()->limit(3)->get());
        });

        $community = Community::query()->first();
        Post::factory(10)->for($community)->create();
        Comment::factory(5)->create([
            'post_id' => Post::query()->inRandomOrder()->first()->id,
            'author_id' => User::query()->inRandomOrder()->first()->id,
        ]);
    }
}
