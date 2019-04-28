<?php
/**
 * Description:
 * Created by PhpStorm.
 * User: VIjay
 * Date: 2019/4/28
 * Time: 23:39
 */

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Setting;

class BaseController extends Controller
{
    protected $assign = [];

    public function __construct()
    {
        $setting = Setting::all(['keys', 'values']);
        foreach ($setting->toArray() as $val) {
            $this->assign[$val['keys']] = $val['values'];
        }
    }
}