<?php

namespace App\Filament\Resources\ResumeResource\Pages;

use App\Filament\Resources\ResumeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageResumes extends ManageRecords
{
    protected static string $resource = ResumeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
