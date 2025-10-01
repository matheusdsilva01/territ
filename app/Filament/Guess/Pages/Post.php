<?php

declare(strict_types=1);

namespace App\Filament\Guess\Pages;

use App\Filament\Shared\Pages\GuessBasePage;

final class Post extends GuessBasePage
{
    public array $replies = [
        ['isReply' => false, 'replies' => [
            ['isReply' => true, 'replies' => []],
            ['isReply' => true, 'replies' => [
                ['isReply' => true, 'replies' => []],
                ['isReply' => true, 'replies' => []],
            ]],
            ['isReply' => true, 'replies' => []],
        ],
        ],
        ['isReply' => false, 'replies' => []],
        ['isReply' => false, 'replies' => []],
        ['isReply' => false, 'replies' => [
            ['isReply' => true, 'replies' => []],
        ]],
    ];

    protected string $view = 'filament.guess.pages.post';
}
