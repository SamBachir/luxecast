<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\TalentSearchService;

class TalentController extends Controller
{
    public function search(Request $request, TalentSearchService $service): JsonResponse
    {
        return response()->json($service->search($request->all()));
    }

    public function show(int $id): JsonResponse
    {
        return response()->json(['message' => 'Talent detail placeholder', 'id' => $id]);
    }

    public function profile(): JsonResponse
    {
        return response()->json(['message' => 'Talent profile placeholder']);
    }

    public function storeProfile(Request $request): JsonResponse
    {
        return response()->json(['message' => 'Store talent profile placeholder']);
    }

    public function uploadPortfolio(Request $request): JsonResponse
    {
        return response()->json(['message' => 'Upload portfolio placeholder']);
    }
}
