<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TractateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $page = $request->input('page', 1);
            $limit = $request->input('limit', 20);
            $fristRow = ($page - 1) * $limit;
            $where = ' type=2';
            $sql = "select * from news where $where order by `id` limit $fristRow,$limit";
            $conutSql = "select count(`id`) as num FROM news WHERE $where";
            $data = DB::select($sql);
            $count = DB::select($conutSql);
            $json = ['code' => 0, 'msg' => '操作成功', 'data' => $data, 'count' => $count[0]->num];
            return response()->json($json);
        }
        return view('admin.tractate.index', [

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $path = $request->file('file')->store('public/news');
            $data = ['code' => 0, 'msg' => '', 'data' => ['src' => str_replace("public", "/storage", $path)]];
            return response()->json($data);
        }
        return view('admin.tractate.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parem = $request->input();
        $model = new News();
        $model->title = $parem['title'];
        $model->description = $parem['description'];
        $model->image = empty($_SERVER['HTTPS']) ? 'http://' : 'https://' . $_SERVER["HTTP_HOST"] . $parem['image'];
        $model->type = $parem['type'] ?? 2;

        $res = $model->save();
        if ($res == true) {
            $data = ['code' => 0, 'msg' => '操作成功'];
        } else {
            $data = ['code' => 1, 'msg' => '操作失败'];
        }
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->input('id');
        $info = News::find($id);
        return view('admin.tractate.edit', ['info' => $info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $parem = $request->input();
        $info = News::find($parem['id']);
        $info->title = $parem['title'];
        $info->description = $parem['description'];
        if (strpos($parem['image'], 'http') !== false) {
            $info->image = $parem['image'];
        } else {
            $info->image = empty($_SERVER['HTTPS']) ? 'http://' : 'https://' . $_SERVER["HTTP_HOST"] . $parem['image'];
        }
        $info->type = $parem['type'] ?? 2;
        $res = $info->save();
        if ($res == true) {
            $data = ['code' => 0, 'msg' => '操作成功'];
        } else {
            $data = ['code' => 1, 'msg' => '操作失败'];
        }
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $info = News::find($id);
        $res = $info->delete();
        if ($res == true) {
            $data = ['code' => 0, 'msg' => '操作成功'];
        } else {
            $data = ['code' => 1, 'msg' => '操作失败'];
        }
        return response()->json($data);
    }
}
