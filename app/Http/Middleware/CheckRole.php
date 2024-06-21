<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // app/Http/Middleware/CheckRole.php

public function handle($request, Closure $next, ...$roles)
{
    if (!in_array(auth()->user()->role, $roles)) {
        abort(403, 'Unauthorized action.');
    }

    return $next($request);
}

}
