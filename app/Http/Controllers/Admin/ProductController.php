<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\ProductImge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     * Description:
     * User: VIjay
     * Date: 2019/4/29
     * Time: 20:11
     */
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $page = $request->input('page', 1);
            $limit = $request->input('limit', 20);
            $fristRow = ($page - 1) * $limit;
            $sql = "select * from products order by id limit $fristRow,$limit";
            $conutSql = "select count(`id`) as num FROM products";
            $data = DB::select($sql);
            $count = DB::select($conutSql);
            $json = ['code' => 0, 'msg' => '操作成功', 'data' => $data, 'count' => $count[0]->num];
            return response()->json($json);
        }
        return view('admin.product.index', [

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
            $path = $request->file('file')->store('public/product');
            $data = ['code' => 0, 'msg' => '', 'data' => ['src' => str_replace("public", "/storage", $path)]];
            return response()->json($data);
        }
        return view('admin.product.create', []);
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

        DB::beginTransaction();
        $model = new Product();
        $model->title = $parem['title'];
        $model->sub_title = $parem['sub_title'];
        $model->price = $parem['price'];
        $model->o_price = $parem['o_price'];
        $model->total = $parem['total'];
        $model->sales = $parem['sales'];
        $model->status = empty($parem['status']) ? 1 : 0;
        $model->good_sn = Product::setGoodSn();
        $model->description = $parem['description'];
        $model->content = $parem['content'];
        $model->created_at = date('Y-m-d H:i:s', time());
        $res = $model->save();
        if ($res == true) {
            if (!empty($parem['image'])) {
                $imgData = [];
                foreach ($parem['image'] as $ksy => $val) {
                    $imgData[] = [
                        'p_id' => $model->id,
                        'title' => $parem['title'],
                        'url' => empty($_SERVER['HTTPS']) ? 'http://' . $_SERVER["HTTP_HOST"] . $val : 'https://' . $_SERVER["HTTP_HOST"] . $val
                        , 'created_at' => date('Y-m-d H:i:s', time())
                    ];
                }
                if (!empty($imgData)) {
                    $resImg = DB::table('product_imges')->insert($imgData);
                    if ($resImg === false) {
                        DB::rollBack();
                        $data = ['code' => 1, 'msg' => '操作失败'];
                        return response()->json($data);
                    }
                }
            }
            DB::commit();
            $data = ['code' => 0, 'msg' => '操作成功'];
        } else {
            DB::rollBack();
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
        $info = Product::find($id);
        $imgs = DB::select("select title,url from product_imges where p_id=$id");
        return view('admin.product.edit', ['info' => $info, 'imgs' => $imgs]);
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

        DB::beginTransaction();
        $info = Product::find($parem['id']);
        $info->title = $parem['title'];
        $info->sub_title = $parem['sub_title'];
        $info->price = $parem['price'];
        $info->o_price = $parem['o_price'];
        $info->total = $parem['total'];
        $info->sales = $parem['sales'];
        $info->status = empty($parem['status']) ? 1 : 0;
        $info->description = $parem['description'];
        $info->content = $parem['content'];
        $info->status = $parem['status']??$info->status;
        $info->updated_at = date('Y-m-d H:i:s', time());
        $res = $info->save();
        if ($res == true) {
            if (!empty($parem['image'])) {
                $imgData = [];
                DB::table('product_imges')->where('p_id', $parem['id'])->delete();
                foreach ($parem['image'] as $ksy => $val) {
                    $imgData[] = [
                        'p_id' => $parem['id'],
                        'title' => $parem['title'],
                        'url' => empty($_SERVER['HTTPS']) ? 'http://' . $_SERVER["HTTP_HOST"] . $val : 'https://' . $_SERVER["HTTP_HOST"] . $val
                        , 'created_at' => date('Y-m-d H:i:s', time())
                    ];
                }
                if (!empty($imgData)) {
                    $resImg = DB::table('product_imges')->insert($imgData);
                    if ($resImg === false) {
                        DB::rollBack();
                        $data = ['code' => 1, 'msg' => '操作失败'];
                        return response()->json($data);
                    }
                }
            }
            DB::commit();
            $data = ['code' => 0, 'msg' => '操作成功'];
        } else {
            DB::rollBack();
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
        $info = Product::find($id);
        $res = $info->delete();
        if ($res == true) {
            DB::table('product_imges')->where('p_id', $id)->delete();
            $data = ['code' => 0, 'msg' => '操作成功'];
        } else {
            $data = ['code' => 1, 'msg' => '操作失败'];
        }
        return response()->json($data);
    }
}
