<?php

namespace App\Services;

class TalentSearchService
{
    public function search(array $filters): array
    {
        return [
            'message' => 'Talent search placeholder',
            'filters' => $filters,
            'results' => [],
        ];
    }
}
