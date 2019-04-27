@extends('admin.public.layout')

@section('content')
    <div id="apps" class="container">
        <table class="layui-hide" id="test" lay-filter="test"></table>
        {{ csrf_field() }}
        <script type="text/html" id="toolbarDemo">
            <div class="layui-btn-container">
                <button class="layui-btn layui-btn-sm" lay-event="add">添加文章</button>
                <button class="layui-btn layui-btn-sm" lay-event="getCheckData">获取选中行数据</button>
                <button class="layui-btn layui-btn-sm" lay-event="getCheckLength">获取选中数目</button>
                <button class="layui-btn layui-btn-sm" lay-event="isAll">验证是否全选</button>
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
        layui.use(['table'], function(){
            var table = layui.table;
            var tag_token =$("input[name='_token']").val() ;
            table.render({
                elem: '#test'
                ,url:'/admin/news'
                ,toolbar: '#toolbarDemo'
                ,title: '用户数据表'
                ,totalRow: true
                ,method:'post'
                ,where: {'_token':tag_token}
                ,cols: [[
                   /* {type: 'checkbox', fixed: 'left'}*/
                    ,{field:'id', title:'ID', width:80, fixed: 'left', unresize: true, sort: true, totalRowText: '合计'}
                    ,{field:'title', title:'标题'}
                   /* ,{field:'email', title:'邮箱', width:150, edit: 'text', templet: function(res){
                            return '<em>'+ res.email +'</em>'
                        }}*/
                    ,{field:'subtitle', title:'副标题'}
                    ,{field:'author', title:'作者'}
                    ,{field:'created_at', title:'创建时间'}
                    ,{fixed: 'right', title:'操作', toolbar: '#barDemo', width:150}
                ]]
                ,page: true
            });

            //工具栏事件
            table.on('toolbar(test)', function(obj){
                var checkStatus = table.checkStatus(obj.config.id);
                switch(obj.event){
                    case 'add':
                       location.href = '/admin/news/create';
                        break;
                    case 'getCheckData':
                        var data = checkStatus.data;
                        layer.alert(JSON.stringify(data));
                        break;
                    case 'getCheckLength':
                        var data = checkStatus.data;
                        layer.msg('选中了：'+ data.length + ' 个');
                        break;
                    case 'isAll':
                        layer.msg(checkStatus.isAll ? '全选': '未全选')
                        break;
                };
            });
        });
    </script>
@stop