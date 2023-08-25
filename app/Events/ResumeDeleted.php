<?php

namespace App\Events;

use App\Models\Resume;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ResumeDeleted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public Resume $resume)
    {
    }
}
