<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create() 
    {
        return view('register.create');
    }

    public function store() 
    {
        $attributes = request()->validate([
            'name' => 'required|min:2',
            'email' => 'required|email|max:40|unique:users,email',
            'password' => 'required'
        ]);

        $user = User::create($attributes);
        auth()->login($user);
        
        return redirect('/')->with('success', 'Your account has been created and you are loged in');
    }
}
