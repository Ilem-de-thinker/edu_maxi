<?php

namespace App\User\Actions;

use App\Models\User;
use App\User\DataTransferObjects\CreateUserDTO;
use App\User\DataTransferObjects\Profile\CreateProfileDTO;
use App\User\Services\ProfileService;
use App\User\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Registers a new user and their default profile in a single transaction.
 */
class RegisterUserAction
{
    /**
     * Create the user and profile, then log the user in.
     */
    public static function execute(CreateUserDTO $createUserDTO): User
    {
        $userService = new UserService;
        $profileService = new ProfileService;

        $user = DB::transaction(function () use ($createUserDTO, $userService, $profileService): User {
            $user = $userService->create($createUserDTO);

            $profileService->create(new CreateProfileDTO($user->id));

            return $user;
        });

        Auth::login($user);

        return $user;
    }
}
