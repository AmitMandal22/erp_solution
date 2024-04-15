<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Employee;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        if (Auth::guard('employee')->attempt($request->only('email', 'password'))) {
            // Authentication passed for employees table
            $request->session()->regenerate();

            // Check if the user is a company admin
            $user = Auth::guard('employee')->user();
            if ($this->isCompanyAdmin($user->email)) {
                return redirect()->route('c-admin.dashboard');
            } else {
                // Handle authentication for general users here
            }
        } elseif (Auth::guard('web')->attempt($request->only('email', 'password'))) {
            // Authentication passed for users table
            $request->session()->regenerate();

            // Check if the user is an admin
            $user = Auth::guard('web')->user();
            if ($this->isAdmin($user->email)) {
                return redirect()->route('dashboard');
            }

        }

        // If authentication fails or user role check fails
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function isCompanyAdmin($userEmail)
    {
        $company_admin = Employee::where('email', $userEmail)->first();
        if($company_admin && $company_admin->is_admin){ 
            return true;
        }
        return false;
    }
    
    public function isAdmin($userEmail)
    {
        $super_admin = User::where('email', $userEmail)->first();
        if($super_admin && $super_admin->is_admin){ 
            return true;
        }
        return false;
    }
}