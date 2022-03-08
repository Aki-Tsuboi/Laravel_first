<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jissyu3_2Controller extends Controller
{
    //
    public function index()
    {
        $data = [
            'msg'=>'必要事項を入力して下さい',
        ];
        return view('jissyu3_2.input', $data);
    }

    public function post(Request $request)
    {
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age,
        ];
        return view('jissyu3_2.output', $data);
    }

}

