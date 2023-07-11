<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;

class ApisController extends Controller
{
    public function categories() {
        $categorie = Categories::where('parent_id', '=', null, 'and', 'is_active', '=', 1)->get();
        return $categorie;
    }

    public function products() {
        $products = Products::where('is_active', '=', 1)->get();
        return $products;
    }
}
