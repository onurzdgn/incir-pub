<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

//SELECT * FROM `categories` WHERE categories.parent_id IS NULL AND categories.parent_id != categories.id;

class OrderProductsController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('orderProducts', compact('categories'));
    }
}
