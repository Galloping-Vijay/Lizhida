@extends('admin.public.layout')

@section('content')
    <div id="apps" class="container">
        <div class="layui-fluid">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">添加短标签</div>
                        <div class="layui-card-body" pad15>

                            <div class="layui-form" wid100 lay-filter="">
                                <div class="layui-form-item">
                                    <label class="layui-form-label">标题</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="title" value="" class="layui-input">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="type" value="2">
                                        <input type="hidden" name="author" value="励致达">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">略缩图</label>
                                    <div class="layui-input-block">
                                        <div class="layui-input-inline" style="width: 100px">
                                            <button type="button" class="layui-btn" id="up">上传图片</button>
                                        </div>
                                        <div class="layui-input-inline">
                                            <div class="layui-upload-list" style="height: 80px">
                                                <img class="layui-upload-img" id="upimg" style="height: 100%" src="">
                                                <p id="demoText"></p>
                                                <input type="hidden" name="image" value="" id="logo_url">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">内容</label>
                                    <div class="layui-input-block">
                                        <textarea name="description" class="layui-textarea"></textarea>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="set_news">确认保存</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        layui.use(['layedit', 'form', 'upload'], function () {
            var layedit = layui.layedit;
            var form = layui.form;
            var $ = layui.jquery;
            var upload = layui.upload;
            var tag_token = $("input[name='_token']").val();
            var layer = layui.layer;
            layedit.set({
                uploadImage: {
                    url: '/admin/article/create' //接口url
                    , type: 'post' //默认post
                }
            });
            var con = layedit.build('content'); //建立编辑器

            form.on('submit(set_news)', function (obj) {
                //layer.msg(JSON.stringify(obj.field));
                var content = layedit.getContent(con);
                var data = obj.field;
                data.content = content;
                $.ajax({
                    url: '/admin/tractate/store'
                    , data: obj.field
                    , method: 'POST'
                    , success: function (res) {
                        console.log(res);
                        if (res.code == 0) {
                            //登入成功的提示与跳转
                            layer.msg('操作成功');
                            location.href = '/admin/tractate/index';
                        } else {
                            layer.msg('操作失败');
                        }

                    }
                });
            });

            //普通图片上传
            var uploadInst = upload.render({
                elem: '#up'
                , url: '/update'
                , accept: 'images'
                , field: "file"
                , type: 'images'
                , acceptMime: 'image/*'
                , exts: 'jpg|png|gif' //设置一些后缀，用于演示前端验证和后端的验证
                , multiple: true
                , data: {'_token': tag_token, dir: 'news'}
                , before: function (obj) {
                    //预读本地文件示例，不支持ie8
                    obj.preview(function (index, file, result) {
                        $('#upimg').attr('src', result); //图片链接（base64）
                    });
                }
                , done: function (res) {
                    //如果上传失败
                    if (res.code > 0) {
                        return layer.msg('上传失败');
                    }
                    //上传成功
                    $('#logo_url').val(res.data.file);
                }
                , error: function () {
                    //演示失败状态，并实现重传
                    var demoText = $('#demoText');
                    demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
                    demoText.find('.demo-reload').on('click', function () {
                        uploadInst.upload();
                    });
                }
            });
        });
    </script>

@stop