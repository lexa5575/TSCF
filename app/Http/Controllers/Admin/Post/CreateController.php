<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;



class CreateController extends Controller
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();
        return view('Admin.posts.create', compact('categories'));
    }

}
