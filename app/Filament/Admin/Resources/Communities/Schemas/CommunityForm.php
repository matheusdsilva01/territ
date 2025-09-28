<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Communities\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class CommunityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                TextInput::make('icon_img')
                    ->label('Icon URL')
                    ->placeholder('https://example.com/icon.png'),
                Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }
}
