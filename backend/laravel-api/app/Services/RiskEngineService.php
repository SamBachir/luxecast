<?php

namespace App\Services;

class RiskEngineService
{
    public function scoreChatMessage(string $message): array
    {
        $patterns = ['@', 'call me', 'off app', 'direct deal', '+61', '04'];
        $score = 0;

        foreach ($patterns as $pattern) {
            if (stripos($message, $pattern) !== false) {
                $score += 20;
            }
        }

        return [
            'risk_score' => $score,
            'flagged' => $score >= 20,
        ];
    }
}
