<?php

namespace App\Models;

use App\Models\{User, Category};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, BelongsToMany};
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'body',
        'thumbnail', 
        'slug', 
        'thumbnail', 
        'active', 
        'publish_at', 
        'user_id'
    ];

    protected $casts = [
        'publush_at' => 'datetime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
