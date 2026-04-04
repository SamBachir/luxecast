<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TalentProfile extends Model
{
    protected $fillable = [
        'user_id',
        'stage_name',
        'city',
        'bio',
        'day_rate',
        'hourly_rate',
        'verification_status',
        'subscription_status',
        'average_rating',
        'performance_score',
    ];
}
