<?php

namespace App\User\Services;

use App\Models\User;
use App\User\DataTransferObjects\CreateUserDTO;
use Illuminate\Support\Facades\Hash;

/**
 * Handles persistence of user records.
 */
class UserService
{
    /**
     * Create a new user record from the given data.
     */
    public function create(CreateUserDTO $createUserDTO): User
    {
        return User::create([
            'name' => $createUserDTO->name,
            'email' => $createUserDTO->email,
            'password' => Hash::make($createUserDTO->password),
        ]);
    }
}
