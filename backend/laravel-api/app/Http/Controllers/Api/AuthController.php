<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        return response()->json(['message' => 'Register endpoint placeholder']);
    }

    public function login(Request $request): JsonResponse
    {
        return response()->json(['message' => 'Login endpoint placeholder']);
    }

    public function verifyOtp(Request $request): JsonResponse
    {
        return response()->json(['message' => 'OTP verification placeholder']);
    }
}
