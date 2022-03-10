<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index(){

        // if(Auth::check() ||Auth::user()->premium){
            
        // } else{
        //     return view('index', [
        //         'posts' => Post::where('premium', '=', false)->latest()->paginate()
        //     ]);
        // }

        // if(Auth::check()){
        //     if(Auth::user()->premium){
        //         return view('index', [
        //             'posts' => Post::latest()->paginate(5)
        //         ]);
        //     }
        // }

        $posts = Post::where('premium', true);

        return view('index', [
            'posts' => Post::where('premium', true)->get()
        ]);

        // $posts = Post::where('premium', true)->paginate();

        // foreach($posts as $post){
        //     echo $post->title;
        //     echo "<br>";
        //     echo $post->premium? 'True':'False';
        //     echo "<br>";
        // }


        // dd($post);
        
        
    }

    public function view(Post $post){
        // if(Auth::user()->premium){
        //     return view('posts/view', compact('post'), [
        //         'posts' => Post::take(5)->latest()->get(),
        //         'post' => $post
        //     ]);
        // } else{
        //     return view('posts/view', compact('post'), [
        //         'posts' => Post::where('premium', '=', false)->take(5)->latest()->get(),
        //         'post' => $post
        //     ]);
        // }

        
    }

    // public function search(Post $post){
    //     return view('search/view', [
    //         'posts' => Post::latest()->get()
    //     ]);
    // }

    public function create(){
        return view('posts/create', [
            'categories' => Category::get()->sortBy('name')
        ]);
    }


    public function test(){
        return 'Well done';
    }

    public function store(StorePostRequest $request){

        
        $validated = $request->validated(); //Store validated data 
        
        $validated['user_id'] = Auth::user()->id; //Add the user ID to 

        if($request->has('image')){
            $validated['image'] = 'storage/'. request()->file('image')->store('images');
        }

        if($request->has('premium')){
            $validated['premium'] = TRUE;
        } else{
            $validated['premium'] = FALSE;
        }

        Post::create($validated);

        return redirect()->route('posts.index'); //Re-direct to the main page
    }
    
    public function edit(Post $post){
        return view('posts/edit', compact('post'),
        [
            'categories' => Category::get()->sortBy('name')
        ]);
    }

    public function update(Post $post, StorePostRequest $request){
        $validated = $request->validated();    //Store validated data 
        $post->update($validated);             //Update the post

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
