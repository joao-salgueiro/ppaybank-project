<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Users;
use App\Models\Retailers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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
    $credentials = $request->only('email', 'password');

    // Tenta autenticar como usuário normal
    if (Auth::guard('web')->attempt($credentials, $request->filled('remember'))) {
        $request->session()->regenerate();
        return redirect()->route('dashboard');
    }

    // Tenta autenticar como lojista
    if (Auth::guard('retailer')->attempt($credentials, $request->filled('remember'))) {
        $request->session()->regenerate();
        return redirect()->route('retailers.retailer_dashboard');
    }

    return back()->withErrors([
        'email' => 'Credenciais inválidas.',
    ]);
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
