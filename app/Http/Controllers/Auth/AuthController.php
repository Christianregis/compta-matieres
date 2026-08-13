<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        ]);

        dd($validateData);
    }
}
