<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Communities\Pages;

use App\Filament\Admin\Resources\Communities\CommunityResource;
use App\Filament\Admin\Resources\Posts\PostResource;
use App\Models\Post;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

/**
 * @property Post $record
 */
final class ManageCommunityPosts extends ManageRelatedRecords
{
    protected static string $resource = CommunityResource::class;

    protected static string $relationship = 'posts';

    protected static ?string $relatedResource = PostResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('user.username')
                    ->label('Author')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->heading(sprintf('Posts in %s', $this->record->title))
            ->headerActions([
                CreateAction::make()
                    ->label('Create Post in this Community')
                    ->url(PostResource::getUrl('create', ['community_id' => $this->record->id])),
            ]);
    }
}
