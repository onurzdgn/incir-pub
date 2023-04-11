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
       

        $imageName = $request->file('productPic')->getClientOriginalName();

        $product = new Products;
        $product->name = $request->input('productName');
        $product->info = $request->input('productInfo');
        $product->image = $imageName;
        $product->category_id = $request->input('productCategory');
        $product->ingredients = $request->input('productIngredients');
        $product->price = (int) $request->input('productPrice');
        $product->is_active = 1;
     
        if($request->hasFile('productPic')) {
            $product->image = $request->productPic->storeAs('public/publicImages', $request->productPic->getClientOriginalName());
        }
     
        $product->save();


        return redirect('products')->with('success', 'Ürün başarıyla eklendi');
    }

}
