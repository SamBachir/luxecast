<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(): JsonResponse
    {
        return response()->json(['message' => 'Admin dashboard placeholder']);
    }

    public function pendingTalent(): JsonResponse
    {
        return response()->json(['message' => 'Pending talent placeholder']);
    }

    public function approveTalent(int $id): JsonResponse
    {
        return response()->json(['message' => 'Approve talent placeholder', 'id' => $id]);
    }

    public function resolveDispute(int $id): JsonResponse
    {
        return response()->json(['message' => 'Resolve dispute placeholder', 'id' => $id]);
    }

    public function enforceAction(int $id): JsonResponse
    {
        return response()->json(['message' => 'Enforcement action placeholder', 'id' => $id]);
    }
}
