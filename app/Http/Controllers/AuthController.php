<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('dashboard');
    }

    public function accessForm()
    {
        return view('auth.access');
    }

    public function verifyAccessCode(Request $request)
    {
        $request->validate([
            'access_code' => 'required|string'
        ]);

        $validCode = env('ACCESS_CODE', 'admin_secret_2024');

        if ($request->access_code === $validCode) {
            session(['admin_access_granted' => true]);
            return redirect()->route('admin.login.form');
        }
        return back()->withErrors([
            'access_code' => 'Code d\'accès invalide.'
        ]);
    }

    public function loginForm()
    {
        if (!session('admin_access_granted')) {
            return redirect()->route('admin.access');
        }

        $settings = Setting::first();
        return view('auth.adminLogin', compact('settings'));
    }

    public function login(LoginRequest $request)
    {
        $reqst = $request->validated();
        $email = $request->email;
        $remember = $request->filled('remember');

        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        $user = User::where('email', $email)->first();
        if (Auth::attempt($reqst, $remember)) {
            Auth::login($user, $remember);
            $request->session()->regenerate();
            session()->forget('admin_access_granted');
            $user->update(['last_login_at' => now()]);
            return redirect()->route('admin.settings.index')
                ->with('success', 'Connexion réussie. Bienvenue dans votre espace d\'administration.');
        }

        return back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => 'Les identifiants fournis ne correspondent à aucun compte administrateur.',
            ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.access')
            ->with('success', 'Vous avez été déconnecté avec succès.');
    }
}
