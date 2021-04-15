<?php

namespace App\Http\Controllers;

//Model -> Register
use App\Models\Register;
//Request -> StoreRegister
use App\Http\Requests\StoreRegister;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //index
    public function index()
    {
        return view("register");
    }

    //store
    public function store(StoreRegister $request)
    {
        //インスタンス
        $register = new Register;

        //値を代入
        $name = $request->input("name");

        //値を取得する
        $register->name = $request->input("name");
        $register->email = $request->input("email");
        $register->password = $request->input("password");

        //保存
        $register->save();

        return view("welcome", compact("name"));
    }
}
