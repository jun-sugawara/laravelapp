<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

    public function index() {
        $data = [
            ['name'=>"すがわらじゅん", "mail"=>"24karats@gmail.com"],
            ['name'=>"ソナムワンギャル", "mail"=>"sonum@gmail.com"],
            ['name'=>"なっちゃん", "mail"=>"natsumi@gmail.com"],
            ['name'=>"とおる", "mail"=>"toru@gmail.com"]
        ];
        return view('hello.index',['data'=>$data]);
    }

    public function post(Request $request){
        return view('hello.index', ['msg'=>$request->msg]);
    }
}