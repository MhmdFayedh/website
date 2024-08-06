<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'body',
        'thumbnail', 
        'slug', 
        'active', 
        'publish_at', 
        'user_id',
        'source_code',
        'live_url'
    ];

    protected $casts = [
        'publish_at' => 'datetime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
