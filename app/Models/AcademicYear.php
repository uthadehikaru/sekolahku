<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AcademicYear extends Model
{
    use HasFactory;

    protected $casts = [
        'is_open_registration' => 'boolean',
        'registration_start_date' => 'date',
        'registration_end_date' => 'date',
    ];

    public function scopeOpen($query)
    {
        return $query->where('is_open_registration', true)
            ->where('registration_start_date', '<=', now())
            ->where('registration_end_date', '>=', now());
    }

    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }
}
