<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();

        if (session('success')) {
            Alert::toast(session('success'), 'success');
        }

        return view('categories', compact('categories'));
    }

    public function addCategory(Request $request)
    {
        $catName = $request->input('categoryName');
        $catNameEng = $request->input('categoryNameEng');

        $categorie = new Categories;
        $categorie->name = $catName;
        $categorie->eng_name = $catNameEng;
        $categorie->is_active = 1;
        $categorie->save();

        return redirect('categories')->with('success', 'Kategori başarıyla eklendi.');
    }

    public function addSubcategory(Request $request)
    {
        $catName = $request->input('categoryName');
        $catNameEng = $request->input('categoryNameEng');
        $catId = $request->input('categoryId');

        $categorie = new Categories;
        $categorie->name = $catName;
        $categorie->eng_name = $catNameEng;
        $categorie->is_active = 1;
        $categorie->parent_id = $catId;
        $categorie->save();

        return redirect('categories')->with('success', 'Alt kategori başarıyla eklendi.');
    }

}
