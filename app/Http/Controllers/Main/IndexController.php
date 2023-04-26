<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Post $post, Category $category)
    {
        $posts = Post::get()->random(6);
        return view('main.index', compact('posts'));
    }

}
