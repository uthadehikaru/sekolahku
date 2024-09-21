<?php

namespace App\Filament\Resources\AcademicYearResource\Widgets;

use App\Models\AcademicYear;
use App\Models\Registration;
use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AcademicYearStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Tahun Ajaran Aktif', AcademicYear::open()->first()->name)
            ->extraAttributes([
                'class' => 'bg-primary text-primary-content cursor-pointer',
                'title' => 'Tahun Ajaran Aktif',
                'wire:click' => 'redirectToAcademicYear',
            ]),
            Stat::make('Total Pendaftaran', Registration::where('academic_year_id', AcademicYear::open()->first()->id)->count())
            ->extraAttributes([
                'class' => 'bg-primary text-primary-content cursor-pointer',
                'title' => 'Total Pendaftaran',
                'wire:click' => 'redirectToRegistrations',
            ]),
            Stat::make('Menunggu Konfirmasi', Registration::where('academic_year_id', AcademicYear::open()->first()->id)->where('status', 'pending')->count())
            ->extraAttributes([
                'class' => 'bg-primary text-primary-content cursor-pointer',
                'title' => 'Menunggu Konfirmasi',
                'wire:click' => 'redirectToRegistrations',
            ]),
            Stat::make('Total Siswa', Student::count())
            ->extraAttributes([
                'class' => 'bg-primary text-primary-content cursor-pointer',
                'title' => 'Total Siswa',
                'wire:click' => 'redirectToStudents',
            ]),
        ];
    }

    public function redirectToRegistrations()
    {
        return redirect()->route('filament.admin.resources.registrations.index');
    }

    public function redirectToAcademicYear()
    {
        return redirect()->route('filament.admin.resources.academic-years.index');
    }

    public function redirectToStudents()
    {
        return redirect()->route('filament.admin.resources.students.index');
    }
}
