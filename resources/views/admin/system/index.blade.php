@extends('admin.public.layout')
@section('styles')
    <style>
        .layui-form-label{
            width: 150px;
        }
        .layui-form-item .layui-input-inline{
            width: 400px;
        }
    </style>
@stop

@section('content')
    <div id="apps" class="container">
        <form class="layui-form" action="" lay-filter="system-form">
            {{ csrf_field() }}
            @foreach ($list as $item)
                <div class="layui-form-item">
                    <label class="layui-form-label">{{$item->name}}</label>
                    @switch($item->type)
                        @case(1)
                        <div class="layui-input-inline">
                            <textarea placeholder="请输入{{$item->name}}" class="layui-textarea">
                                {{$item->values}}
                            </textarea>
                        </div>
                        @break
                        @case(2)
                        Second case2...
                        @break
                        @case(3)
                        Second case3...
                        @break
                        @case(4)

                            <div class="layui-upload">
                                <div class="layui-input-inline" style="width: 100px">
                                    <button type="button" class="layui-btn" id="up">上传图片</button>
                                </div>
                                <div class="layui-input-inline">
                                <div class="layui-upload-list" style="height: 80px">
                                    <img class="layui-upload-img" id="upimg" style="height: 100%" src="{{$item->values}}">
                                    <p id="demoText"></p>
                                    <input type="hidden" name="{{$item->keys}}" value="{{$item->values}}" id="logo_url" >
                                </div>
                                </div>
                            </div>

                        @break

                        @default
                        <div class="layui-input-inline">
                            <input type="text" name="{{$item->keys}}" lay-verify="{{$item->name}}" autocomplete="off" placeholder="请输入{{$item->name}}" class="layui-input" value="{{$item->values}}">
                        </div>
                    @endswitch
                </div>
            @endforeach
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit="" lay-filter="LAY-system-submit">立即提交</button>
                </div>
            </div>
        </form>
    </div>
@stop

@section('scripts')
    <script>
        $(function() {
            var vueObj = new Vue({
                el: '#apps',
                data: {
                    message:'德玛西亚'
                }
            });
        });
        layui.use(['form','upload'], function(){
            var form = layui.form;
            var $ = layui.jquery;
            var upload = layui.upload;

            var tag_token =$("input[name='_token']").val() ;
            //监听提交
            form.on('submit(LAY-system-submit)', function(obj){
                //layer.msg(JSON.stringify(obj.field));
                $.ajax({
                    url: '/admin/system/store'
                    , data: obj.field
                    , method: 'POST'
                    , done: function (res) {
                        if (res.code == 0) {
                            //登入成功的提示与跳转
                            layer.msg('操作成功');
                        } else {
                            layer.msg('操作失败');
                        }

                    }
                });
                return false;
            });

            //普通图片上传
            var uploadInst = upload.render({
                elem: '#up'
                ,url: '/update'
                , accept: 'images'
                , field: "file"
                ,type : 'images'
                , acceptMime: 'image/*'
                ,exts: 'jpg|png|gif' //设置一些后缀，用于演示前端验证和后端的验证
                , multiple: true
                ,data:{'_token':tag_token,dir:'logo'}
                ,before: function(obj){
                    //预读本地文件示例，不支持ie8
                    obj.preview(function(index, file, result){
                        $('#upimg').attr('src', result); //图片链接（base64）
                    });
                }
                ,done: function(res){
                    //如果上传失败
                    if(res.code > 0){
                        return layer.msg('上传失败');
                    }
                    //上传成功
                    $('#logo_url').val(res.data.file);
                }
                ,error: function(){
                    //演示失败状态，并实现重传
                    var demoText = $('#demoText');
                    demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
                    demoText.find('.demo-reload').on('click', function(){
                        uploadInst.upload();
                    });
                }
            });
        });
    </script>
@stop