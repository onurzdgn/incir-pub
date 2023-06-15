<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderProductsController extends Controller
{
    public function index()
    {
        return view('orderProducts');
    }
}
