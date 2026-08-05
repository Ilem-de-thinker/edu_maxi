<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Ensures the authenticated user is registered as a student.
 */
class EnsureUserIsStudent
{
    /**
     * Abort the request unless the authenticated user is a student.
     */
    public function handle(Request $request, Closure $next): Response
    {
        abort_unless($request->user()?->isStudent(), 403);

        return $next($request);
    }
}
