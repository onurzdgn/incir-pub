<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

//SELECT * FROM `categories` WHERE categories.parent_id IS NULL AND categories.parent_id != categories.id;

class OrderProductsController extends Controller
{
    public function index()
    {
        $mainCategories = Categories::where('parent_id', null)->get();
        $subCategories = Categories::where('parent_id', '!=', 'id')->get();
        return view('orderProducts', compact('mainCategories', 'subCategories'));
    }

    public function orderableProducts($id)
    {
        $products = Products::where('category_id', '=', $id)->get();
        return $products;
    }
}
