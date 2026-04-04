<?php

namespace App\Services;

class BookingService
{
    public function createBooking(array $payload): array
    {
        return [
            'message' => 'Booking creation placeholder',
            'payload' => $payload,
            'status' => 'REQUESTED',
        ];
    }
}
