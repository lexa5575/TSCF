<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;


class CreateController extends Controller
{
    public function __invoke()
    {

        return view('Admin.tag.create');
    }

}
