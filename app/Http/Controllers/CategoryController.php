<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
// use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate();
        return view('category.index', compact('categories'));
    }

    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }
}
