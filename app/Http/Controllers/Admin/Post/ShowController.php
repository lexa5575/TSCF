<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {

        return view('Admin.posts.show', compact('post'));
    }

}
