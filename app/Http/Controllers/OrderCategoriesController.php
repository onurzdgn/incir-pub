<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use RealRashid\SweetAlert\Facades\Alert;

class OrderCategoriesController extends Controller
{
    public function index()
    {
        // $subcategories = Categories::where('parent_id', '===', null)->get();
        $subcategories = Categories::whereNull('parent_id')->get();
        
        if (session('success')) {
            Alert::toast(session('success'), 'success');
        }
        
        return view('orderCategories', compact('subcategories'));
    }

    public function orderableCategories()
    {
        $categories = Categories::where('parent_id', "=", null)->orderBy('order', 'asc')->get();
        return $categories;
    }

    public function orderableSubCategories($id)
    {
        // $id = $request->input('id');
        // $subcategories = Categories::where('parent_id', '===', $id)->get();
        $subcategories = Categories::where('parent_id', '=', $id)->orderBy('order', 'asc')->get();
        return $subcategories;
    }

    public function updateCategoryOrder(Request $request)
    {
        foreach ($request->all() as $key => $value) {
            if ($key === '_token') {
                continue;
            }
            echo $key . ' ' . $value . '<br>';
            $category = Categories::find($key);
            $category->order = $value;
            $category->save();
        }

        return redirect('orderCategories')->with('success', 'Kategoriler başarıyla güncellendi.');
    }
    
}
