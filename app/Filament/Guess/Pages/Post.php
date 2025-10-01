<?php

declare(strict_types=1);

namespace App\Filament\Guess\Pages;

use App\Filament\Shared\Pages\GuessBasePage;

final class Post extends GuessBasePage
{
    /** @var array<int, array{isReply: bool, replies: null}> */
    public array $replies = [
        ['isReply' => false, 'replies' => null],
        ['isReply' => false, 'replies' => null],
        ['isReply' => false, 'replies' => null],
        ['isReply' => false, 'replies' => null],
    ];

    protected string $view = 'filament.guess.pages.post';
}
