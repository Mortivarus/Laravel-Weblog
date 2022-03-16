<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class SidebarView extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    { //If user is logged in and premium, return all content. Otherwise return non-premium content.
        if(Auth::check()){
            if(Auth::user()->premium){
                return view('components.sidebar-view',[
                    'posts' => Post::latest()->paginate(5)
                ]);
            }
        }

        return view('components.sidebar-view',[
            'posts' => Post::where('premium', false)->latest()->paginate(5)
        ]);
    }
}
