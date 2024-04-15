<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

   
        
        public function handle(Request $request, Closure $next)
        {
            // Check if the authenticated user is a company admin
            if (auth()->check() && $this->isCompanyAdmin(auth()->user()->email)) {
                // Redirect company admin away from the dashboard
                if ($request->is('dashboard')) {
                    return redirect()->route('company.details');
                }
            }

            // If not a company admin, or not trying to access the dashboard, allow access to the requested route
            return $next($request);
        }

        // Implement your logic to check if the user is a company admin
        private function isCompanyAdmin($email)
        {
            // Your logic to determine if the user is a company admin
        }
    


}