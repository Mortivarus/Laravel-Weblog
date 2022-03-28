<?php

namespace App\Http\Controllers;

// CR :: uses die je niet gebruikt opruimen
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
            'content' => 'required'
        ]);

        $post->comments()->create([
            'user_id' => Auth::user()->id,
            'content' => request('content')
        ]);

        return back();
    }
}
