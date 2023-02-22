<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index (){
        $category=Category::all();
        return view('admin.category.index',compact('category'));

    }

    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('admin.category.index');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        
        $category->update($request->all());
        return redirect()->route('admin.category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }

}
