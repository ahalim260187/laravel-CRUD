<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        // validate
        // dd(request()->all());
        $attributes = request()->validate(
            [
                'email' => ['required', 'email', 'max:125'],
                'password' => ['required'],
            ]
        );
        // attempt login user
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credential do not match'
            ]);
        };
        // redirect
        return redirect('/job');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
