<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Community;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Community>
 */
final class CommunityFactory extends Factory
{
    protected $model = Community::class;

    public function definition(): array
    {
        return [
            'title' => fake()->realText(30),
            'description' => fake()->realText(),
            'icon_img' => fake()->imageUrl(64, 64, 'animals', true, 'cats'),
        ];
    }
}
