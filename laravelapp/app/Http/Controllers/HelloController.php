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

    
    // idをつけるときに引数を渡してあげるとそれが$id に入る 
    public function index(Request $request){

        // この連想配列のキー部分を テンプレートで参照するので 使いたいデータはここのような連想配列を使おう。 例) data = ['msg' => 'こんにちは']; 
        
        return view('hello.index',['message' => 'Hello!']);
    }

    public function post(Request $request){

        return view('hello.index',['msg'=>$request->msg]);
    }

}

        


