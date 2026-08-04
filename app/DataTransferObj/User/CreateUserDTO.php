<?php

namespace   App\DataTransferObj\User;

use Exception;

/**
 * @property string $name: the name of the user 
 * @property string $email: the email of the user
 * @property string $password: The password of the user
 */
class CreateUserDTO{
    public function __construct(
        public string $name,
        public string $email,
        public string $password
    )
    {
    }


    public function hasPassword()
    {
        if(empty($this->password)){
            throw new Exception("There is need for password, password must be filled");
        }
    }
}
