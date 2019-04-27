<?php

namespace App\Http\Controllers\Home;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        return view('home.index.index');
    }

    public function about()
    {
        return view('home.index.about');
    }

    public function contact()
    {
        return view('home.index.contact');
    }

    public function test()
    {
        dd(111);
    }
}
