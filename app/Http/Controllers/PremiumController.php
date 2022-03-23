<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PremiumController extends Controller
{
    public function view(){
        return view('users/premium');
    }

    public function store(Request $request){

        $user = Auth::user();

        if($request->has('premium')){
            $user['premium'] = TRUE;
        } else {
            $user['premium'] = FALSE;
        }

        $user->save();

        return redirect()->route('posts.index')->with('success', $user->premium ? 'Premium is toggled ON' : 'Premium is toggled OFF');
    }
}
