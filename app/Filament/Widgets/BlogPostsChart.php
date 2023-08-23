<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Filament\Widgets\BarChartWidget;

class BlogPostsChart extends BarChartWidget
{
    protected static ?string $heading = 'عدد التدوبنات بالأشهر';
    protected int | string | array $columnSpan = 2;

    protected array $lables = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    protected function getData(): array
    {

        return [
            'datasets' => [
                [
                    'label' => 'التدوينات المنشوره',
                    'data' => $this->getAllPostByMonth(),
                    'backgroundColor' => 
                    [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    'borderColor' => 
                    [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    'borderWidth' => 2
                ],
            ],
            'labels' => $this->lables,

        ];
    }

    private function getAllPostByMonth(): array
    {
        $posts = DB::table('posts')
        ->select('publish_at')
        ->get()
        ->groupBy(function($posts){
            return Carbon::parse($posts->publish_at)->format('F');
        })
        ->toArray();

        $numberOfPostByMonth = [];
        foreach($this->lables as $month)
        {
            array_push($numberOfPostByMonth, count($posts[$month] ?? []));
        }

        return array_combine($this->lables, $numberOfPostByMonth);
    }
}
