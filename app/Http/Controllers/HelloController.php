<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//練習3-4

class HelloController extends Controller
{
    public function index($name='Everybody')
    {
        $data=['name'=>$name];
        return view('hello.index',$data);
    }

}
