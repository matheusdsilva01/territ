<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Communities\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class CommunitiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Name')
                    ->limit(30)
                    ->searchable(),
                ImageColumn::make('icon_img')
                    ->label('Icon')
                    ->circular(),
                TextColumn::make('description')
                    ->limit(50),
                TextColumn::make('created_at')
                    ->dateTime(),
                TextColumn::make('users_count')
                    ->label('Qty Members')
                    ->counts('users')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
