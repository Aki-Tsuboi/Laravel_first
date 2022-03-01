<?php

namespace App\Http\Controllers;


// リクエスト/レスポンス
use Illuminate\Http\Request;
use Illuminate\Http\Response;



function tag($tag,$txt){
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{

    
    //
    public function index(){

        $data = ['msg' => 'これはコントローラから渡されたメッセージです。'];
        return view('hello.index',$data);
    }

}

        


