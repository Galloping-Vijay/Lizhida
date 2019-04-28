<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    /**
     * Instructions:
     * Author: Vijay  <1937832819@qq.com>
     * Time: 2019/4/27 9:25
     * @param Request $request
     * @return false|string
     */
    public function update(Request $request)
    {
        $dir = $request->input('dir');
        $path = $request->file('file')->store('public/' . $dir);
        $data = ['code' => 0, 'msg' => '', 'data' => ['file' => str_replace("public", "/storage", $path)]];
        return response()->json($data);
    }
}
