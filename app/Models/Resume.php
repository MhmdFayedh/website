<?php

namespace App\Models;

use App\Events\ResumeDeleted;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'file',
    ];

    protected $dispatchesEvents = [
        'deleted' => ResumeDeleted::class
    ];
}
