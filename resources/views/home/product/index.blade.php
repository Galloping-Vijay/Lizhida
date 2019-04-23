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

        #module111232 .formMiddle111232 {
            padding-bottom: 0px;
        }

        #module111232 .formMiddle111232 {
            padding-top: 30px;
        }

        #module111232 .formMiddle111232 {
            padding-left: 0px;
        }

        #module111232 .formMiddle111232 {
            padding-right: 0px;
        }

        #module111232 .formBanner111232 {
            display: none;
        }

        #module111232 {
            padding-bottom: 0px;
        }

        #module111232 {
            padding-top: 0px;
        }

        #module111232 {
            padding-left: 0px;
        }

        #module111232 {
            padding-right: 0px;
        }

        #module111232 {
            margin-bottom: 0px;
        }

        #module111232 {
            margin-top: 0px;
        }

        #module111232 {
            margin-left: 0px;
        }

        #module111232 {
            margin-right: 0px;
        }

        #module111230 {
            width: 1098px;
        }

        #module111230 .formBanner111230 {
            display: none;
        }

        #module111222 .formBanner111222 {
            display: none;
        }

        #module111222 {
            width: 1901px;
        }

        #module111223 .formBanner111223 {
            display: none;
        }

        #module111223 {
            width: 1098px;
        }

        #module111223 .formMiddle111223 {
            background: none;
        }

        #module111223 .formMiddle111223 .formMiddleCenter111223 {
            background: none;
        }

        #module111223 .formMiddleContent111223 {
            background: none;
        }

        #module111223 {
            background: rgba(0, 0, 0, 0) url(http://image.fast.126net.cn/group1/M00/03/9F/wKgBS1s7b3-ANz9WAAALp8mgg-0140.png) no-repeat center center;
        }

        #module111223 .formMiddle111223 {
            padding-right: 0px;
        }

        #module111223 .formMiddle111223 {
            padding-left: 0px;
        }

        #module111223 .formMiddle111223 {
            padding-top: 50px;
        }

        #module111223 .formMiddle111223 {
            padding-bottom: 10px;
        }

        #module111225 .formBanner111225 {
            display: none;
        }

        #module111225 {
            margin-right: 0px;
        }

        #module111225 {
            margin-left: 0px;
        }

        #module111225 {
            margin-top: 0px;
        }

        #module111225 {
            margin-bottom: 0px;
        }

        #module111225 {
            padding-right: 0px;
        }

        #module111225 {
            padding-left: 0px;
        }

        #module111225 {
            padding-top: 0px;
        }

        #module111225 {
            padding-bottom: 0px;
        }

        #module111225 .formMiddle111225 {
            padding-right: 0px;
        }

        #module111225 .formMiddle111225 {
            padding-left: 0px;
        }

        #module111225 .formMiddle111225 {
            padding-top: 10px;
        }

        #module111225 .formMiddle111225 {
            padding-bottom: 0px;
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
                <div class="row-fluid-1 ui-resizable-disabled ui-state-disabled clearfix" id="row43720"
                     _heightstatus="2">
                    <div class="span12">
                        <div id="module111222" style="" class="form pic_module form111222 modulePattern0">
                            <div style="box-sizing:border-box;">

                                <div class="formMiddle formMiddle111222  hover_style00">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="/home/static/images/wKgBTFrgySqAJPQYAAJTbDR-YLc464.jpg"
                                                 id="111222preImg1" height="400" width="1920">


                                        </a>
                                        <form id="jvForm111222"
                                              action="/"
                                              labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111222">
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
                                                   value="/"
                                                   id="uploadImgPath111222">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111222" action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111222" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111222" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111222" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111222" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111222" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111222" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111222" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111222" value="1">
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
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row64095"
                     _heightstatus="2">
                    <div class="span12">
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row15171"
                     _heightstatus="2">
                    <div class="span12">
                        <div id="module111223" class="form text_list form111223 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111223" type="text/css">
                                    #module111223.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111223.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111223">
                                    <div class="formBannerTitle formBannerTitle111223">
                                        <div id="bigg" class="titleText titleText111223" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111223">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111223" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($(&#39;#111223-moduleLayer .operate-inner&#39;));">
                                        <div style="text-align: center;"><span
                                                    style="color: rgb(57, 57, 160); font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-size: 27px; text-align: center;">产品展示</span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111223" action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111223" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111223" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111223" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111223" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111223" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111223" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111223" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111223" value="1">
                            </form>
                        </div>
                        <div id="module111225" style="" class="form form111225 product_module modulePattern0">
                            <div>
                                <style id="styleModuleTest111225">
                                    #module111225.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111225.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111225">
                                    <div class="formBannerTitle formBannerTitle111225">
                                        <div class="titleText titleText111225">
                                            产品展示
                                        </div>
                                        <div class="formBannerMore formBannerMore111225">
                                        </div>
                                    </div>
                                </div>
                                <ul class="formMiddle formMiddle111225 c-prolist27">
                                    <li class="formMiddleContent formMiddleContent111225 contentLine ">
                                        <a href="/product/show/1">
                                            <div class="c-img">
                                                <img alt="生活污水处理设备"
                                                     src="home/static/picture/wKgBS1rgyXmAWlfPAAA5BuiZaz0565.jpg"
                                                     title="生活污水处理设备">
                                            </div>
                                            <div class="c-probottom">
                                                <p class="propDiv price">
                                                    <!-- <span class="propName">价格：</span> -->
                                                    <span class="propValue"><b>¥</b>35,000.00</span>
                                                </p>
                                                <p class="porduct_title"><span>生活污水处理设备</span></p>
                                            </div>
                                        </a>
                                        <!-- <p class="propDiv inventoryNum">
                                            <span class="propName">库存：</span>
                                            <span class="propValue">10</span>
                                        </p> -->
                                    </li>
                                    <li class="formMiddleContent formMiddleContent111225 contentLine ">
                                        <a href="/product/show/1">
                                            <div class="c-img">
                                                <img alt="三维、四维折弯机，金属线材折弯机"
                                                     src="home/static/picture/wKgBS1rgyXmAGQHzAABfzq3Uf5Y303.jpg"
                                                     title="三维、四维折弯机，金属线材折弯机">
                                            </div>
                                            <div class="c-probottom">
                                                <p class="propDiv price">
                                                    <!-- <span class="propName">价格：</span> -->
                                                    <span class="propValue"><b>¥</b>88,000.00</span>
                                                </p>
                                                <p class="porduct_title"><span>三维、四维折弯机，金属线材折弯机</span></p>
                                            </div>
                                        </a>
                                        <!-- <p class="propDiv inventoryNum">
                                            <span class="propName">库存：</span>
                                            <span class="propValue">25</span>
                                        </p> -->
                                    </li>
                                    <li class="formMiddleContent formMiddleContent111225 contentLine c-lastpro ">
                                        <a href="/product/show/1">
                                            <div class="c-img">
                                                <img alt="全自动颗粒包装机、灌装机"
                                                     src="home/static/picture/wKgBS1rgyXiAP7wxAABXzueXef8842.jpg"
                                                     title="全自动颗粒包装机、灌装机">
                                            </div>
                                            <div class="c-probottom">
                                                <p class="propDiv price">
                                                    <!-- <span class="propName">价格：</span> -->
                                                    <span class="propValue"><b>¥</b>18,000.00</span>
                                                </p>
                                                <p class="porduct_title"><span>全自动颗粒包装机、灌装机</span></p>
                                            </div>
                                        </a>
                                        <!-- <p class="propDiv inventoryNum">
                                            <span class="propName">库存：</span>
                                            <span class="propValue">10</span>
                                        </p> -->
                                    </li>
                                    <li class="formMiddleContent formMiddleContent111225 contentLine ">
                                        <a href="/">
                                            <div class="c-img">
                                                <img alt="木屑颗粒包装机饲料包装秤"
                                                     src="home/static/picture/wKgBS1rgyXiAeiHtAABx6lG0CRU686.jpg"
                                                     title="木屑颗粒包装机饲料包装秤">
                                            </div>
                                            <div class="c-probottom">
                                                <p class="propDiv price">
                                                    <!-- <span class="propName">价格：</span> -->
                                                    <span class="propValue"><b>¥</b>19,800.00</span>
                                                </p>
                                                <p class="porduct_title"><span>木屑颗粒包装机饲料包装秤</span></p>
                                            </div>
                                        </a>
                                        <!-- <p class="propDiv inventoryNum">
                                            <span class="propName">库存：</span>
                                            <span class="propValue">15</span>
                                        </p> -->
                                    </li>
                                    <li class="formMiddleContent formMiddleContent111225 contentLine ">
                                        <a href="/">
                                            <div class="c-img">
                                                <img alt="金属导体行业反渗透设备、去离子水设备"
                                                     src="home/static/picture/wKgBS1rgyXmAGValAAA0jER4LzY993.jpg"
                                                     title="金属导体行业反渗透设备、去离子水设备">
                                            </div>
                                            <div class="c-probottom">
                                                <p class="propDiv price">
                                                    <!-- <span class="propName">价格：</span> -->
                                                    <span class="propValue"><b>¥</b>23,000.00</span>
                                                </p>
                                                <p class="porduct_title"><span>金属导体行业反渗透设备、去离子水设备</span></p>
                                            </div>
                                        </a>
                                        <!-- <p class="propDiv inventoryNum">
                                            <span class="propName">库存：</span>
                                            <span class="propValue">1000</span>
                                        </p> -->
                                    </li>
                                    <li class="formMiddleContent formMiddleContent111225 contentLine c-lastpro ">
                                        <a href="/">
                                            <div class="c-img">
                                                <img alt="化工原料水包装机肥料水包装机，液包机"
                                                     src="home/static/picture/wKgBS1rgyXiAdTuiAAAySorsaR0766.jpg"
                                                     title="化工原料水包装机肥料水包装机，液包机">
                                            </div>
                                            <div class="c-probottom">
                                                <p class="propDiv price">
                                                    <!-- <span class="propName">价格：</span> -->
                                                    <span class="propValue"><b>¥</b>23,800.00</span>
                                                </p>
                                                <p class="porduct_title"><span>化工原料水包装机肥料水包装机，液包机</span></p>
                                            </div>
                                        </a>
                                        <!-- <p class="propDiv inventoryNum">
                                            <span class="propName">库存：</span>
                                            <span class="propValue">12</span>
                                        </p> -->
                                    </li>
                                </ul>
                                <div class="clearfloat"></div>
                            </div>
                            <form id="jvForm111225" action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111225" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111225" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111225" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111225" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111225" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111225" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111225" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111225" value="1">
                            </form>
                        </div>
                        <div id="module111230" style="" class="form pic_module form111230 modulePattern0">
                            <div style="box-sizing:border-box;">

                                <div class="formMiddle formMiddle111230  hover_style00">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="/home/static/images/wKgBTFrgyQOAGSBeAAB5k75MDs8786.jpg"
                                                 id="111230preImg1" height="200" width="1100">


                                        </a>
                                        <form id="jvForm111230"
                                              action="/"
                                              labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111230">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="1">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="1100"
                                                   id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="200"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value=""
                                                   id="uploadImgPath111230">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111230" action="/product/show/1">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111230" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111230" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111230" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111230" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111230" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111230" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111230" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111230" value="1">
                            </form>

                        </div>
                        <div id="module111232" style="" class="form form111232 product_module modulePattern0">
                            <div>
                                <style id="styleModuleTest111232">
                                    #module111232.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111232.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111232">
                                    <div class="formBannerTitle formBannerTitle111232">
                                        <div class="titleText titleText111232">
                                            产品展示
                                        </div>
                                        <div class="formBannerMore formBannerMore111232">
                                        </div>
                                    </div>
                                </div>
                                <ul class="formMiddle formMiddle111232 c-prolist27">
                                    <li class="formMiddleContent formMiddleContent111232 contentLine ">
                                        <a href="/product/show/1">
                                            <div class="c-img">
                                                <img alt="化工原料水包装机肥料水包装机，液包机"
                                                     src="home/static/picture/wkgbs1rgyxiadtuiaaaysorsar0766.jpg"
                                                     title="化工原料水包装机肥料水包装机，液包机">
                                            </div>
                                            <div class="c-probottom">
                                                <p class="propDiv price">
                                                    <!-- <span class="propName">价格：</span> -->
                                                    <span class="propValue"><b>¥</b>23,800.00</span>
                                                </p>
                                                <p class="porduct_title"><span>化工原料水包装机肥料水包装机，液包机</span></p>
                                            </div>
                                        </a>
                                        <!-- <p class="propDiv inventoryNum">
                                            <span class="propName">库存：</span>
                                            <span class="propValue">12</span>
                                        </p> -->
                                    </li>
                                    <li class="formMiddleContent formMiddleContent111232 contentLine ">
                                        <a href="/product/show/1">
                                            <div class="c-img">
                                                <img alt="木屑颗粒包装机饲料包装秤"
                                                     src="home/static/picture/wkgbs1rgyxiaeihtaabx6lg0cru686.jpg"
                                                     title="木屑颗粒包装机饲料包装秤">
                                            </div>
                                            <div class="c-probottom">
                                                <p class="propDiv price">
                                                    <!-- <span class="propName">价格：</span> -->
                                                    <span class="propValue"><b>¥</b>19,800.00</span>
                                                </p>
                                                <p class="porduct_title"><span>木屑颗粒包装机饲料包装秤</span></p>
                                            </div>
                                        </a>
                                        <!-- <p class="propDiv inventoryNum">
                                            <span class="propName">库存：</span>
                                            <span class="propValue">15</span>
                                        </p> -->
                                    </li>
                                    <li class="formMiddleContent formMiddleContent111232 contentLine c-lastpro ">
                                        <a href="/product/show/1">
                                            <div class="c-img">
                                                <img alt="全自动颗粒包装机、灌装机"
                                                     src="home/static/picture/wkgbs1rgyxiap7wxaabxzuexef8842.jpg"
                                                     title="全自动颗粒包装机、灌装机">
                                            </div>
                                            <div class="c-probottom">
                                                <p class="propDiv price">
                                                    <!-- <span class="propName">价格：</span> -->
                                                    <span class="propValue"><b>¥</b>18,000.00</span>
                                                </p>
                                                <p class="porduct_title"><span>全自动颗粒包装机、灌装机</span></p>
                                            </div>
                                        </a>
                                        <!-- <p class="propDiv inventoryNum">
                                            <span class="propName">库存：</span>
                                            <span class="propValue">10</span>
                                        </p> -->
                                    </li>
                                    <li class="formMiddleContent formMiddleContent111232 contentLine ">
                                        <a href="/product/show/1">
                                            <div class="c-img">
                                                <img alt="生活污水处理设备"
                                                     src="home/static/picture/wKgBS1rgyXmAWlfPAAA5BuiZaz0565.jpg"
                                                     title="生活污水处理设备">
                                            </div>
                                            <div class="c-probottom">
                                                <p class="propDiv price">
                                                    <!-- <span class="propName">价格：</span> -->
                                                    <span class="propValue"><b>¥</b>35,000.00</span>
                                                </p>
                                                <p class="porduct_title"><span>生活污水处理设备</span></p>
                                            </div>
                                        </a>
                                        <!-- <p class="propDiv inventoryNum">
                                            <span class="propName">库存：</span>
                                            <span class="propValue">10</span>
                                        </p> -->
                                    </li>
                                    <li class="formMiddleContent formMiddleContent111232 contentLine ">
                                        <a href="/product/show/1">
                                            <div class="c-img">
                                                <img alt="厂家直销EDI高纯水设备"
                                                     src="home/static/picture/wkgbs1rgyxmaf0heaaci79zn6nq539.jpg"
                                                     title="厂家直销EDI高纯水设备">
                                            </div>
                                            <div class="c-probottom">
                                                <p class="propDiv price">
                                                    <!-- <span class="propName">价格：</span> -->
                                                    <span class="propValue"><b>¥</b>350,000.00</span>
                                                </p>
                                                <p class="porduct_title"><span>厂家直销EDI高纯水设备</span></p>
                                            </div>
                                        </a>
                                        <!-- <p class="propDiv inventoryNum">
                                            <span class="propName">库存：</span>
                                            <span class="propValue">5</span>
                                        </p> -->
                                    </li>
                                    <li class="formMiddleContent formMiddleContent111232 contentLine c-lastpro ">
                                        <a href="/product/show/1">
                                            <div class="c-img">
                                                <img alt="电脑全自动数控弹簧机"
                                                     src="home/static/picture/wkgbs1rgyxmafq5aaabajdcdha4321.jpg"
                                                     title="电脑全自动数控弹簧机">
                                            </div>
                                            <div class="c-probottom">
                                                <p class="propDiv price">
                                                    <!-- <span class="propName">价格：</span> -->
                                                    <span class="propValue"><b>¥</b>98,000.00</span>
                                                </p>
                                                <p class="porduct_title"><span>电脑全自动数控弹簧机</span></p>
                                            </div>
                                        </a>
                                        <!-- <p class="propDiv inventoryNum">
                                            <span class="propName">库存：</span>
                                            <span class="propValue">5</span>
                                        </p> -->
                                    </li>
                                </ul>
                                <div class="clearfloat"></div>
                            </div>
                            <form id="jvForm111232" action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111232" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111232" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111232" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111232" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111232" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111232" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111232" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111232" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent

@endsection