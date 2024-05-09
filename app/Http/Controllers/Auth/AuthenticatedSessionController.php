<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\View\View;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        if(Auth::user()->usertype === 3)
        {
            return redirect('admin/dashboard');
        }
        elseif($request->user()->usertype === 2)
        {
            return redirect('doctors/dashboard');
        }
        elseif($request->user()->usertype === 1)
        {
            return redirect('users/dashboard');
        }

        return redirect()->intended(route('welcome', absolute: false));
    }


    public function showPPHNLoginForm(): View
    {
        return view('doctorlogin');
    }

    /**
     * Handle an incoming phone number authentication request.
     */
    public function loginWithPHN(Request $request): RedirectResponse
    {
        $request->validate([
            'phn' => ['required', 'integer'],
            'password' => ['required', 'string'],
        ]);

        $phn = $request->input('phn');

        // Find the user by phone number
        $user = User::where('phn', $phn)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            // Authentication failed
            return back()->withErrors([
                'phn' => 'The provided credentials do not match our records.',
            ]);
        }

        // Authentication successful
        Auth::login($user);

        return redirect()->intended('users/dashboard');
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
}
