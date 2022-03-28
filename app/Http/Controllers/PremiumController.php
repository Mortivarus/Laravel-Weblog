<?php

namespace App\Http\Controllers;

// CR :: uses die je niet gebruikt opruimen
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PremiumController extends Controller
{
    public function view()
    {
        return view('users/premium');
    }

    public function store(Request $request)
    {

        $user = Auth::user();

        // CR :: onderstaande kan korter, kijk naar je PostController voor een voorbeeld
        if ($request->has('premium')) {
            $user['premium'] = TRUE;
        } else {
            $user['premium'] = FALSE;
        }

        $user->save();

        return redirect()->route('posts.index')->with('success', $user->premium ? 'Premium is toggled ON' : 'Premium is toggled OFF');
    }
}
