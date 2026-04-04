<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'client_id',
        'talent_id',
        'booking_type',
        'start_time',
        'end_time',
        'location',
        'status',
        'gross_amount',
        'commission_amount',
        'net_amount',
        'payout_status',
    ];
}
