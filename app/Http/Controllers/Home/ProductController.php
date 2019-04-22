<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('home.product.index');
    }

    public function show($id)
    {
        return view('home.product.show');
    }
}