<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Post extends Model
{
    /** @use HasFactory<PostFactory> */
    use HasFactory;

    use HasUuids;

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'community_id',
    ];

    /** @return BelongsTo<Community> */
    public function community(): BelongsTo
    {
        return $this->belongsTo(Community::class);
    }
}
