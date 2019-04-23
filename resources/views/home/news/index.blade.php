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

        #module111236 .formMiddleContent111236 {
            background: none;
        }

        #module111236 .formMiddle111236 .formMiddleCenter111236 {
            background: none;
        }

        #module111236 .formMiddle111236 {
            background: none;
        }

        #module111236 .formBanner111236 {
            display: none;
        }

        #module111234 {
            width: 1901px;
        }

        #module111234 .formBanner111234 {
            display: none;
        }

        #module111239 .formBanner111239 {
            display: none;
        }

        #module111239 .formMiddle111239 {
            padding-right: 0px;
        }

        #module111239 .formMiddle111239 {
            padding-left: 0px;
        }

        #module111239 .formMiddle111239 {
            padding-top: 30px;
        }

        #module111239 .formMiddle111239 {
            padding-bottom: 0px;
        }

        #module111239 {
            margin-right: 0px;
        }

        #module111239 {
            margin-left: 0px;
        }

        #module111239 {
            margin-top: 0px;
        }

        #module111239 {
            margin-bottom: 0px;
        }

        #module111239 {
            padding-right: 0px;
        }

        #module111239 {
            padding-left: 0px;
        }

        #module111239 {
            padding-top: 0px;
        }

        #module111239 {
            padding-bottom: 0px;
        }

        #module111236 {
            background: rgba(0, 0, 0, 0) url(/home/static/images/wKgBS1s7b3-AJO1dAAAKHnkQSw4566.png) no-repeat center center;
        }

        #module111236 .formMiddle111236 {
            padding-right: 0px;
        }

        #module111236 .formMiddle111236 {
            padding-left: 0px;
        }

        #module111236 .formMiddle111236 {
            padding-top: 50px;
        }

        #module111236 .formMiddle111236 {
            padding-bottom: 10px;
        }

        #module111239 .m_total_list b strong {
            color: rgba(57, 57, 160, 1);
        }

        #module111239 .m_total_list em {
            background: rgba(57, 57, 160, 1);
        }

        #module111239 .m_total_list em {
            border-color: rgba(57, 57, 160, 1);
        }

        #module111239 .m_total_list span a:hover {
            color: rgba(57, 57, 160, 1);
        }

        #module111239 .m_total_list span a:hover {
            border-color: rgba(57, 57, 160, 1);
        }

        #module111239 .m_total_list i a:hover {
            color: rgba(57, 57, 160, 1);
        }

        #module111239 .m_total_list i:hover {
            color: rgba(57, 57, 160, 1);
        }

        #module111239 .m_total_list i:hover {
            border-color: rgba(57, 57, 160, 1);
        }
    </style>
@endsection

@section('nav')
    @parent

@endsection

@section('content')
    <div id="demoMain">
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid-1 ui-resizable-disabled ui-state-disabled clearfix" id="row15112"
                     _heightstatus="2">
                    <div class="span12">
                        <div id="module111234" style="" class="form pic_module form111234 modulePattern0">
                            <div style="box-sizing:border-box;">

                                <div class="formMiddle formMiddle111234  hover_style00">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="/home/static/images/wKgBTFrgyPeACTbZAAJvf1GlwXo021.jpg"
                                                 id="111234preImg1" height="400" width="1920">


                                        </a>
                                        <form id="jvForm111234" action="" labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111234">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="1">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="1920"
                                                   id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="400"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value="/home/static/images/wKgBTFrgyPeACTbZAAJvf1GlwXo021.jpg"
                                                   id="uploadImgPath111234">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111234" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111234" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111234" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111234" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111234" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111234" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111234" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111234" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111234" value="1">
                            </form>

                        </div>
                    </div>
                    <div class="float_div_class">
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row80083" _heightstatus="2">
                    <div class="span12">
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row15255" _heightstatus="2">
                    <div class="span12">
                        <div id="module111236" class="form text_list form111236 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111236" type="text/css">
                                    #module111236.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111236.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111236">
                                    <div class="formBannerTitle formBannerTitle111236">
                                        <div id="bigg" class="titleText titleText111236" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111236">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111236" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($('#111236-moduleLayer .operate-inner'));">
                                        <div style="text-align: center;"><span
                                                    style="color: rgb(57, 57, 160); font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-size: 27px; text-align: center;">新闻资讯</span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111236" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111236" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111236" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111236" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111236" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111236" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111236" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111236" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111236" value="1">
                            </form>
                        </div>
                        <!-- 文章列表 图+摘要+标题 -->
                        <div id="module111239" style="" class="form contenttext form111239 modulePattern0">
                            <div>
                                <style id="styleModuleTest111239" type="text/css">
                                    #module111239.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111239.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111239">
                                    <div class="formBannerTitle formBannerTitle111239">
                                        <div id="bigg" class="titleText titleText111239" channelname="0">
                                            <div class="title_zcont">
                                                文章列表
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111239">

                                        </div>
                                    </div>
                                </div>
                                <ul class="formMiddle formMiddle111239 list_style109">
                                    <li>
                                        <div class="formMiddleContent  formMiddleContent111239 contentLine">
                                            <div class="style03_bot">
                                                <a href="/news/show/1" class="style03_botl"
                                                   title="箱体式低噪音发电机参数" target="_blank">

                                                    <img src="/home/static/images/wKgBTFrgyFqARJPXAABbXyQljEM136.jpg">
                                                </a>
                                            </div>
                                            <div class="c-listcontent">
                                                <div class="style03_botr">


                                                    <!-- 头条推荐 -->
                                                    <!-- 显示分类 -->
                                                    <a class="list_title" href="/news/show/1"
                                                       title="箱体式低噪音发电机参数" target="_blank">

                                                        <!-- 任燕龙修改 2016年12月20日18:22:03  由于 文章列表，常规选项中简短标题设置为不使用  结果：文章列表依旧显示简短标题-->
                                                        <span style="">
