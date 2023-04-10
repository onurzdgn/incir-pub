<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;


class ProductsController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('products', compact('categories'));
    }
}
