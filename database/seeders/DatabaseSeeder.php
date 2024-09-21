<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AcademicYear;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        AcademicYear::create([
            'name' => Carbon::now()->format('Y') . '/' . Carbon::now()->addYear()->format('Y'),
            'is_open_registration' => true,
            'registration_start_date' => Carbon::now()->startOfMonth(),
            'registration_end_date' => Carbon::now()->endOfMonth(),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@laravel.test',
            'password' => Hash::make('secret'),
        ]);
    }
}
