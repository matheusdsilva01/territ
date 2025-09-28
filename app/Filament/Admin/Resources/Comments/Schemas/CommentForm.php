<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\Comments\Schemas;

use App\Models\Comment;
use Closure;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

final class CommentForm
{
    public static function configure(Schema $schema): Schema
    {

        return $schema
            ->components([
                Select::make('author_id')
                    ->relationship('author', 'name')
                    ->preload()
                    ->searchable()
                    ->required(),
                Select::make('post_id')
                    ->relationship('post', 'title')
                    ->preload()
                    ->searchable()
                    ->live()
                    ->required(),
                Select::make('comment_parent_id')
                    ->disabled(fn (Get $get) => $get('post_id') === null)
                    ->searchable()
                    ->getSearchResultsUsing(function (string $search, Get $get): array {
                        $postId = $get('post_id');
                        if (! $postId) {
                            return [];
                        }

                        return Comment::query()->where('post_id', $postId)
                            ->where('id', '!=', $get('id'))
                            ->where('content', 'like', sprintf('%%%s%%', $search))
                            ->limit(50)
                            ->pluck('content', 'id')
                            ->toArray();
                    })
                    ->options(function (Get $get): array {
                        $postId = $get('post_id');
                        if (! $postId) {
                            return [];
                        }

                        return Comment::query()->where('post_id', $postId)
                            ->where('id', '!=', $get('id'))
                            ->limit(50)
                            ->pluck('content', 'id')
                            ->toArray();
                    })
                    ->getOptionLabelUsing(fn ($value): ?string => Comment::query()->find($value)?->content)
                    ->preload()
                    ->nullable()
                    ->rules([fn (Get $get): Closure => function (string $attribute, $value, Closure $fail) use ($get): void {
                        $parentComment = Comment::query()->where('id', $value)->first();

                        if ($parentComment->post->id !== $get('post_id')) {
                            $fail('The selected parent comment does not belong to the selected post.');
                        }
                    }]),
                Textarea::make('content')
                    ->columnSpanFull()
                    ->required(),
            ]);
    }
}
