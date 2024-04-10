<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Address;
class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $categories = Category::find(1)->posts;
        // return view('home', compact('categories'));
        $posts = Post::all();
        return response()->json($posts);
    }
}
