<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//練習1-8
class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

}
