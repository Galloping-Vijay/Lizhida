<?php

namespace App\Http\Controllers\Home;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $product_list = DB::table('products')
            ->where('products.status', '=', '1')
            ->leftJoin('product_imges', 'product_imges.p_id', '=', 'products.id')
            ->groupBy('product_imges.p_id')
            ->orderBy('products.id', 'desc')
            ->take(6)
            ->select('products.id', 'products.title', 'product_imges.url', 'products.price', 'products.o_price', 'products.total')
            ->get();
        return view('home.product.index', [
            'product_list' => $product_list
        ]);
    }

    public function show($id)
    {
        $info = Product::find($id);
        $img = Product::find($id)->imge;
        $images = [];
        foreach ($img as $val) {
            $images[] = $val->url;
        }
        $info->images = $images;
        return view('home.product.show', [
            'info' => $info
        ]);
    }
}
