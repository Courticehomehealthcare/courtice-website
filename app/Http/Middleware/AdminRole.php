<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminRole
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        Log::info('AdminRole middleware check', [
            'auth_check' => Auth::check(),
            'user' => $user ? $user->only('id','email','role') : null
        ]);

        // ✅ Use case-insensitive, trimmed check
        if (Auth::check() && strtolower(trim($user->role)) === 'admin') {
            Log::info('AdminRole middleware passed', ['user_id' => $user->id, 'role' => $user->role]);
            return $next($request);
        }

        Log::warning('AdminRole middleware blocked access', ['user_id' => $user ? $user->id : null]);
        return redirect('/home')->with('error', 'Unauthorized');
    }
}

