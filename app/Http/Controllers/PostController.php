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
        return view('index');        
    }

    public function view(Post $post){
        //Check if the post is premium. If not, return view. If so, check if the user is logged in and premium. If this is the case, return the view. If not, return 403
        if($post->premium){
            if(Auth::check() && Auth::user()->premium){
                return view('posts/view', compact('post'), [
                    'post' => $post
                ]);
            }
            abort(403);
        }

        return view('posts/view', compact('post'), [
            'post' => $post
        ]);
        
    }

    // public function search(Post $post){
    //     if(Auth::check()){
    //         if(Auth::user()->premium){
    //             return view('search/view',[
    //                 'posts' => Post::latest()
    //             ]);
    //         }
    //     }

    //     return view('search/view',[
    //         'posts' => Post::where('premium', false)->latest()
    //     ]);
    //}

    public function create(){
        return view('posts/create', [
            'categories' => Category::get()->sortBy('name')
        ]);
    }

    public function store(StorePostRequest $request){

        
        $validated = $request->validated(); //Store validated data 
        
        $validated['user_id'] = Auth::user()->id; //Add the user ID to validated data

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
