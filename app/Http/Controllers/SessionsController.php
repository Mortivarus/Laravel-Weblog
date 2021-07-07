<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller{

    public function create(){
        return view('users/login');
    }

    public function store(){
        $attributes = request()->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required|exists:users,password'
        ]);

        if(auth()->attempt($attributes)){
            return redirect()->route('posts.index');
        }

    }

    public function destroy(){
        auth()->logout();

        return redirect()->route('posts.index');
    }
}
