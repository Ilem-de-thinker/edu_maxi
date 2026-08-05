<?php

use App\User\Actions\AuthenticateUserAction;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

new #[Layout('layouts.app')] class extends Component
{
    #[Rule('required|email')]
    public string $email = '';

    #[Rule('required|string')]
    public string $password = '';

    public bool $remember = false;

    /**
     * Attempt to authenticate the user and redirect them to their dashboard.
     */
    public function login()
    {
        $this->validate();

        $homePath = AuthenticateUserAction::execute($this->email, $this->password, $this->remember);

        return redirect()->intended($homePath);
    }
};
?>

<div class="flex min-h-screen flex-col items-center justify-center bg-gray-50 px-4 py-12 text-gray-900 sm:px-6 lg:px-8">
    <div class="w-full max-w-md">
        <!-- Logo / Header -->
        <div class="flex justify-center">
            <div class="rounded-2xl bg-blue-600 p-3 text-white shadow-lg shadow-blue-500/30">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
            </div>
        </div>
        <h2 class="mt-6 text-center text-3xl font-extrabold tracking-tight">
            Sign in to your account
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
            Welcome back! Please enter your details.
        </p>
    </div>

    <div class="mt-8 w-full max-w-md">
        <div class="rounded-3xl border border-gray-100 bg-white px-4 py-8 shadow-xl shadow-gray-200/50 sm:px-10">

            <form wire:submit="login" class="space-y-6">
                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700">
                        Email Address
                    </label>
                    <div class="relative mt-2">
                        <input
                            wire:model="email"
                            id="email"
                            type="email"
                            autocomplete="email"
                            required
                            autofocus
                            class="block w-full rounded-2xl border-0 bg-gray-50 px-4 py-3 text-gray-900 ring-1 ring-inset ring-gray-300 transition placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                            placeholder="you@example.com"
                        >
                    </div>
                    @error('email')
                        <p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-semibold text-gray-700">
                            Password
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-xs font-bold text-blue-600 hover:underline">
                                Forgot password?
                            </a>
                        @endif
                    </div>
                    <div class="mt-2">
                        <input
                            wire:model="password"
                            id="password"
                            type="password"
                            autocomplete="current-password"
                            required
                            class="block w-full rounded-2xl border-0 bg-gray-50 px-4 py-3 text-gray-900 ring-1 ring-inset ring-gray-300 transition placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                        >
                    </div>
                    @error('password')
                        <p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input
                            wire:model="remember"
                            id="remember"
                            type="checkbox"
                            class="h-4 w-4 rounded-md border-gray-300 text-blue-600 focus:ring-blue-600"
                        >
                        <label for="remember" class="ml-2.5 block text-sm text-gray-700">
                            Remember me
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button
                        type="submit"
                        wire:loading.attr="disabled"
                        class="flex w-full cursor-pointer justify-center rounded-2xl border border-transparent bg-blue-600 px-4 py-3 text-sm font-bold text-white shadow-lg shadow-blue-500/25 transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-50"
                    >
                        <span wire:loading.remove wire:target="login">Sign In</span>
                        <span wire:loading wire:target="login" class="flex items-center gap-2">
                            <svg class="h-4 w-4 animate-spin text-white" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Authenticating...
                        </span>
                    </button>
                </div>
            </form>

            <p class="mt-6 text-center text-sm text-gray-600">
                Don't have an account?
                <a href="{{ route('register') }}" class="font-semibold text-blue-600 hover:underline" wire:navigate>
                    Create one
                </a>
            </p>

        </div>
    </div>
</div>
