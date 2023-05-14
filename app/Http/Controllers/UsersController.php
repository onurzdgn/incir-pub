<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('users', compact('users'));
    }

    public function addUser(Request $request)
    {
        $validated = $request->validate([
            'userLoginName' => 'required',
            'userName' => 'required',
            'userSurname' => 'required',
            'userMail' => 'required',
            'userPhone' => 'required',
            'userRank' => 'required',
            'userPassword' => 'required'
        ]);

        return $validated;
        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));

        $data = array('name' => $name, 'email' => $email, 'password' => $password);

        DB::table('users')->insert($data);

        return redirect('users');
    }

}
