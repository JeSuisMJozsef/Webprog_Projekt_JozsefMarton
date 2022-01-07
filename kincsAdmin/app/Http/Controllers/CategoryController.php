<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return response(Category::all(),200);
    }
    
    public function show(Category $category)
    {
        return response($category,200);
    }
    
    public function store(Request $request)
    {
        return response(Category::create($request->all()),201);
    }
    
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return response($category,200);
    }
    
    public function delete(Category $category)
    {
        $category->delete();
        return response(null,204);
    }
}
