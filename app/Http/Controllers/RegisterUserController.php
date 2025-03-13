<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        // validate
        // dd(request()->all());
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:125'],
            'password' => ['required', Password::min(5)->letters(), 'confirmed']
        ]);
        // create user to the db
        $user = User::create($attributes);
        // log in
        Auth::login($user);
        // redirect user to dashboard, main, dll
        return redirect('/job');
    }
}
