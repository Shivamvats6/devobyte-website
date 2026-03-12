<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerVacancy extends Model
{
    protected $fillable = [
        'title',
        'experience',
        'deadline',
        'summary',
        'responsibilities',
        'requirements',
        'is_active'
    ];

    protected $casts = [
        'responsibilities' => 'array',
        'requirements' => 'array',
        'deadline' => 'date'
    ];
}
