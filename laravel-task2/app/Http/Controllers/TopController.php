<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    //index
    public function index()
    {
        //名前（新規登録しているかどうかを判別）
        $name = "";
        return view("welcome", compact("name"));
    }
}
