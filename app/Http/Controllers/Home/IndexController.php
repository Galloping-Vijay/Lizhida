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
        $data = [
            ['name' => '站点名称', 'keys' => 'site_name'],
            ['name' => '站点网址', 'keys' => 'site_host'],
            ['name' => '网站LOGO', 'keys' => 'site_logo'],
            ['name' => '备案信息', 'keys' => 'site_icp'],
            ['name' => '版权信息', 'keys' => 'site_copyright'],
            ['name' => '公司名称', 'keys' => 'site_co_name'],
            ['name' => '公司地址', 'keys' => 'site_address'],
            ['name' => '地图lat', 'keys' => 'map_lat'],
            ['name' => '地图lng', 'keys' => 'map_lng'],
            ['name' => '联系电话', 'keys' => 'tel'],
            ['name' => '站长邮箱', 'keys' => 'email'],
            ['name' => '站长QQ', 'keys' => 'qq'],
            ['name' => '微信', 'keys' => 'wechat'],
            ['name' => 'SEO标题', 'keys' => 'site_seo_title'],
            ['name' => 'SEO关键字', 'keys' => 'site_seo_keywords'],
            ['name' => 'SEO描述', 'keys' => 'site_seo_description'],
        ];
        DB::table('settings')->insert($data);
    }
}