箱体式低噪音发电机参数	 </span>
                                                    </a>

                                                    <div class="content_text form_lineheight">

                                                        箱体式低噪音发电机参数 我厂所销售出产品实行联保。应用外接充电器给电池充电，负责为所有的公司用户提供...
                                                    </div>
                                                    <!-- 后面左边显示日期 -->

                                                    <!-- 后面右边显示日期 -->


                                                </div>
                                                <a class="c-more" href="/news/show/1" target="_blank">more
                                                    <i class="c-arrowleft">&gt;</i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="formMiddleContent  formMiddleContent111239 contentLine">
                                            <div class="style03_bot">
                                                <a href="/news/show/1" class="style03_botl"
                                                   title="体积小20KW汽油发电机使用" target="_blank">

                                                    <img src="/home/static/images/wKgBTFrgyGOAHJGFAABVSJM6IPY222.jpg">
                                                </a>
                                            </div>
                                            <div class="c-listcontent">
                                                <div class="style03_botr">


                                                    <!-- 头条推荐 -->
                                                    <!-- 显示分类 -->
                                                    <a class="list_title" href="/news/show/1"
                                                       title="体积小20KW汽油发电机使用" target="_blank">

                                                        <!-- 任燕龙修改 2016年12月20日18:22:03  由于 文章列表，常规选项中简短标题设置为不使用  结果：文章列表依旧显示简短标题-->
                                                        <span style="">
体积小20KW汽油发电机使用	 </span>
                                                    </a>

                                                    <div class="content_text form_lineheight">

                                                        它的特点是在原机械控制循环喷油量和喷油正时原理的基础上，改进更新机构功能，用线位移或角位移的电磁液压...
                                                    </div>
                                                    <!-- 后面左边显示日期 -->

                                                    <!-- 后面右边显示日期 -->


                                                </div>
                                                <a class="c-more" href="/news/show/1" target="_blank">more
                                                    <i class="c-arrowleft">&gt;</i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="formMiddleContent  formMiddleContent111239 contentLine">
                                            <div class="style03_bot">
                                                <a href="/news/show/1" class="style03_botl"
                                                   title="2018上海国际橡胶工业展览会" target="_blank">

                                                    <img src="/home/static/images/wKgBS1rgyKGAIWhnAABhC1q4bcQ765.jpg">
                                                </a>
                                            </div>
                                            <div class="c-listcontent">
                                                <div class="style03_botr">


                                                    <!-- 头条推荐 -->
                                                    <!-- 显示分类 -->
                                                    <a class="list_title" href="/news/show/1"
                                                       title="2018上海国际橡胶工业展览会" target="_blank">

                                                        <!-- 任燕龙修改 2016年12月20日18:22:03  由于 文章列表，常规选项中简短标题设置为不使用  结果：文章列表依旧显示简短标题-->
                                                        <span style="">
2018上海国际橡胶工业展览会	 </span>
                                                    </a>

                                                    <div class="content_text form_lineheight">

                                                        2018上海（国际）塑料橡胶工业展览会 ShanghaiInternationalPlastic&amp;RubberIndustryExhibition2018
                                                        时间：...
                                                    </div>
                                                    <!-- 后面左边显示日期 -->

                                                    <!-- 后面右边显示日期 -->


                                                </div>
                                                <a class="c-more" href="/news/show/1" target="_blank">more
                                                    <i class="c-arrowleft">&gt;</i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="formMiddleContent  formMiddleContent111239 contentLine">
                                            <div class="style03_bot">
                                                <a href="/news/show/1" class="style03_botl"
                                                   title="低压开关柜哪个品牌好" target="_blank">

                                                    <img src="/home/static/images/wKgBTFrgyGOAAU_LAAAlcgxuyrM624.jpg">
                                                </a>
                                            </div>
                                            <div class="c-listcontent">
                                                <div class="style03_botr">


                                                    <!-- 头条推荐 -->
                                                    <!-- 显示分类 -->
                                                    <a class="list_title" href="/news/show/1"
                                                       title="低压开关柜哪个品牌好" target="_blank">

                                                        <!-- 任燕龙修改 2016年12月20日18:22:03  由于 文章列表，常规选项中简短标题设置为不使用  结果：文章列表依旧显示简短标题-->
                                                        <span style="">
