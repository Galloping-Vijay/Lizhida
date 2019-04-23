<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return view('home.news.index');
    }

    public function show($id)
    {
        return view('home.news.show');
    }
}
