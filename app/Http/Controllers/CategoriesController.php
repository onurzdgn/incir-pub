<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('categories', compact('categories'));
    }

    public function addUser(Request $request)
    {
        $catName = $request->input('categoryName');
        $catNameEng = $request->input('categoryNameEng');

        $categorie = new Categories;
        $categorie->name = $catName;
        $categorie->eng_name = $catNameEng;
        $categorie->is_active = 1;
        $categorie->save();

        return view('categories');
    }

}
