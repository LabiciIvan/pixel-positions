<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

class RegisterUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {

        $userAttributes = $request->validate([
            "name"                    => "required",
            "email"                   => "required|email|unique:users,email",
            "password"                => "required|confirmed",

        ]);

        $employerAttributes = $request->validate([
            "employer"                => "required",
            "logo"                    => ["required", File::types('svg', 'png', 'jpeg')],
        ]);

        $user = User::create($userAttributes);

        $logoPath = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath,
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
