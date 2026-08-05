<?php

namespace App\User\DataTransferObjects\Profile;

/**
 * Data transfer object carrying the payload for creating a profile.
 *
 * @property int $userId The identifier of the user the profile belongs to.
 */
class CreateProfileDTO
{
    public function __construct(
        public int $userId,
    ) {}
}
