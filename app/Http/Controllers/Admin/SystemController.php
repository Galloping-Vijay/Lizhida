<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SystemController extends Controller
{
    /**
     * Instructions:
     * Author: Vijay  <1937832819@qq.com>
     * Time: 2019/4/27 11:13
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = Setting::all();
        return view('admin.system.index', [
            'list' => $data
        ]);
    }

    /**
     * Instructions:
     * Author: Vijay  <1937832819@qq.com>
     * Time: 2019/4/27 11:13
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $data = $request->input();
        DB::beginTransaction();
        foreach ($data as $k => $v) {
            if (empty($v)) continue;
            $info = Setting::where('keys', $k)->first();
            if (empty($info)) {
                continue;
            }
            $info->values = $v;
            $info->save();
            $info = null;
        }
        DB::commit();
        $json = ['code' => 0, 'msg' => '操作成功', 'data' => $data];
        return response()->json($json);
    }
}
