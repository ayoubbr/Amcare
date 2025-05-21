<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'home']);
        $this->middleware('auth')->only(['dashboard']);
    }

    // public function registerForm()
    // {
    //     return view('auth.register');
    // }

    // public function register(RegisterRequest $request)
    // {
    //     $request->validated();
    //     $userRole = Role::where('role_name', 'Utilisateur')->first();
    //     $welcomeBadge = Badge::where('name', 'Welcome')->first();

    //     $user = User::create([
    //         'nom' => $request->nom,
    //         'prenom' => $request->prenom,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'role_id' => $userRole?->id ?? 3,
    //         'badge_id' => $welcomeBadge?->id,
    //         'avatar' => 'avatars/default.png',
    //     ]);

    //     event(new Registered($user));
    //     Auth::login($user);
    //     return $this->redirectBasedOnRole($user);
    // }

    public function loginForm()
    {
        return view('auth.adminLogin');
    }

    public function login(LoginRequest $request)
    {
        $reqst= $request->validated();
        
        $email = $reqst->email;
        $password = $reqst->password;
        $remember = $reqst->filled('remember');
        if (Auth::check()) {
            Auth::logout(); 
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
        
        $user = User::where('email', $email)->first();
        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            $user->Auth::user();
            Auth::login($user, $remember);
            $request->session()->regenerate();
            $user->update(['last_login_at' => now()]);
            return redirect()->route('admin.dashboard')
                ->with('success', 'Connexion réussie. Bienvenue dans votre espace d\'administration.');
        }
        return back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => 'Les identifiants fournis ne correspondent à aucun compte.',
            ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')
            ->with('success', 'Vous avez été déconnecté avec succès.');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
