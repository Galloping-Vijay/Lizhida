<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = [];
            $json = ['code' => 0, 'msg' => '操作成功', 'data' => $data];
            return response()->json($json);
        }
        return view('admin.news.index', [

        ]);
    }


    /* public function upload(Request $request){
         $data = $request->input();
         $data['file']=$request->file('file');
         $json = ['code' => 0, 'msg' => '操作成功', 'data' => $data];
         return response()->json($json);
     }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $path = $request->file('file')->store('public/news');
            // str_replace("/storage", "/public", $path)]
            //$data = ['code' => 0, 'msg' => '', 'data' => ['src' => $path]];
            $data = ['code' => 0, 'msg' => '', 'data' => ['src' => str_replace("public", "/storage", $path)]];
            return response()->json($data);
        }
        return view('admin.news.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}
