<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('index');
    }

    public function view(){
        return view('posts/view');
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

}