低压开关柜哪个品牌好	 </span>
                                                    </a>

                                                    <div class="content_text form_lineheight">

                                                        制造业的发展空间正稳步增长，与人们追求高品质的生活有关。清晨，我们驶新能源车去工作，使用智能手机拍照...
                                                    </div>
                                                    <!-- 后面左边显示日期 -->

                                                    <!-- 后面右边显示日期 -->


                                                </div>
                                                <a class="c-more" href="/news/show/1" target="_blank">more
                                                    <i class="c-arrowleft">&gt;</i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="formMiddleContent  formMiddleContent111239 contentLine">
                                            <div class="style03_bot">
                                                <a href="/news/show/1" class="style03_botl"
                                                   title="居然因高压开关柜这一举动，企业损失重大" target="_blank">

                                                    <img src="/home/static/images/wKgBTFrgyGOAJrmcAAAaJsAmCBs643.jpg">
                                                </a>
                                            </div>
                                            <div class="c-listcontent">
                                                <div class="style03_botr">


                                                    <!-- 头条推荐 -->
                                                    <!-- 显示分类 -->
                                                    <a class="list_title" href="/news/show/1"
                                                       title="居然因高压开关柜这一举动，企业损失重大" target="_blank">

                                                        <!-- 任燕龙修改 2016年12月20日18:22:03  由于 文章列表，常规选项中简短标题设置为不使用  结果：文章列表依旧显示简短标题-->
                                                        <span style="">
居然因高压开关柜这一举动，企业损失重大	 </span>
                                                    </a>

                                                    <div class="content_text form_lineheight">

                                                        春季的天气变得忽冷忽热，人们容易流涕，登山的运动相当好，可以远离城市，呼吸到新鲜空气，五个小时的爬行...
                                                    </div>
                                                    <!-- 后面左边显示日期 -->

                                                    <!-- 后面右边显示日期 -->


                                                </div>
                                                <a class="c-more" href="/news/show/1" target="_blank">more
                                                    <i class="c-arrowleft">&gt;</i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="formMiddleContent  formMiddleContent111239 contentLine">
                                            <div class="style03_bot">
                                                <a href="/news/show/1" class="style03_botl"
                                                   title="仿威图机柜的行业定义及特点" target="_blank">

                                                    <img src="/home/static/images/wKgBS1rgyKCAU-xZAAAk2ekceHg599.jpg">
                                                </a>
                                            </div>
                                            <div class="c-listcontent">
                                                <div class="style03_botr">


                                                    <!-- 头条推荐 -->
                                                    <!-- 显示分类 -->
                                                    <a class="list_title" href="/news/show/1"
                                                       title="仿威图机柜的行业定义及特点" target="_blank">

                                                        <!-- 任燕龙修改 2016年12月20日18:22:03  由于 文章列表，常规选项中简短标题设置为不使用  结果：文章列表依旧显示简短标题-->
                                                        <span style="">
仿威图机柜的行业定义及特点	 </span>
                                                    </a>

                                                    <div class="content_text form_lineheight">

                                                        仿威图机柜通俗讲就是仿照德国威图柜做工精美的产品，威图的柜子表面处理要求高，防护等级高，不过现在国内...
                                                    </div>
                                                    <!-- 后面左边显示日期 -->

                                                    <!-- 后面右边显示日期 -->


                                                </div>
                                                <a class="c-more" href="/news/show/1" target="_blank">more
                                                    <i class="c-arrowleft">&gt;</i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="pagebar">
                                <div class="m_total_list">
                                    <b>共显示<strong>2</strong>页</b>
                                    <i>上一页</i>

                                    <em>1</em>


                                    <!-- 最后一页 -->
                                    <span><a href="javascript:void(0);" onclick="_goto111239Page('2');">2</a></span>

                                    <!-- 最后一页 -->
                                    <i><a href="javascript:void(0);" onclick="_goto111239Page('2');">下一页</a></i>

                                </div>


                            </div>
                            <form id="jvForm111239" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111239" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111239" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111239" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111239" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111239" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111239" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111239" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111239" value="1">
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row87658" _heightstatus="2">
                    <div class="span12">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent

@endsection