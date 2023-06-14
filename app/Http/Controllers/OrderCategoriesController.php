<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class OrderCategoriesController extends Controller
{
    public function index()
    {
        // $subcategories = Categories::where('parent_id', '===', null)->get();
        $subcategories = Categories::whereNull('parent_id')->get();
        return view('orderCategories', compact('subcategories'));
    }

    public function orderableCategories()
    {
        $categories = Categories::all();
        return $categories;
    }

    public function orderableSubCategories($id)
    {
        // $id = $request->input('id');
        // $subcategories = Categories::where('parent_id', '===', $id)->get();
        $subcategories = Categories::where('parent_id', '=', $id)->get();
        return $subcategories;
    }
    
}
