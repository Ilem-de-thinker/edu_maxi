<?php

namespace App\User\DataTransferObjects;

/**
 * Data transfer object carrying the payload for creating a new user.
 *
 * @property string $name The full name of the user.
 * @property string $email The email address of the user.
 * @property string $password The plain-text password of the user.
 */
class CreateUserDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
    ) {}
}
