<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    public function getAllCategories()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }

    public function addNewCategory(Request $request)
    {
        $category = new Category;
        $category->name_english = $request->name_english;
        $category->name_arabic  = $request->name_arabic;

        if($category->save())
        {
            return response()->json(['success' => true]);
        }

    }
    public function editCategory(Request $id)
    {
        $category = Category::find($id);
        return response()->json($category, 200);
    }

    public function updateCategory(Request $request)
    {
        $category = Category::find($request->id);
        $category->name_english =  $request->name_english;
        $category->name_arabic  =  $request->name_arabic;
        $category->save();

        if ($category->save())
        {
            return response()->json(['success' => true]);
        }
    }

    public function deleteCategory(Request $id)
    {
        $category = Category::find($id);
        $category->delete();
    }
}
