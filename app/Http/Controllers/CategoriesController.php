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

        return view('control-panel.categories', compact('categories'));
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

        return redirect('control-panel.categories')->with('success', 'Kategori başarıyla eklendi.');
    }

}
