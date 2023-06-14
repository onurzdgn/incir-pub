<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class OrderCategoriesController extends Controller
{
    public function index()
    {
        return view('orderCategories');
    }

    public function orderableCategories()
    {
        $categories = Categories::all();
        // return view('orderCategories', compact('categories'));
        return $categories;
    }
}
