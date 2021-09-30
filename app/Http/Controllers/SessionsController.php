<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller{

    public function create(){
        return view('users/login');
    }

    public function store(){
        $attributes = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)){
            session()->regenerate();

            return redirect()->route('posts.index')->with('success', 'Welcome back, '. $attributes['username'] . '!');
        }

        return back()->withErrors(['password' => 'Your provided credentials could not be verified.']);
        return back()->withErrors(['username' => 'Your provided credentials could not be verified.']);

    }

    public function destroy(){
        auth()->logout();

        return redirect()->route('posts.index');
    }
}
