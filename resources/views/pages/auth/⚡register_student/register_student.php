<?php

use App\Action\Auth\CreateUser;
use App\DataTransferObj\User\CreateUserDTO;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

new
#[Layout('layouts.auth')]
class extends Component
{
    #[Validate('required|unique:users,name|string')]
    public string $name = '';

    #[Validate('required|unique:users,email|email')]
    public string $email = '';

    #[Validate('required|string|not_in:password,password123')]
    public string $password = '';

    #[Validate('same:password')]
    public string $confirm_password;

    public function save()
    {
        $this->validate();

        $user_data_obj = new CreateUserDTO(name: $this->name, email: $this->email, password: $this->password);
        $user = CreateUser::execute($user_data_obj);

        Auth::login($user);
        session()->flash("success", "Welcome {$user->name} Your account has been created successfully");

        $this->redirectRoute("student_dashboard");
    }
};
