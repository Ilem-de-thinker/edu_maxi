<?php

namespace App\Tutor\Services;

use App\Models\TutorSuit;
use App\Tutor\DataTransferObjects\CreateTutorSuitDTO;
use Illuminate\Support\Str;

/**
 * Handles persistence of tutor suit records.
 */
class TutorSuitService
{
    /**
     * Create a new tutor suit from the given data.
     */
    public function create(CreateTutorSuitDTO $createTutorSuitDTO): TutorSuit
    {
        return TutorSuit::create([
            'user_id' => $createTutorSuitDTO->userId,
            'suit_name' => $createTutorSuitDTO->suitName,
            'suit_pass_key' => Str::uuid(),
            'phone' => $createTutorSuitDTO->phone,
            'accounts' => null,
        ]);
    }
}
