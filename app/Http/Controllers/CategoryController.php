<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    //add cate
    public function add_category(Request $request)
    {
        $category = new Category();
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->save();
        return redirect()->route('cate.categories')->with('success', 'Post created successfully!');
    }
    //all category
    public function categories()
    {
        $categories = Category::all();
        return view('/category/categories', ['categories' => $categories]);
    }
    //edit
        public function edit($id)
        {
            $category = Category::findOrFail($id);
            return view('/category/update-category', compact('category'));
        }
    //update
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->all();
        $category->update($data);
        $categories = Category::all();
        return view('/category/categories', compact('categories'));
    }
    //delete
    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('cate.categories');
    }
}
