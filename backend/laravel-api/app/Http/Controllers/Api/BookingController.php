<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\BookingService;

class BookingController extends Controller
{
    public function store(Request $request, BookingService $service): JsonResponse
    {
        return response()->json($service->createBooking($request->all()));
    }

    public function clientBookings(): JsonResponse
    {
        return response()->json(['message' => 'Client bookings placeholder']);
    }
}
