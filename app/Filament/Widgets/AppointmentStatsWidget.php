<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class AppointmentStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $totalAppointments = Appointment::count();
        $unreadAppointments = Appointment::unread()->count();
        $readAppointments = Appointment::read()->count();
        
        $todayAppointments = Appointment::whereDate('created_at', today())->count();
        $yesterdayAppointments = Appointment::whereDate('created_at', today()->subDay())->count();

        return [
            Stat::make('Total Appointments', $totalAppointments)
                ->icon('heroicon-o-calendar-days')
                ->description($todayAppointments . ' today, ' . $yesterdayAppointments . ' yesterday')
                ->color('primary'),
            
            Stat::make('Unread Appointments', $unreadAppointments)
                ->icon('heroicon-o-envelope')
                ->description('Require attention')
                ->color($unreadAppointments > 0 ? 'danger' : 'success')
                ->chart($this->getUnreadChartData()),
            
            Stat::make('Read Appointments', $readAppointments)
                ->icon('heroicon-o-envelope-open')
                ->description('Already reviewed')
                ->color('success'),
            
            Stat::make('Response Rate', $totalAppointments > 0 ? round(($readAppointments / $totalAppointments) * 100) . '%' : '0%')
                ->icon('heroicon-o-chart-bar')
                ->description('Of total appointments reviewed')
                ->color('info'),
        ];
    }

    protected function getUnreadChartData(): array
    {
        // Get unread appointments for the last 7 days
        $data = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = today()->subDays($i);
            $count = Appointment::unread()
                ->whereDate('created_at', $date)
                ->count();
            $data[] = $count;
        }
        
        return $data;
    }

    // public static function canView(): bool
    // {
    //     return Auth::user()->can('viewAny', Appointment::class);
    // }
}