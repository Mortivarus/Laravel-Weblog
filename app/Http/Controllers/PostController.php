<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('index', [
            'posts' => Post::take(3)->latest()->get()
        ]);
    }

    public function view(Post $post){
        return view('posts/view', compact('post'));
    }

    public function create(){
        return view('posts/create');
    }

    public function store(){
        request()->validate([
            'title'=> 'required',
            'excerpt'=> 'required',
            'body'=> 'required',
            'category' => 'required'
        ]);

        Post::create([
            'title'=> request('title'),
            'excerpt'=> request('excerpt'),
            'body'=> request('body'),
            'category' => request('category')
        ]);

        return redirect()->route('posts.index'); //Re-direct to the main page
    }
    
    public function edit(Post $post){
        return view('posts/edit', compact('post'));
    }

    public function update(Post $post){
        request()->validate([
            'title'=> 'required',
            'excerpt'=> 'required',
            'body'=> 'required',
            'category' => 'required'
        ]);

        $post->update([
            'title'=> request('title'),
            'excerpt'=> request('excerpt'),
            'body'=> request('body'),
            'category' => request('category')
        ]);

        return redirect()->route('posts.index'); //Re-direct to the main page
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index'); //Re-direct to the main page

    }

    public function login(){
        return view('users/login');
    }
}
