<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;


class CreateController extends Controller
{
    public function __invoke(User $user)
    {

        return view('Admin.user.create');
    }

}
