<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use http\Env\Request;
use App\Models\Category;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Category $category)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);

        return redirect()->route('admin.category.index', compact('category'));
    }

}