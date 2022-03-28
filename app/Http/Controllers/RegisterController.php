<?php

namespace App\Http\Controllers;

// CR :: uses die je niet gebruikt opruimen!!
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;


class RegisterController extends Controller
{
    //

    public function create()
    {
        return view('register/create');
    }

    public function store()
    {
        // CR :: Formvalidation zou ik in een eigen request zetten
        $attributes = request()->validate([   //Validate register input
            'name' => 'required|unique:users,name',
            'username' => 'required|unique:users,username',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $attributes['premium'] = FALSE;


        $user = User::create($attributes);

        session()->flash('success', 'Your account has been created.');

        auth()->login($user);

        return redirect()->route('posts.index'); //Re-direct to the main page
    }
}
