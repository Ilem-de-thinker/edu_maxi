<?php

namespace App\User\Services;

use App\Models\Profile;
use App\User\DataTransferObjects\Profile\CreateProfileDTO;

/**
 * Handles persistence of profile records.
 */
class ProfileService
{
    /**
     * Create a new profile record for the given user.
     */
    public function create(CreateProfileDTO $createProfileDTO): Profile
    {
        return Profile::create([
            'user_id' => $createProfileDTO->userId,
        ]);
    }
}
