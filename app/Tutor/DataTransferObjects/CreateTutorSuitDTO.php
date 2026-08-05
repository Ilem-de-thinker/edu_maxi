<?php

namespace App\Tutor\DataTransferObjects;

/**
 * Data transfer object carrying the payload for creating a tutor suit.
 *
 * @property int $userId The identifier of the user the suit belongs to.
 * @property string $suitName The display name of the tutor suit.
 * @property string|null $phone An optional phone number for the suit.
 */
class CreateTutorSuitDTO
{
    public function __construct(
        public int $userId,
        public string $suitName,
        public ?string $phone = null,
    ) {}
}
