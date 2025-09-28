<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Comments\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

final class CommentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('content'),
                TextEntry::make('author.name')
                    ->label('Author'),
                TextEntry::make('post.title')
                    ->label('Post'),
                TextEntry::make('commentParent.id')
                    ->label('Comment parent')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
