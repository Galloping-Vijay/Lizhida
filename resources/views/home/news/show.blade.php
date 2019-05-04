@extends('layouts.app')

@section('title', '励致达')

@section('head')
    @parent
@show

@section('style')
    <style id="stylemodule" type="text/css">
        #module111221 {
            width: 200px;
        }

        #module111221 {
            z-index: 502;
        }

        #module111221 .formBanner111221 {
            display: none;
        }

        #module111215 {
            z-index: 501;
        }

        #modulenav228a00001 .itemSelected .itemName0 {
            color: rgba(57, 57, 160, 1);
        }

        #modulenav228a00001 .itemHover .itemName0 {
            color: rgba(57, 57, 160, 1);
        }

        #modulenav228a00001 .itemName0 {
            font-size: 16px;
        }

        #modulenav228a00001 .mainnav {
            height: 80px;
        }

        #modulenav228a00001 .navCenterContent {
            height: 80px;
        }

        #modulenav228a00001 .navCenter {
            height: 80px;
        }

        #modulenav228a00001 .itemContainer {
            height: 80px;
        }

        #modulenav228a00001 {
            height: px;
        }

        #modulenav228a00001 .navCenter a {
            line-height: 80px;
        }

        #webBannerbk {
            height: 80px;
        }

        #logo_picture img {
            width: 100%;
        }

        #logo_picture img {
            height: 100%;
        }

        #logo_picture {
            width: 115.26829268292683px;
        }

        #logo_picture {
            height: 34px;
        }

        #navigationBox1181 {
            width: 1000px;
        }

        #modulenav228a00001 {
            width: 0px;
        }

        #modulenav228a00001 .navContent {
            width: 0px;
        }

        #modulenav228a00001 .navCenter {
            width: 0;
        }

        #logo_picture {
            left: 0px;
        }

        #logo_picture {
            position: absolute;
        }

        #webFooterbk {
            background: rgba(57, 57, 160, 1);
        }

        #webFooterbk #design_foot {
            font-family: 微软雅黑;
        }

        #webFooterbk #design_foot {
            font-size: 14px;
        }

        #webFooterbk #design_foot {
            color: rgba(255, 255, 255, 1);
        }

        #webFooterbk #design_foot a {
            font-family: 微软雅黑;
        }

        #webFooterbk #design_foot a {
            font-size: 14px;
        }

        #webFooterbk #design_foot a {
            color: rgba(255, 255, 255, 1);
        }

        #webFooterbk #design_foot a:hover {
            color: rgba(255, 255, 255, 1);
        }

        #webFooterbk #design_foot {
            padding-top: 200px;
        }

        #webFooterbk #design_foot {
            padding-bottom: 0px;
        }

        #webFooterbk #design_foot {
            padding-left: 0px;
        }

        #webFooterbk #design_foot {
            padding-right: 0px;
        }

        #module111215 .formBanner111215 {
            display: none;
        }

        #module111215 {
            width: 233px;
        }

        #module111215 .formMiddle111215 {
            background: none;
        }

        #module111215 .formMiddle111215 .formMiddleCenter111215 {
            background: none;
        }

        #module111215 .formMiddleContent111215 {
            background: none;
        }

        #modulenav228a00001 {
            left: 430px;
        }

        #modulenav228a00001 {
            top: -79px;
        }

        #multilanguage {
            left: 984px;
        }

        #multilanguage {
            position: absolute;
        }

        #multilanguage {
            top: 22px;
        }

        #undefined {
            height: 300px;
        }

        #row82039 {
            background-repeat: no-repeat;
        }

        #row82039 {
            background-position: center top;
        }

        #row82039 {
            background-image: url(http://image.fast.126net.cn/group2/M00/01/88/wKgADlujcIeAEj2mAAJvf1GlwXo617.jpg);
        }

        #row82039 {
            height: 434px;
        }
    </style>

@endsection

@section('nav')
    @parent

@endsection

@section('content')
    <div id="demoMain">
        <div class="lyrow"><div class="view"><div class="row-fluid-1 clearfix" id="row82039">
                    <div class="span12">
                    </div>
                    <div class="float_div_class">
                    </div>
                </div></div></div>
        <div class="lyrow"><div class="view"><div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row63496" _heightstatus="2">
                    <div class="span12">

                        <div id="module55415" class="form form55415  content_mc jrf-content" iscontent="1" contenttplid="50865">
                            <!-- 文章内容 -->
                            <!-- if begin -->
                            <input id="contentId" type="hidden" value="55415">




                            <!-- if end -->
                            <div class="Containernews">

                                <div class="title_div">
                                    <h2 class="top_name full_title">{{ $info->title }}</h2>
                                    <h2 class="top_name short_title"></h2>
                                </div>
                                <div class="artInfo">
                                    <span class="author"></span>
                                    <span class="origin"></span>
                                    <span class="releaseDate">{{ $info->created_at }}</span>
                                    <span class="views_num">浏览量：99+</span>
                                </div>

                                <div id="artiContent" class="news_con da_detail">
                                    {!! $info->content !!}

                                </div>

                                <!-- 判断是否开启评论 站点是否有评论功能 栏目是否开启评论  -->



                                <!-- relationContents   -->
                                <!-- relationContents   -->

                            </div>


                        </div>    </div>
                </div></div></div>
    </div>
@endsection

@section('footer')
    @parent

@endsection