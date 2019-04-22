<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('home.index.index');
    }

    public function about(){
        return view('home.index.about');
    }

    public function contact(){
        return view('home.index.contact');
    }
}
