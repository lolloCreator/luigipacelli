<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::with('categorie')->paginate(2);

        return view('portfolio.blog', compact('posts'));
        /*
        $listings = Post::with('categoria')->get();
        return $listings;
        */
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->paginate(2);
    
        // Return the search view with the resluts compacted
        return view('portfolio.blog', compact('posts'));
    }

}