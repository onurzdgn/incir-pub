<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use RealRashid\SweetAlert\Facades\Alert;


class ProductsController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $products = Products::all();

        

        if (session('success')) {
            Alert::toast(session('success'), 'success');
        }

        return view('products', compact('categories', 'products'));
    }

    public function addProduct(Request $request)
    {
       
        $productName = $request->input('productName');
        $productInfo = $request->input('productInfo');
        $productCategory = $request->input('productCategory');
        $productIngredients = $request->input('productIngredients');
        $productPrice = (int) $request->input('productPrice');
        $productPic = $request->file('productPic');
        $imageName = $productPic->getClientOriginalName();

        $product = new Products;
        $product->name = $productName;
        $product->info = $productInfo;
        $product->image = $imageName;
        $product->category_id = $productCategory;
        $product->ingredients = $productIngredients;
        $product->price = $productPrice;
        $product->is_active = 1;
        $product->save();

        $productPic->move(public_path('publicImages/products'), $imageName);

        return redirect('products')->with('success', 'Ürün başarıyla eklendi.');
        
    }

}
