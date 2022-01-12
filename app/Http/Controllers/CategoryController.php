<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function store(){
        $validated = request()->validate([
            'name' => 'required'
            ]);

        Category::create($validated);

        return redirect()->route('posts.create');
    }
}
