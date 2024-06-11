<?php

namespace App\Http\Middleware;

use App\Enums\RoleEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CanSeeAppointments
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->is_admin ||
            Auth::user()->role !=RoleEnum::PATIENT) {
            return $next($request);
        }

        toastr()->error(" You have no Permission log in as Admin or Nurse","No Permission");
        return redirect('/');
    }
}
