<?php

namespace App\User\Actions;

use App\Models\User;
use App\Tutor\DataTransferObjects\CreateTutorSuitDTO;
use App\Tutor\Services\TutorSuitService;
use App\User\DataTransferObjects\CreateUserDTO;

/**
 * Registers a new tutor user along with their tutor suit.
 */
class RegisterTutorAction
{
    /**
     * Create the user, profile and tutor suit, then log the user in.
     */
    public static function execute(CreateUserDTO $createUserDTO, string $suitName, ?string $phone = null): User
    {
        $user = RegisterUserAction::execute($createUserDTO);

        (new TutorSuitService)->create(
            new CreateTutorSuitDTO($user->id, $suitName, $phone),
        );

        return $user;
    }
}
