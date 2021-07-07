<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;


class RegisterController extends Controller
{
    //

    public function create(){
        return view('register/create');
    }

    public function store(){
        request()->validate([   //Validate register input
            'name'=> 'required',
            'username'=> 'required',
            'email'=> 'required|email',
            'password' => 'required'
        ]);

        $user = User::create([    //After validation make a new user
            'name'=> request('name'),
            'username'=> request('username'),
            'email'=> request('email'),
            'password' => request('password')
        ]);

        session()->flash('success', 'Your account has been created.');

        auth()->login($user);

        return redirect()->route('posts.index'); //Re-direct to the main page
    }
}
