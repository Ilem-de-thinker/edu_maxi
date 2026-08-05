<?php

namespace App\User\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

/**
 * Handles the authentication concerns of the application,
 * including credential verification and login rate limiting.
 */
class AuthenticationService
{
    /**
     * Attempt to authenticate the user with the given credentials.
     */
    public function attempt(string $email, string $password, bool $remember): bool
    {
        return Auth::attempt(['email' => $email, 'password' => $password], $remember);
    }

    /**
     * Generate a unique rate limiter key for the given email address.
     */
    public function throttleKey(string $email): string
    {
        return Str::transliterate(Str::lower($email).'|'.request()->ip());
    }

    /**
     * Determine if the given rate limiter key has been rate limited.
     */
    public function tooManyAttempts(string $key, int $maxAttempts = 5): bool
    {
        return RateLimiter::tooManyAttempts($key, $maxAttempts);
    }

    /**
     * Get the number of seconds remaining until the rate limiter is available.
     */
    public function availableIn(string $key): int
    {
        return RateLimiter::availableIn($key);
    }

    /**
     * Register a failed authentication attempt for the given key.
     */
    public function hit(string $key, int $decaySeconds = 60): void
    {
        RateLimiter::hit($key, $decaySeconds);
    }

    /**
     * Clear the rate limiter for the given key.
     */
    public function clear(string $key): void
    {
        RateLimiter::clear($key);
    }
}
