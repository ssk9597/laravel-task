<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //index
    public function index()
    {
        return view("login");
    }
}
