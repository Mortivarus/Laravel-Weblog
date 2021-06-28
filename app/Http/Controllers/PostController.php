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
        return 'Store';
    }

    public function edit(){
        return 'Edit';
    }

    public function update(){
        return 'Update';
    }

    public function destroy(){
        return 'Destroy';
    }

    public function login(){
        return view('users/login');
    }

}
