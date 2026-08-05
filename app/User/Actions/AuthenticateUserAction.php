<?php

namespace App\User\Actions;

use App\User\Services\AuthenticationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

/**
 * Authenticates a user and resolves the home path for their role.
 */
class AuthenticateUserAction
{
    /**
     * The maximum number of login attempts allowed within the decay window.
     */
    private const MAX_ATTEMPTS = 5;

    /**
     * The number of seconds the rate limiter waits after failed attempts.
     */
    private const DECAY_SECONDS = 60;

    /**
     * Authenticate the given credentials and return the destination home path.
     *
     * @throws ValidationException When the credentials are invalid or rate limited.
     */
    public static function execute(string $email, string $password, bool $remember): string
    {
        $authenticationService = new AuthenticationService;
        $throttleKey = $authenticationService->throttleKey($email);

        if ($authenticationService->tooManyAttempts($throttleKey, self::MAX_ATTEMPTS)) {
            $seconds = $authenticationService->availableIn($throttleKey);

            throw ValidationException::withMessages([
                'email' => trans('auth.throttle', [
                    'seconds' => $seconds,
                    'minutes' => ceil($seconds / 60),
                ]),
            ]);
        }

        if (! $authenticationService->attempt($email, $password, $remember)) {
            $authenticationService->hit($throttleKey, self::DECAY_SECONDS);

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        $authenticationService->clear($throttleKey);
        session()->regenerate();

        return self::homePath();
    }

    /**
     * Resolve the dashboard the authenticated user should land on.
     */
    private static function homePath(): string
    {
        $user = Auth::user();

        if ($user->isAdmin()) {
            return route('platform.index');
        }

        if ($user->isTutor()) {
            return route('tutor_dashboard');
        }

        return route('student_dashboard');
    }
}
