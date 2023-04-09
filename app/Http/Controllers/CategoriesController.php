<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories');
    }

    public function addUser()
    {
        $cat = new Categories;
    }
}
