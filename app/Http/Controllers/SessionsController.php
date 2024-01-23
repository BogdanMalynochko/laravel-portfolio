<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function login() {   
        return view('sessions.login');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided email or password are not verified'
            ]);
        }

        session()->regenerate();
        return redirect('/')->with('success', 'You are loged in!');
    }

    public function logout() {
        auth()->logout();
        return redirect('/')->with('success', 'You are loged out!');
    }
}
