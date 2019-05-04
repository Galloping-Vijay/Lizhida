<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use http\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        //获取产品6个
        $product_list = DB::table('products')
            ->where('products.status', '=', '1')
            ->leftJoin('product_imges', 'product_imges.p_id', '=', 'products.id')
            ->groupBy('product_imges.p_id')
            ->orderBy('products.id', 'desc')
            ->take(6)
            ->select('products.id','products.title','product_imges.url')
            ->get();
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

    public function test(Request $request)
    {
        url()->current();
        dd(url()->previous(false));
    }
}
