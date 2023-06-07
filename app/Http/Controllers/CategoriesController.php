<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories as cat1')
        ->select('cat1.id', 'cat1.name', 'cat1.eng_name', 'cat1.is_active', 'cat2.name as parent_name')
        ->leftJoin('categories as cat2', 'cat1.parent_id', '=', 'cat2.id')
        ->orderBy('cat1.id', 'asc')
        ->get();

        // dd($categories);

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
        $catId = $request->input('mainCategory');
        

        $categorie = new Categories;
        $categorie->name = $catName;
        $categorie->is_active = 1;
        $categorie->parent_id = $catId;
        $categorie->save();

        return redirect('categories')->with('success', 'Alt kategori başarıyla eklendi.');
    }

    public function category($id)
    {
        $category = Categories::find($id);
        $categories = Categories::all();

        return view('category', compact('category', 'categories'));
    }

}
