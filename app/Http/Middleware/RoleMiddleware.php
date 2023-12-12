<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        $user = Auth::user();

        if (Auth::check() && $this->checkRole($user, $role)) {
            return $next($request);
        }

        return redirect('/');
    }

    protected function checkRole($user, $role)
    {
        // Check if the user's role matches the required role
        switch ($role) {
            case 'admin':
                if ($user->role->role_id == 1) {
                    return 'admin.dashboard';
                }

                case 'user':
                    if ($user->role->role_id == 2) {
                        return 'user.Welcome';
                    }

            // Add more cases if you have additional roles

            default:
                return false;
                break;
        }
    }
}
