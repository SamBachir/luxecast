<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function subscribe(Request $request): JsonResponse
    {
        return response()->json(['message' => 'Subscription payment placeholder']);
    }

    public function authorizeBooking(Request $request): JsonResponse
    {
        return response()->json(['message' => 'Booking authorization placeholder']);
    }

    public function captureBooking(Request $request): JsonResponse
    {
        return response()->json(['message' => 'Booking capture placeholder']);
    }
}
