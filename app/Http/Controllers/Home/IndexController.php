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
            ->select('products.id', 'products.title', 'product_imges.url', 'products.price', 'products.o_price', 'products.total')
            ->get();
        $news_list = DB::table('news')
            ->where('type', '=', 0)
            ->select('id', 'title', 'description', 'image')
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();
        $about = DB::table('news')->find(7);
        $contact = DB::table('news')->find(8);
        $development = DB::table('news')->find(14);
        $market = DB::table('news')->find(15);
        $service = DB::table('news')->find(16);
        $focus = DB::table('news')->find(17);
        $experience = DB::table('news')->find(18);
        $ability = DB::table('news')->find(19);
        $vision = DB::table('news')->find(20);
        return view('home.index.index', [
            'product_list' => $product_list,
            'news_list' => $news_list,
            'about' => $about,
            'contact' => $contact,
            'development' => $development,
            'market' => $market,
            'service' => $service,
            'focus' => $focus,
            'experience' => $experience,
            'ability' => $ability,
            'vision' => $vision,
        ]);
    }

    public function about()
    {
        $about = DB::table('news')->find(7);
        $focus = DB::table('news')->find(17);
        $experience = DB::table('news')->find(18);
        $ability = DB::table('news')->find(19);
        $vision = DB::table('news')->find(20);
        return view('home.index.about', [
            'info' => $about,
            'focus' => $focus,
            'experience' => $experience,
            'ability' => $ability,
            'vision' => $vision,
        ]);
    }

    public function contact()
    {
        $contact = DB::table('news')->find(8);
        return view('home.index.contact',
            [
                'info' => $contact
            ]);
    }

    public function map()
    {
        return view('home.index.map');
    }

    public function test(Request $request)
    {
        url()->current();
        dd(url()->previous(false));
    }
}
