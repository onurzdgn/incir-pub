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

    public function addUser(Request $request)
    {
        $userName = $request->input('userLoginName');
        $name = $request->input('userName');
        $surname = $request->input('userSurname');
        $phone = $request->input('userPhone');
        $rank = $request->input('userRank');
        $password = $request->input('userPassword');

        $cat = new Categories;
        $cat->username = $userName;
        $cat->name = $name;
        $cat->surname = $surname;
        $cat->phone = $phone;
        $cat->rank = $rank;
        $cat->password = $password;
        $cat->save();
    }
}
