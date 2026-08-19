<?php

namespace App\Http\Controllers\Auth;

use App\Enum\User\UserRole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'matricule' => ['string', 'string', 'max:300'],
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required', 'string'],
            'mot_de_passe_confirmation' => ['required', 'string'],
        ]);

        if ($validateData['password'] === $validateData['mot_de_passe_confirmation']) {
            $user = User::create([
                ...$validateData,
            ]);
            return redirect()->route('connexion')->with('success', 'Inscription reussie. Vous pouvez desormais vous connecter !');
        } else {
            return redirect()->back()->withErrors('Les mots de passe ne sont pas identiques !');
        }
    }

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($validateData)) {
            $user = Auth::user();
            if ($user->role == UserRole::ADMIN->value) {
                return redirect()->route('admin.dashboard')->with('success', 'Bienvenue chers Utilisateur');
            }
            return redirect()->route('user.dashboard')->with('success', 'Bienvenue chers Administrateur');
        } else {
            return redirect()->back()->withErrors('Email ou mot de passe incorrect !');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        Auth::logout();
        return redirect()->route('login')->with('success', 'Vous etes deconnecté !');
    }
}
