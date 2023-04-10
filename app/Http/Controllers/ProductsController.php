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
        $products = Products::all();
        return view('products', compact('categories', 'products'));
    }

    public function addProduct(Request $request)
    {
        $productName = $request->input('productName');
        $productInfo = $request->input('productInfo');
        $productImage = $request->input('productPic');
        $productCategory = $request->input('productCategory');
        $productIngredients = $request->input('productIngredients');
        $productPrice = (int) $request->input('productPrice');

        dd($productName, $productInfo, $productImage, $productCategory, $productIngredients, $productPrice);

        $product = new Products;
        $product->name = $productName;
        $product->info = $productInfo;
        $product->image = $productImage;
        $product->category_id = $productCategory;
        $product->ingredients = $productIngredients;
        $product->price = $productPrice;
        $product->is_active = 1;
        $product->save();

        return redirect('products');
    }

}
