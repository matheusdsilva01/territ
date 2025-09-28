<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\CommunityFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Community extends Model
{
    /** @use HasFactory<CommunityFactory> */
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'title',
        'description',
        'icon_img',
    ];

    /** @return BelongsToMany<User> */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    /** @return HasMany<Post> */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
