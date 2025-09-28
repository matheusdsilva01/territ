<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Posts\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->columnSpanFull(),
                Select::make('author_id')
                    ->label('Author')
                    ->relationship('user', 'username')
                    ->required(),
                Select::make('community_id')
                    ->relationship('community', 'title')
                    ->default(request()->query('community_id') ?? null)
                    ->required(),
                Textarea::make('content')
                    ->columnSpanFull()
                    ->required(),
            ]);
    }
}
