<?php

namespace App\Listeners;

use App\Events\ResumeDeleted;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeleteResumeFile
{
    public function handle(ResumeDeleted $event): void
    {
        $resume = $event->resume;
        $file = storage_path('app/public/' . $resume->file); 
        
        
        if(file_exists($file))
        {
            unlink($file);
        }
    }
}
