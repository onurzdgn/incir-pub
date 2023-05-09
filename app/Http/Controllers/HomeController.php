<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('control-panel.home');
    }
    public function login()
    {
        return view('control-panel.login');
    }
}
