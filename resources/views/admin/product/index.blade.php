@extends('admin.public.layout')

@section('content')
    <div id="apps" class="container">
        <table class="layui-hide" id="product" lay-filter="product"></table>
        {{ csrf_field() }}
        <script type="text/html" id="toolbarDemo">
            <div class="layui-btn-container">
                <button class="layui-btn layui-btn-sm" lay-event="add">添加商品</button>
            </div>
        </script>
        <script type="text/html" id="barDemo">
            <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
            <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
        </script>
    </div>
@stop

@section('scripts')
    <script>
        layui.use(['table'], function () {
            var table = layui.table;
            var tag_token = $("input[name='_token']").val();
            var filter = 'product';
            var layer =  layui.layer;
            table.render({
                elem: '#' + filter
                , url: '/admin/product'
                , toolbar: '#toolbarDemo'
                , method: 'post'
                , where: {'_token': tag_token}
                , cols: [[
                    {field: 'id', width: '5%', title: 'ID'}
                    , {field: 'title', width: '10%', title: '标题'}
                    /* ,{field:'email', title:'邮箱', width:150, edit: 'text', templet: function(res){
                             return '<em>'+ res.email +'</em>'
                         }}*/
                    , {field: 'sub_title', width: '15%', title: '副标题'}
                    , {field: 'price', width: '10%', title: '售价'}
                    , {field: 'o_price', width: '10%', title: '原价'}
                    , {field: 'total', width: '8%', title: '库存'}
                    , {field: 'sales', width: '8%', title: '销量'}
                    , {field: 'status', width: '10%', title: '状态' ,templet: function(res){
                        if(res.status == 1 ){
                            return '<input type="checkbox" name="status" value="res.status" lay-skin="switch" lay-text="ON|OFF" lay-filter="statusDemo" checked>';
                        }else{
                            return '<input type="checkbox" name="status" value="res.status" lay-skin="switch" lay-text="ON|OFF" lay-filter="statusDemo" >';
                        }
                    }}
                    , {field: 'created_at', width: '12%', title: '创建时间'}
                    , {title: '操作', width: '12%', toolbar: '#barDemo'}
                ]]
                , limit: 20
                , page: true
                , done: function(res, curr, count){

                }
            });

            //监听工具条
            table.on('tool(' + filter + ')', function (obj) {
                var data = obj.data;
                if (obj.event === 'del') {
                    layer.confirm('确定删除此包厢？', function (index) {
                        $.ajax({
                            url: '/admin/product/destroy'
                            , data:{id:data.id,_token: tag_token}
                            , method: 'POST'
                            , success: function (res) {
                                if (res.code == 0) {
                                    //登入成功的提示与跳转
                                    layer.msg(res.msg);
                                    obj.del();
                                    layer.close(index);
                                } else {
                                    layer.msg(res.msg);
                                    layer.close(index);
                                }

                            }
                        });

                    });
                } else if (obj.event === 'edit') {
                    location.href = '/admin/product/edit?id='+data.id;
                }
            });

            //工具栏事件
            table.on('toolbar(' + filter + ')', function (obj) {
                var checkStatus = table.checkStatus(obj.config.id);
                switch (obj.event) {
                    case 'add':
                        location.href = '/admin/product/create';
                        break;
                }
                ;
            });
        });
    </script>
@stop