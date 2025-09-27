<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Community;
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
            $user->communities()->attach(Community::inRandomOrder()->limit(3)->get());
        });
    }
}
