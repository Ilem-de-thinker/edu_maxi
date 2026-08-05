<?php

use App\User\Actions\RegisterTutorAction;
use App\User\Actions\RegisterUserAction;
use App\User\DataTransferObjects\CreateUserDTO;
use Livewire\Component;

new class extends Component
{
    public string $accountType = 'student';

    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $confirm_password = '';

    public string $suit_name = '';

    public ?string $phone = null;

    public function rules(): array
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|same:password',
        ];

        if ($this->accountType === 'tutor') {
            $rules['suit_name'] = 'required|string|max:255|unique:tutor_suits,suit_name';
            $rules['phone'] = 'nullable|string|max:255';
        }

        return $rules;
    }

    public function save()
    {
        $this->validate();

        $dto = new CreateUserDTO($this->name, $this->email, $this->password);

        if ($this->accountType === 'tutor') {
            RegisterTutorAction::execute($dto, $this->suit_name, $this->phone);

            return redirect()->route('tutor_dashboard');
        }

        RegisterUserAction::execute($dto);

        return redirect()->route('student_dashboard');
    }
};
?>

<div class="flex min-h-screen flex-col items-center justify-center bg-gray-50 px-4 py-12 text-gray-900 sm:px-6 lg:px-8">
    <div class="w-full max-w-2xl">
        <!-- Logo / Header -->
        <div class="flex justify-center">
            <div class="rounded-2xl bg-blue-600 p-3 text-white shadow-lg shadow-blue-500/30">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v6m-9 0h18"/>
                </svg>
            </div>
        </div>
        <h2 class="mt-6 text-center text-3xl font-extrabold tracking-tight">
            Create your account
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
            Join Edu Maxi — sign up as a student or a tutor.
        </p>
    </div>

    <div class="mt-8 w-full max-w-2xl">
        <div class="rounded-3xl border border-gray-100 bg-white px-6 py-8 shadow-xl shadow-gray-200/50 sm:px-10">

            <!-- Account Type Selector -->
            <div class="mb-6 grid grid-cols-2 gap-3">
                <label for="accountTypeStudent"
                    class="flex cursor-pointer flex-col items-center gap-1 rounded-2xl border-2 px-3 py-4 text-center transition-all {{ $accountType === 'student' ? 'border-blue-600 bg-blue-600/5 shadow-sm shadow-blue-500/10' : 'border-gray-200 hover:border-gray-300' }}">
                    <input type="radio" id="accountTypeStudent" name="accountType" value="student"
                        wire:model.live="accountType" class="sr-only">
                    <span class="flex size-10 items-center justify-center rounded-xl bg-blue-600/10 text-blue-600">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14v6m-9 0h18"/>
                        </svg>
                    </span>
                    <span class="text-sm font-bold text-gray-900">Student</span>
                    <span class="text-xs text-gray-500">Learn with tutors</span>
                </label>
                <label for="accountTypeTutor"
                    class="flex cursor-pointer flex-col items-center gap-1 rounded-2xl border-2 px-3 py-4 text-center transition-all {{ $accountType === 'tutor' ? 'border-blue-600 bg-blue-600/5 shadow-sm shadow-blue-500/10' : 'border-gray-200 hover:border-gray-300' }}">
                    <input type="radio" id="accountTypeTutor" name="accountType" value="tutor"
                        wire:model.live="accountType" class="sr-only">
                    <span class="flex size-10 items-center justify-center rounded-xl bg-blue-600/10 text-blue-600">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </span>
                    <span class="text-sm font-bold text-gray-900">Tutor</span>
                    <span class="text-xs text-gray-500">Teach & earn</span>
                </label>
            </div>

            <form wire:submit="save" class="space-y-5">
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700">
                            Name
                        </label>
                        <div class="mt-2">
                            <input
                                wire:model="name"
                                id="name"
                                type="text"
                                autocomplete="name"
                                required
                                placeholder="Damian D."
                                class="block w-full rounded-2xl border-0 bg-gray-50 px-4 py-3 text-gray-900 ring-1 ring-inset ring-gray-300 transition placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                            >
                        </div>
                        @error('name')
                            <p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700">
                            Email address
                        </label>
                        <div class="mt-2">
                            <input
                                wire:model="email"
                                id="email"
                                type="email"
                                autocomplete="email"
                                required
                                placeholder="you@example.com"
                                class="block w-full rounded-2xl border-0 bg-gray-50 px-4 py-3 text-gray-900 ring-1 ring-inset ring-gray-300 transition placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                            >
                        </div>
                        @error('email')
                            <p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tutor Only Fields -->
                    @if ($accountType === 'tutor')
                        <div>
                            <label for="suit_name" class="block text-sm font-semibold text-gray-700">
                                Suit name
                            </label>
                            <div class="mt-2">
                                <input
                                    wire:model="suit_name"
                                    id="suit_name"
                                    type="text"
                                    required
                                    placeholder="e.g. Bright Scholars"
                                    class="block w-full rounded-2xl border-0 bg-gray-50 px-4 py-3 text-gray-900 ring-1 ring-inset ring-gray-300 transition placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                                >
                            </div>
                            @error('suit_name')
                                <p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700">
                                Phone <span class="font-normal text-gray-400">(optional)</span>
                            </label>
                            <div class="mt-2">
                                <input
                                    wire:model="phone"
                                    id="phone"
                                    type="tel"
                                    placeholder="+234 800 000 0000"
                                    class="block w-full rounded-2xl border-0 bg-gray-50 px-4 py-3 text-gray-900 ring-1 ring-inset ring-gray-300 transition placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                                >
                            </div>
                            @error('phone')
                                <p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    @endif

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700">
                            Password
                        </label>
                        <div class="mt-2">
                            <input
                                wire:model="password"
                                id="password"
                                type="password"
                                autocomplete="new-password"
                                required
                                placeholder="••••••••"
                                class="block w-full rounded-2xl border-0 bg-gray-50 px-4 py-3 text-gray-900 ring-1 ring-inset ring-gray-300 transition placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                            >
                        </div>
                        <p class="mt-2 text-xs text-gray-500">Use 8+ characters with letters, numbers & symbols.</p>
                        @error('password')
                            <p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="confirm_password" class="block text-sm font-semibold text-gray-700">
                            Confirm password
                        </label>
                        <div class="mt-2">
                            <input
                                wire:model="confirm_password"
                                id="confirm_password"
                                type="password"
                                autocomplete="new-password"
                                required
                                placeholder="••••••••"
                                class="block w-full rounded-2xl border-0 bg-gray-50 px-4 py-3 text-gray-900 ring-1 ring-inset ring-gray-300 transition placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                            >
                        </div>
                        @error('confirm_password')
                            <p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button
                        type="submit"
                        wire:loading.attr="disabled"
                        class="flex w-full cursor-pointer justify-center rounded-2xl border border-transparent bg-blue-600 px-4 py-3 text-sm font-bold text-white shadow-lg shadow-blue-500/25 transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-50"
                    >
                        <span wire:loading.remove wire:target="save">Create {{ ucfirst($accountType) }} Account</span>
                        <span wire:loading wire:target="save" class="flex items-center gap-2">
                            <svg class="h-4 w-4 animate-spin text-white" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Creating...
                        </span>
                    </button>
                </div>
            </form>

            <p class="mt-6 text-center text-sm text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold text-blue-600 hover:underline" wire:navigate>
                    Sign in
                </a>
            </p>
        </div>
    </div>
</div>
