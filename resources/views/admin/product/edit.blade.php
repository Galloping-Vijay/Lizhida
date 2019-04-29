@extends('admin.public.layout')
@section('styles')
    <style>
        .layui-upload-img {
            width: 80px;
        }
        .close-img{
            position: relative;
            left: 80px;
            top: -25px;
            color: white;
            background-color: brown;
            border-radius: 15px;
            cursor:pointer
        }
    </style>
@stop
@section('content')
    <div id="apps" class="container">
        <div class="layui-fluid">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">
                            <span>编辑商品</span>
                            <span  style="float: right">
                                <a href="/admin/product/index" class="layui-btn layui-btn-radius layui-btn-normal layui-btn-sm"> 返回列表</a>
                            </span>
                        </div>
                        <div class="layui-card-body" pad15>

                            <div class="layui-form" wid100 lay-filter="">
                                <div class="layui-form-item">
                                    <label class="layui-form-label">标题</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="title" value="{{$info->title}}" class="layui-input">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{$info->id}}">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">副标题</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="sub_title" class="layui-input"
                                               value="{{$info->sub_title}}">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">售价</label>
                                    <div class="layui-input-block">
                                        <input type="text" value="{{$info->price}}" name="price" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">原价</label>
                                    <div class="layui-input-block">
                                        <input type="text" value="{{$info->o_price}}" name="o_price"
                                               class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">库存</label>
                                    <div class="layui-input-block">
                                        <input type="number" value="{{$info->total}}" name="total" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">销量</label>
                                    <div class="layui-input-block">
                                        <input type="number" value="{{$info->sales}}" name="sales" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">轮播图</label>
                                    <div class="layui-input-block">
                                        <div class="layui-upload">
                                            <button type="button" class="layui-btn" id="up">上传</button>
                                            <blockquote class="layui-elem-quote layui-quote-nm"
                                                        style="margin-top: 10px;height: 150px">
                                                预览图：
                                                <div class="layui-upload-list" id="upimg">
                                                    @foreach ($imgs as $img)
                                                        <span onclick="del(this)">
                                                            <i class="layui-icon layui-icon-close close-img"></i>
                                                            <img src="{{ $img->url }}" alt="{{ $img->title }}" class="layui-upload-img">
                                                        <input type="hidden" name="image[]" value="{{ $img->url }}">
                                                        </span>
                                                    @endforeach
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">简介</label>
                                    <div class="layui-input-block">
                                        <textarea name="description"
                                                  class="layui-textarea">{{$info->description}}</textarea>
                                    </div>
                                </div>
                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">内容</label>
                                    <div class="layui-input-block">
                                        <textarea name="content" id="content"
                                                  style="display: none;">{{$info->content}}</textarea>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">开启</label>
                                    <div class="layui-input-block">
                                        @if ($info->status === 1)
                                            <input type="checkbox" checked="" name="switch" lay-skin="switch"
                                                   lay-filter="switch" lay-text="ON|OFF">

                                        @else
                                            <input type="checkbox" name="switch" lay-skin="switch"
                                                   lay-filter="switch" lay-text="ON|OFF">
                                        @endif
                                        <input type="hidden" name="status" value="{{$info->status}}">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <button class="layui-btn" lay-submit lay-filter="set_product">确认保存</button>
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
                    url: '/admin/product/create' //接口url
                    , type: 'post' //默认post
                }
            });
            var con = layedit.build('content'); //建立编辑器

            form.on('submit(set_product)', function (obj) {
                //layer.msg(JSON.stringify(obj.field));
                var content = layedit.getContent(con);
                var data = obj.field;
                data.content = content;
                $.ajax({
                    url: '/admin/product/update'
                    , data: data
                    , method: 'POST'
                    , success: function (res) {
                        console.log(res);
                        if (res.code == 0) {
                            //登入成功的提示与跳转
                            layer.msg('操作成功');
                            location.href = '/admin/product/index';
                        } else {
                            layer.msg('操作失败');
                        }

                    }
                });
            });

            form.on('switch(switch)', function (data) {
                if (data.elem.checked) {
                    $("input[name='status']").val(1);
                } else {
                    $("input[name='status']").val(0);
                }
            });

            //多图片上传
            upload.render({
                elem: '#up'
                , url: '/update'
                , accept: 'images'
                , field: "file"
                , type: 'images'
                , acceptMime: 'image/*'
                , exts: 'jpg|png|gif' //设置一些后缀，用于演示前端验证和后端的验证
                , data: {'_token': tag_token, dir: 'product'}
                , multiple: true
                , before: function (obj) {
                }
                , done: function (res) {
                    //上传完毕
                    //如果上传失败
                    //如果上传失败
                    if (res.code > 0) {
                        return layer.msg('上传失败');
                    }
                    var html = '<span onclick="del(this)">';
                    html +='<i class="layui-icon layui-icon-close close-img"></i>  ';
                    html += '<input type="hidden" name="image[]" value="' + res.data.file + '">';
                    html += '<img src="' + res.data.file + '" alt="" class="layui-upload-img">';
                    html += '</span>';
                    //上传成功
                    $('#upimg').prepend(html);
                }
            });
        });
        function del(obj) {
            $(obj).remove();
        }
    </script>
@stop