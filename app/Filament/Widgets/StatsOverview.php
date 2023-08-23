<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('تدوينة', $this->getAllPost())
            ->description('إن الله يحب إذا عمل أحدكم عملاً أن يتقنه')
            ->descriptionIcon('heroicon-s-emoji-happy')
            ->color('success'),
            Card::make('أجمالي زيارات الصفحة', '21K')
            ->description('7% increase')
            ->descriptionIcon('heroicon-s-trending-up'),
        ];
    }

    protected function getAllPost()
    {
        return Post::all()->count();
    }
    
}
