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

}