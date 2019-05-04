@extends('admin.public.layout')

@section('styles')
    <style>
        

        .layui-table-cell{
            height: 80px !important;
        }
    </style>
@endsection

@section('content')
    <div id="apps" class="container">
        <table class="layui-hide" id="tractate" lay-filter="tractate"></table>
        {{ csrf_field() }}
        <script type="text/html" id="toolbarDemo">
            <div class="layui-btn-container">
                <button class="layui-btn layui-btn-sm" lay-event="add">添加短标签</button>
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
            var filter = 'tractate';
            var layer = layui.layer;
            table.render({
                elem: '#' + filter
                , url: '/admin/tractate'
                , toolbar: '#toolbarDemo'
                , method: 'post'
                , where: {'_token': tag_token}
                , cols: [[
                    {field: 'id', width: '10%', title: 'ID'}
                    , {field: 'title', width: '20%', title: '标题'}
                    , {
                        field: 'image', title: '略缩图', width: '10%', style: "height:100px;", templet: function (res) {
                            return '<img  class="icon" src="' + res.image + '" height="80" width="80">'
                        }
                    }
                    , {field: 'description', width: '20%', title: '内容'}
                    , {field: 'created_at', width: '20%', title: '创建时间'}
                    , {title: '操作', width: '20%', toolbar: '#barDemo'}
                ]]
                , limit: 20
                , page: true
            });

            //监听工具条
            table.on('tool(' + filter + ')', function (obj) {
                var data = obj.data;
                if (obj.event === 'del') {
                    if (data.id === 7) {
                        layer.msg('关于我们只能修改,不能删除');
                        return false;
                    } else if (data.id === 8) {
                        layer.msg('联系我们只能修改,不能删除');
                        return false;
                    }
                    layer.confirm('确定删除此文章？', function (index) {
                        $.ajax({
                            url: '/admin/tractate/destroy'
                            , data: {id: data.id, _token: tag_token}
                            , method: 'POST'
                            , success: function (res) {
                                if (res.code == 0) {
                                    //登入成功的提示与跳转
                                    layer.msg('操作成功');
                                    obj.del();
                                    layer.close(index);
                                } else {
                                    layer.msg('操作失败');
                                    layer.close(index);
                                }

                            }
                        });

                    });
                } else if (obj.event === 'edit') {
                    location.href = '/admin/tractate/edit?id=' + data.id;
                }
            });

            //工具栏事件
            table.on('toolbar(' + filter + ')', function (obj) {
                var checkStatus = table.checkStatus(obj.config.id);
                switch (obj.event) {
                    case 'add':
                        location.href = '/admin/tractate/create';
                        break;
                }
                ;
            });
        });
    </script>
@stop