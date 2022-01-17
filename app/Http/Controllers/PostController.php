<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index(){
        return view('index', [
            'posts' => Post::latest()->paginate(5),
        ]);
    }

    public function view(Post $post){
        return view('posts/view', compact('post'), [
            'posts' => Post::take(5)->latest()->get(),
            'post' => $post,
        ]);
    }

    public function search(Post $post){
        return view('search/view', [
            'posts' => Post::latest()->get()
        ]);
    }

    public function create(){
        return view('posts/create', [
            'categories' => Category::get()->sortBy('name')
        ]);
    }

    public function store(Request $request){
  
        $validated = request()->validate([
            'title' => 'required',
            'image' => 'image',
            'excerpt' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id'
            ]);
        
        $validated['user_id'] = Auth::user()->id;

        if($request->has('image')){
            $validated['image'] = 'storage/'. request()->file('image')->store('images');
        }
        
        Post::create($validated);

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

    public function categories(Category $category){
        return view('categories/view', [
            'category' => $category
        ]);
    }

}
