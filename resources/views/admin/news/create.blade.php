@extends('admin.public.layout')

@section('content')
    <div id="apps" class="container">
<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">添加文章</div>
                <div class="layui-card-body" pad15>

                    <div class="layui-form" wid100 lay-filter="">
                        <div class="layui-form-item">
                            <label class="layui-form-label">文章标题</label>
                            <div class="layui-input-block">
                                <input type="text" name="title" value="" class="layui-input">
                                {{ csrf_field() }}
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">副标题</label>
                            <div class="layui-input-block">
                                <input type="text" name="subtitle" lay-verify="url" value="http://www.layui.com" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">略缩图</label>
                            <div class="layui-input-block">
                                <img src="" alt="">
                                <input type="hidden" name="image" value="">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">简介</label>
                            <div class="layui-input-block">
                                <textarea name="description" class="layui-textarea"></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">内容</label>
                            <div class="layui-input-block">
                                <textarea name="content" id="content" style="display: none;"></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="set_website">确认保存</button>
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
        var tag_token =$("input[name='_token']").val() ;
        layui.use(['layedit'], function(){
            var layedit = layui.layedit;
            var tag_token =$("input[name='_token']").val() ;
            layedit.set({
                uploadImage: {
                    url: '/admin/news/create' //接口url
                    ,type: 'post' //默认post
                }
            });
            layedit.build('content'); //建立编辑器
        });
    </script>

@stop