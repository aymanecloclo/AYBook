<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    // Affiche le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Affiche le formulaire d'inscription
    public function registerForm()
    {
        return view('auth.register');
    }

    // Gère l'inscription
    public function register(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|max:12',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ], [
            'name.required' => 'Le nom est obligatoire.',
            'name.max' => 'Le nom ne peut pas dépasser 12 caractères.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
            'email.unique' => 'Cet email est déjà utilisé.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ]);
    
        // Création d'un nouvel utilisateur avec la méthode create()
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hachage du mot de passe
        ]);
    
        // Connexion automatique après inscription
        Auth::login($user);
    
        // Redirection vers le dashboard avec un message de succès
        return redirect()->route('dashboard')->with('success', 'Successfully registered!');
    }

    // Gère la connexion
    public function login(Request $request)
    {
        // Validation des données
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
            'password.required' => 'Le mot de passe est obligatoire.',
        ]);

        // Tentative de connexion
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Si la connexion réussit, redirige vers la page d'accueil
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        } else {
            // Si la connexion échoue, redirige avec un message d'erreur
            return redirect()->back()->withErrors([
                'email' => 'Les informations d\'identification ne correspondent pas.',
            ]);
        }
    }

    // Déconnexion de l'utilisateur
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
