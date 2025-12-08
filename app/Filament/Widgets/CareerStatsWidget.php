<?php

namespace App\Filament\Widgets;

use App\Models\Career;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CareerStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $totalCareers = Career::count();
        $activeCareers = Career::where('is_active', true)->count();
        $inactiveCareers = Career::where('is_active', false)->count();
        
        $popularLocation = Career::select('job_location')
            ->groupBy('job_location')
            ->orderByRaw('COUNT(*) DESC')
            ->value('job_location') ?? 'N/A';

        return [
            Stat::make('Total Job Openings', $totalCareers)
                ->icon('heroicon-o-briefcase')
                ->description('All career positions')
                ->color('primary'),
            
            Stat::make('Active Positions', $activeCareers)
                ->icon('heroicon-o-check-circle')
                ->description('Currently hiring')
                ->color('success'),
            
            Stat::make('Inactive Positions', $inactiveCareers)
                ->icon('heroicon-o-x-circle')
                ->description('Closed or on hold')
                ->color('danger'),
            
            Stat::make('Most Popular Location', $popularLocation)
                ->icon('heroicon-o-map-pin')
                ->description('Location with most openings')
                ->color('info'),
        ];
    }
}