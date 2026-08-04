<?php

namespace App\Action\Auth;

use App\DataTransferObj\User\CreateUserDTO;
use App\Models\User;

/**
 * class createUser is the actionthat runs the create user command, with a sungle execute method
 *
 * @method User execute(CreateUserDTO $createUserDto) create and returns teh instance of the created user
 *
 */
class CreateUser{

    public static function execute(CreateUserDTO $createUserDto):User{
        return User::create(
            [
                'name'=>$createUserDto->name,
                'email'=>$createUserDto->email,
                'password'=>$createUserDto->password
            ]
        );
    }

}
