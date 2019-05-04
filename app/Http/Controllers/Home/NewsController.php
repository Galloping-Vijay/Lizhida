<?php

namespace App\Http\Controllers\Home;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news_list = DB::table('news')
            ->where('type', '=', 0)
            ->select('id', 'title', 'description', 'image')
            ->orderBy('id', 'desc')
            ->simplePaginate(15);
        return view('home.news.index',
            [
                'news_list' => $news_list,
            ]);
    }

    public function show($id)
    {
        $info = News::find($id);
        return view('home.news.show', [
            'info' => $info
        ]);
    }
}
