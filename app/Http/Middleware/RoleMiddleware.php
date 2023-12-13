<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
                return $user->role->role_id == 1 ? 'admin.dashboard' : false;
                break;

            case 'doctor':
                return $user->role->role_id == 2 ? 'doctor.doctor-dashboard' : false;
                break;

            case 'patient':
                return $user->role->role_id == 3 ? 'patient.patient-dashboard' : false;
                break;

            // Add more cases if you have additional roles

            default:
                return false;
                break;
        }
    }
}
