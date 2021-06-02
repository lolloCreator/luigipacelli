<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostsController extends Controller
{

    public function index(Request $request)
    {
            $posts = Post::with('categorie')->orderBy('id','DESC')->paginate(10);
            $cat = Category::all();
    
            return view('portfolio.blog', compact('posts', 'cat'));
    }
    

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        $cat = Category::all();
    
        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orderBy('id','DESC')
            ->paginate(10);
    
        // Return the search view with the resluts compacted
        return view('portfolio.blog', compact('posts', 'cat'));
    }

}