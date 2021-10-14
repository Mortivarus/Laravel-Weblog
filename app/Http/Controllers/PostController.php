<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('index', [
            'posts' => Post::take(5)->latest()->get(),
            'categories' => Category::all()
            // 'authors' => Post::author()->orderBy('name')

        ]);
    }

    public function view(Post $post){
        return view('posts/view', compact('post'), [
            'posts' => Post::take(5)->latest()->get(),
            'post' => $post,
            'categories' => Category::all()
            // 'authors' => Post::author()->orderBy('name')
        ]);
    }

    public function search(Post $post){
        return view('search/view', [
            'posts' => Post::latest()->get()
        ]);
    }

    public function create(){
        return view('posts/create');
    }

    public function store(){
        request()->validate([
            'title'=> 'required',
            'excerpt'=> 'required',
            'content'=> 'required'
        ]);

        Post::create([
            'title'=> request('title'),
            'excerpt'=> request('excerpt'),
            'content'=> request('content'),
            'user_id' => Auth::user()->id,
            'category_id'=> 1
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
            'content'=> 'required',
        ]);

        $post->update([
            'title'=> request('title'),
            'excerpt'=> request('excerpt'),
            'content'=> request('content'),
        ]);

        return redirect()->route('posts.index'); //Re-direct to the main page
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index'); //Re-direct to the main page

    }

}
