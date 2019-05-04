@extends('admin.public.layout')

@section('content')
    <div id="apps" class="container">
        <table class="layui-hide" id="article" lay-filter="article"></table>
        {{ csrf_field() }}
        <script type="text/html" id="toolbarDemo">
            <div class="layui-btn-container">
                <button class="layui-btn layui-btn-sm" lay-event="add">添加系统文章</button>
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
            var filter = 'article';
            var layer =  layui.layer;
            table.render({
                elem: '#' + filter
                , url: '/admin/article'
                , toolbar: '#toolbarDemo'
                , method: 'post'
                , where: {'_token': tag_token}
                , cols: [[
                    {field: 'id', width: '10%', title: 'ID'}
                    , {field: 'title', width: '20%', title: '标题'}
                    /* ,{field:'email', title:'邮箱', width:150, edit: 'text', templet: function(res){
                             return '<em>'+ res.email +'</em>'
                         }}*/
                    , {field: 'subtitle', width: '20%', title: '副标题'}
                    , {field: 'author', width: '10%', title: '作者'}
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
                    if(data.id ===7){
                        layer.msg('关于我们只能修改,不能删除');
                        return false;
                    }else if(data.id ===8){
                        layer.msg('联系我们只能修改,不能删除');
                        return false;
                    }
                    layer.confirm('确定删除此文章？', function (index) {
                        $.ajax({
                            url: '/admin/article/destroy'
                            , data:{id:data.id,_token: tag_token}
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
                    location.href = '/admin/article/edit?id='+data.id;
                }
            });

            //工具栏事件
            table.on('toolbar(' + filter + ')', function (obj) {
                var checkStatus = table.checkStatus(obj.config.id);
                switch (obj.event) {
                    case 'add':
                        location.href = '/admin/article/create';
                        break;
                }
                ;
            });
        });
    </script>
@stop