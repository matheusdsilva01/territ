<?php

declare(strict_types=1);

namespace App\Filament\Guest\Pages;

use App\Filament\Shared\Pages\GuestBasePage;

final class Post extends GuestBasePage
{
    /** @var array<int, array{isReply: bool, replies: ?array<int, array{isReply: bool, replies: null}>}> */
    public array $replies = [
        ['isReply' => false, 'replies' => [
            ['isReply' => true, 'replies' => null],
        ]],
        ['isReply' => false, 'replies' => null],
        ['isReply' => false, 'replies' => null],
        ['isReply' => false, 'replies' => null],
    ];

    protected string $view = 'filament.guest.pages.post';
}
