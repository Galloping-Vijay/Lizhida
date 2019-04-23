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

        #module111260 .formMiddle111260 {
            padding-bottom: 30px;
        }

        #module111260 .formMiddle111260 {
            padding-top: 20px;
        }

        #module111260 .formMiddle111260 {
            padding-left: 10px;
        }

        #module111260 .formMiddle111260 {
            padding-right: 10px;
        }

        #module111265 .formMiddle111265 {
            padding-bottom: 0px;
        }

        #module111265 .formMiddle111265 {
            padding-top: 20px;
        }

        #module111265 .formMiddle111265 {
            padding-left: 10px;
        }

        #module111265 .formMiddle111265 {
            padding-right: 10px;
        }

        #module111260 {
            width: 273px;
        }

        #module111261 {
            width: 273px;
        }

        #module111263 .formMiddle111263 {
            padding-bottom: 0px;
        }

        #module111263 .formMiddle111263 {
            padding-top: 20px;
        }

        #module111263 .formMiddle111263 {
            padding-left: 10px;
        }

        #module111263 .formMiddle111263 {
            padding-right: 10px;
        }

        #module111265 {
            width: 273px;
        }

        #module111265 .formBanner111265 {
            display: none;
        }

        #module111263 {
            width: 273px;
        }

        #module111263 .formBanner111263 {
            display: none;
        }

        #module111261 .formMiddle111261 {
            padding-bottom: 0px;
        }

        #module111261 .formMiddle111261 {
            padding-top: 20px;
        }

        #module111261 .formMiddle111261 {
            padding-left: 10px;
        }

        #module111261 .formMiddle111261 {
            padding-right: 10px;
        }

        #module111261 .formBanner111261 {
            display: none;
        }

        #module111260 .formBanner111260 {
            display: none;
        }

        #module111259 .formMiddle111259 {
            padding-bottom: 0px;
        }

        #module111259 .formMiddle111259 {
            padding-top: 50px;
        }

        #module111259 .formMiddle111259 {
            padding-left: 88px;
        }

        #module111259 .formMiddle111259 {
            padding-right: 88px;
        }

        #module111259 {
            width: 273px;
        }

        #module111259 .formBanner111259 {
            display: none;
        }

        #module111257 .formMiddle111257 {
            padding-bottom: 0px;
        }

        #module111257 .formMiddle111257 {
            padding-top: 50px;
        }

        #module111257 .formMiddle111257 {
            padding-left: 88px;
        }

        #module111257 .formMiddle111257 {
            padding-right: 88px;
        }

        #module111257 {
            width: 273px;
        }

        #module111257 .formBanner111257 {
            display: none;
        }

        #module111256 .formMiddle111256 {
            padding-bottom: 0px;
        }

        #module111256 .formMiddle111256 {
            padding-top: 50px;
        }

        #module111256 .formMiddle111256 {
            padding-left: 88px;
        }

        #module111256 .formMiddle111256 {
            padding-right: 88px;
        }

        #module111256 {
            width: 273px;
        }

        #module111256 .formBanner111256 {
            display: none;
        }

        #module111253 .formMiddle111253 {
            padding-bottom: 0px;
        }

        #module111253 .formMiddle111253 {
            padding-top: 50px;
        }

        #module111253 .formMiddle111253 {
            padding-left: 88px;
        }

        #module111253 .formMiddle111253 {
            padding-right: 88px;
        }

        #module111254 .formMiddle111254 {
            padding-bottom: 15px;
        }

        #module111254 .formMiddle111254 {
            padding-top: 40px;
        }

        #module111254 .formMiddle111254 {
            padding-left: 0px;
        }

        #module111254 .formMiddle111254 {
            padding-right: 0px;
        }

        #module111254 {
            width: 1098px;
        }

        #module111254 {
            border-bottom-width: 1px;
        }

        #module111254 {
            border-top-width: 0px;
        }

        #module111254 {
            border-left-width: 0px;
        }

        #module111254 {
            border-right-width: 0px;
        }

        #module111254 {
            border-style: solid;
        }

        #module111254 {
            border-color: rgba(169, 169, 169, 1);
        }

        #module111254 .formBanner111254 {
            display: none;
        }

        #module111253 {
            width: 273px;
        }

        #module111253 .formBanner111253 {
            display: none;
        }

        #module111251 {
            z-index: 502;
        }

        #module111251 {
            width: 417px;
        }

        #module111251 .formBanner111251 {
            display: none;
        }

        #module111240 .formBanner111240 {
            display: none;
        }

        #module111242 .formBanner111242 {
            display: none;
        }

        #module111242 {
            width: 1098px;
        }

        #module111242 .formMiddle111242 {
            background: none;
        }

        #module111242 .formMiddle111242 .formMiddleCenter111242 {
            background: none;
        }

        #module111242 .formMiddleContent111242 {
            background: none;
        }

        #module111242 {
            background: rgba(0, 0, 0, 0) url(http://image.fast.126net.cn/group1/M00/03/9F/wKgBS1s7b3-AABUvAAANOGrInEg076.png) no-repeat center center;
        }

        #module111242 .formMiddle111242 {
            padding-right: 0px;
        }

        #module111242 .formMiddle111242 {
            padding-left: 0px;
        }

        #module111242 .formMiddle111242 {
            padding-top: 50px;
        }

        #module111242 .formMiddle111242 {
            padding-bottom: 10px;
        }

        #module111246 .formBanner111246 {
            display: none;
        }

        #module111246 {
            z-index: 501;
        }

        #module111246 .formMiddle111246 {
            background: none;
        }

        #module111246 .formMiddle111246 .formMiddleCenter111246 {
            background: none;
        }

        #module111246 .formMiddleContent111246 {
            background: none;
        }

        #module111246 {
            background: rgba(57, 57, 160, 1);
        }

        #module111248 .formBanner111248 {
            display: none;
        }

        #module111248 {
            width: 618px;
        }

        #module111248 .formMiddle111248 {
            padding-right: 0px;
        }

        #module111248 .formMiddle111248 {
            padding-left: 0px;
        }

        #module111248 .formMiddle111248 {
            padding-top: 30px;
        }

        #module111248 .formMiddle111248 {
            padding-bottom: 0px;
        }

        #row68188 {
            height: 300px;
        }

        #row69199 > div[class^='span']:nth-child(1) {
            width: 38.09090909090909%;
        }

        #row69199 > div[class^='span']:nth-child(2) {
            width: 61.909090909090914%;
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
                <div class="row-fluid-1 ui-resizable-disabled ui-state-disabled clearfix" id="row45244"
                     _heightstatus="2">
                    <div class="span12">
                        <div id="module111240" style="" class="form pic_module form111240 modulePattern0">
                            <div style="box-sizing:border-box;">

                                <div class="formMiddle formMiddle111240  hover_style00">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="http://image.fast.126net.cn/group1/M00/02/34/wKgBS1rgyT6ADUtgAAKXQQO11KI071.jpg"
                                                 id="111240preImg1" height="400" width="1920">


                                        </a>
                                        <form id="jvForm111240" action="" labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111240">
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
                                                   value="http://image.fast.126net.cn/group1/M00/02/34/wKgBS1rgyT6ADUtgAAKXQQO11KI071.jpg"
                                                   id="uploadImgPath111240">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111240" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111240" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111240" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111240" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111240" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111240" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111240" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111240" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111240" value="1">
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
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row9761" _heightstatus="2">
                    <div class="span12">
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row97832" _heightstatus="2">
                    <div class="span12">
                        <div id="module111242" class="form text_list form111242 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111242" type="text/css">
                                    #module111242.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111242.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111242">
                                    <div class="formBannerTitle formBannerTitle111242">
                                        <div id="bigg" class="titleText titleText111242" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111242">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111242" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($('#111242-moduleLayer .operate-inner'));">
                                        <div style="text-align: center;"><span
                                                    style="color: rgb(57, 57, 160); font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-size: 27px; text-align: center;">关于我们</span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111242" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111242" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111242" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111242" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111242" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111242" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111242" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111242" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111242" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row69199" _heightstatus="2">
                    <div class="span6" _floatmodule="111246,111251">
                        <div id="module111246" _float="1"
                             style="left:22px;top:53px;position: absolute;height:396px;width:349px;"
                             class="form text_list form111246 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111246" type="text/css">
                                    #module111246.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111246.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111246">
                                    <div class="formBannerTitle formBannerTitle111246">
                                        <div id="bigg" class="titleText titleText111246" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111246">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111246" style="width: 100%;height: 100%;">
                                    <div class="ztextbox" style="width: 100%;height: 100%;"
                                         ondblclick="Site.editTextStyle($('#111246-moduleLayer .operate-inner'));">
                                        <span style="color:#3939a0;">1</span>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111246" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111246" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111246" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111246" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111246" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111246" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111246" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111246" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111246" value="1">
                            </form>
                        </div>
                        <div id="module111251" _float="1"
                             style="left:0px;top:35px;position: absolute;;width:350px;height:394px;"
                             class="form pic_module form111251 modulePattern0">
                            <div style="height:100%;box-sizing:border-box;">

                                <div class="formMiddle formMiddle111251  hover_style00" style="height:100%;">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="http://image.fast.126net.cn/group1/M00/02/33/wKgBS1rgyS-ASVZaAAB9EEp2D4w119.jpg"
                                                 id="111251preImg1" width="100%" height="100%">


                                        </a>
                                        <form id="jvForm111251" action="" labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111251">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="1">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="350" id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="394"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value="http://image.fast.126net.cn/group1/M00/02/33/wKgBS1rgyS-ASVZaAAB9EEp2D4w119.jpg"
                                                   id="uploadImgPath111251">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111251" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111251" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111251" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111251" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111251" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111251" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111251" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111251" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111251" value="1">
                            </form>

                        </div>
                    </div>
                    <div class="span6">
                        <div id="module111248" class="form text_list form111248 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111248" type="text/css">
                                    #module111248.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111248.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111248">
                                    <div class="formBannerTitle formBannerTitle111248">
                                        <div id="bigg" class="titleText titleText111248" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111248">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111248" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($('#111248-moduleLayer .operate-inner'));">
                                        <div style="text-align: center;"><span style="line-height:300%;"><span
                                                        style="color:#3939a0;"><span style="font-size:18px;">公司简介</span></span></span><br><span
                                                    style="color:#ffffff;"><span style="font-size:18px;"></span></span>
                                            <p data-v-3c4f858a="" class="_tgt"
                                               style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; text-align: left;">
                                                <span style="line-height: 35px;"><span style="font-size: 15px;"><span
                                                                data-v-3c4f858a="" data-group="0"
                                                                style="box-sizing: border-box;">&nbsp; &nbsp; &nbsp; </span></span><span
                                                            style="font-size:15px;"><span data-v-3c4f858a=""
                                                                                          data-group="0"
                                                                                          style="box-sizing: border-box;">&nbsp; Pino以汽车零部件技术、品牌和服务为核心竞争力。</span><span
                                                                data-v-3c4f858a="" data-group="-1"
                                                                style="box-sizing: border-box;">自成立以来，Pino致力于以领先的技术开发产品，拓展市场和OEM服务。</span><span
                                                                data-v-3c4f858a="" data-group="-2"
                                                                style="box-sizing: border-box;">目前我们的主要产品有空调系统、发动机冷却系统、汽车电子等，适用于奔驰、宝马、奥迪、路虎、捷豹等欧洲豪华车品牌，并在业内享有盛誉。</span></span></span>
                                            </p>
                                            <p data-v-3c4f858a="" class="_tgt"
                                               style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; text-align: left;">
                                                <span style="font-size:15px;"><span style="line-height: 35px;"><span
                                                                data-v-3c4f858a="" data-group="0"
                                                                style="box-sizing: border-box;">&nbsp; &nbsp; &nbsp; &nbsp; Pino以汽车零部件技术、品牌和服务为核心竞争力。</span><span
                                                                data-v-3c4f858a="" data-group="-1"
                                                                style="box-sizing: border-box;">自成立以来，Pino致力于以领先的技术开发产品，拓展市场和OEM服务。</span><span
                                                                data-v-3c4f858a="" data-group="-2"
                                                                style="box-sizing: border-box;">目前我们的主要产品有空调系统、发动机冷却系统、汽车电子等，适用于奔驰、宝马、奥迪、路虎、捷豹等欧洲豪华车品牌，并在业内享有盛誉。</span></span></span>
                                            </p>
                                            <p data-v-3c4f858a="" class="_tgt"
                                               style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; text-align: left;">
                                                <span style="font-size:15px;"><span style="line-height: 35px;"><span
                                                                data-v-3c4f858a="" data-group="1"
                                                                style="box-sizing: border-box;"></span></span></span>
                                            </p>
                                            <p data-v-3c4f858a="" class="_tgt"
                                               style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; text-align: left;">
                                                <span style="font-size:15px;"><span style="line-height: 35px;"><span
                                                                data-v-3c4f858a="" data-group="2"
                                                                style="box-sizing: border-box;">&nbsp; &nbsp; &nbsp; &nbsp; Pino总部位于德国法兰克福，自2016年起进入中国市场。</span><span
                                                                data-v-3c4f858a="" data-group="1"
                                                                style="box-sizing: border-box;">我们为中国市场提供世界领先的技术，中国主要汽车制造商，tier1 OEM供应商和售后市场。</span></span></span>
                                            </p>
                                            <p data-v-3c4f858a="" class="_tgt"
                                               style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; text-align: left;">
                                                <span style="font-size:15px;"><span style="line-height: 35px;"><span
                                                                data-v-3c4f858a="" data-group="0"
                                                                style="box-sizing: border-box;">&nbsp; &nbsp; &nbsp; &nbsp;Pino以汽车零部件技术、品牌和服务为核心竞争力。</span><span
                                                                data-v-3c4f858a="" data-group="-1"
                                                                style="box-sizing: border-box;">自成立以来，Pino致力于以领先的技术开发产品，拓展市场和OEM服务。</span><span
                                                                data-v-3c4f858a="" data-group="-2"
                                                                style="box-sizing: border-box;">目前我们的主要产品有空调系统、发动机冷却系统、汽车电子等，适用于奔驰、宝马、奥迪、路虎、捷豹等欧洲豪华车品牌，并在业内享有盛誉。</span></span></span><span
                                                        style="font-size:14px;"><span style="line-height: 35px;"><span
                                                                data-v-3c4f858a="" data-group="1"
                                                                style="box-sizing: border-box;"></span></span></span>
                                            </p><span style="color:#3939a0;"><span
                                                        style="font-size:18px;"></span></span></div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111248" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111248" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111248" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111248" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111248" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111248" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111248" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111248" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111248" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row51808" _heightstatus="2">
                    <div class="span12">
                        <div id="module111254" class="form text_list form111254 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111254" type="text/css">
                                    #module111254.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111254.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111254">
                                    <div class="formBannerTitle formBannerTitle111254">
                                        <div id="bigg" class="titleText titleText111254" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111254">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111254" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($('#111254-moduleLayer .operate-inner'));">
                                        <span style="color:#3939a0;"><span style="font-family:微软雅黑;"><span
                                                        style="font-size:20px;">我们的优势</span></span></span>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111254" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111254" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111254" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111254" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111254" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111254" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111254" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111254" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111254" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row92929" _heightstatus="2">
                    <div class="span41">
                        <div id="module111253" style="" class="form pic_module form111253 modulePattern0">
                            <div style="box-sizing:border-box;">

                                <div class="formMiddle formMiddle111253  hover_style00">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="http://image.fast.126net.cn/group1/M00/02/33/wKgBS1rgyTaAVrm5AAAQ31QNfKI474.png"
                                                 id="111253preImg1" height="100" width="100">


                                        </a>
                                        <form id="jvForm111253" action="" labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111253">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="1">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="100" id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="100"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value="http://image.fast.126net.cn/group1/M00/02/33/wKgBS1rgyTaAVrm5AAAQ31QNfKI474.png"
                                                   id="uploadImgPath111253">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111253" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111253" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111253" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111253" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111253" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111253" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111253" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111253" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111253" value="1">
                            </form>

                        </div>
                        <div id="module111260" class="form text_list form111260 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111260" type="text/css">
                                    #module111260.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111260.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111260">
                                    <div class="formBannerTitle formBannerTitle111260">
                                        <div id="bigg" class="titleText titleText111260" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111260">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111260" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($('#111260-moduleLayer .operate-inner'));">
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; text-align: center;">
                                            <span style="line-height:300%;"><span style="color:#3939a0;"><span
                                                            style="font-family: 微软雅黑;"><span data-v-3c4f858a=""
                                                                                             data-group="0"
                                                                                             style="box-sizing: border-box;"><span
                                                                    style="font-size: 24px;">专注</span></span></span></span></span><span
                                                    style="color:#3939a0;"><span style="font-family: 微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="0"
                                                            style="box-sizing: border-box;"></span></span></span></p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; text-align: center;">
                                            <span style="color:#3939a0;"><span style="font-family: 微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="0"
                                                            style="box-sizing: border-box;">-重点关注德国高端车型的热系统产品。</span></span></span>
                                        </p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; text-align: center;">
                                            <span style="color:#3939a0;"><span style="font-family: 微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="1"
                                                            style="box-sizing: border-box;">-专注于提供优质的产品和专业的服务。</span></span></span>
                                        </p>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111260" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111260" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111260" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111260" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111260" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111260" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111260" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111260" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111260" value="1">
                            </form>
                        </div>
                    </div>
                    <div class="span41">
                        <div id="module111256" style="" class="form pic_module form111256 modulePattern0">
                            <div style="box-sizing:border-box;">

                                <div class="formMiddle formMiddle111256  hover_style00">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="http://image.fast.126net.cn/group2/M00/00/21/wKgBTFrgyO-AGHX4AAAITSvs7xg414.png"
                                                 id="111256preImg1" height="100" width="100">


                                        </a>
                                        <form id="jvForm111256" action="" labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111256">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="1">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="100" id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="100"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value="http://image.fast.126net.cn/group2/M00/00/21/wKgBTFrgyO-AGHX4AAAITSvs7xg414.png"
                                                   id="uploadImgPath111256">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111256" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111256" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111256" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111256" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111256" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111256" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111256" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111256" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111256" value="1">
                            </form>

                        </div>
                        <div id="module111261" class="form text_list form111261 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111261" type="text/css">
                                    #module111261.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111261.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111261">
                                    <div class="formBannerTitle formBannerTitle111261">
                                        <div id="bigg" class="titleText titleText111261" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111261">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111261" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($('#111261-moduleLayer .operate-inner'));">
                                        <div style="text-align: center;"><span style="color:#3939a0;"><span
                                                        style="line-height:300%;"><span style="font-family: 微软雅黑;"><span
                                                                style="font-size: 24px;">经验</span></span></span></span>
                                        </div>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; text-align: center;">
                                            <span style="color:#3939a0;"><span style="font-family: 微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="0"
                                                            style="box-sizing: border-box;">-在热产品行业从业13年以上。</span></span></span>
                                        </p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; text-align: center;">
                                            <span style="color:#3939a0;"><span style="font-family: 微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="1"
                                                            style="box-sizing: border-box;">-多年的市场经验和市场关系。</span></span></span>
                                        </p>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111261" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111261" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111261" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111261" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111261" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111261" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111261" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111261" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111261" value="1">
                            </form>
                        </div>
                    </div>
                    <div class="span41">
                        <div id="module111257" style="" class="form pic_module form111257 modulePattern0">
                            <div style="box-sizing:border-box;">

                                <div class="formMiddle formMiddle111257  hover_style00">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="http://image.fast.126net.cn/group2/M00/00/21/wKgBTFrgyO-ABFX_AAALGQvH7Ss615.png"
                                                 id="111257preImg1" height="100" width="100">


                                        </a>
                                        <form id="jvForm111257" action="" labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111257">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="1">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="100" id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="100"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value="http://image.fast.126net.cn/group2/M00/00/21/wKgBTFrgyO-ABFX_AAALGQvH7Ss615.png"
                                                   id="uploadImgPath111257">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111257" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111257" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111257" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111257" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111257" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111257" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111257" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111257" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111257" value="1">
                            </form>

                        </div>
                        <div id="module111263" class="form text_list form111263 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111263" type="text/css">
                                    #module111263.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111263.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111263">
                                    <div class="formBannerTitle formBannerTitle111263">
                                        <div id="bigg" class="titleText titleText111263" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111263">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111263" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($('#111263-moduleLayer .operate-inner'));">
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; text-align: center;">
                                            <span style="line-height:300%;"><span style="color:#3939a0;"><span
                                                            style="font-family: 微软雅黑;"><span data-v-3c4f858a=""
                                                                                             data-group="0"
                                                                                             style="box-sizing: border-box;"><span
                                                                    style="font-size: 24px;">能力</span></span></span></span></span><span
                                                    style="color:#3939a0;"><span style="font-family: 微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="0"
                                                            style="box-sizing: border-box;"></span></span></span></p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif;">
                                            <span style="color:#3939a0;"><span style="font-family: 微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="0"
                                                            style="box-sizing: border-box;">-一些OE项目和公司运作的成功经验。</span></span></span>
                                        </p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif;">
                                            <span style="color:#3939a0;"><span style="font-family: 微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="1"
                                                            style="box-sizing: border-box;">-可以通过与OE制造公司以及在热产品。</span></span></span>
                                        </p>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111263" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111263" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111263" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111263" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111263" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111263" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111263" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111263" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111263" value="1">
                            </form>
                        </div>
                    </div>
                    <div class="span41">
                        <div id="module111259" style="" class="form pic_module form111259 modulePattern0">
                            <div style="box-sizing:border-box;">

                                <div class="formMiddle formMiddle111259  hover_style00">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="http://image.fast.126net.cn/group1/M00/02/33/wKgBS1rgyTaAUEaWAAAH90D9-NU351.png"
                                                 id="111259preImg1" height="100" width="100">


                                        </a>
                                        <form id="jvForm111259" action="" labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111259">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="1">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="100" id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="100"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value="http://image.fast.126net.cn/group1/M00/02/33/wKgBS1rgyTaAUEaWAAAH90D9-NU351.png"
                                                   id="uploadImgPath111259">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111259" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111259" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111259" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111259" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111259" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111259" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111259" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111259" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111259" value="1">
                            </form>

                        </div>
                        <div id="module111265" class="form text_list form111265 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111265" type="text/css">
                                    #module111265.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111265.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111265">
                                    <div class="formBannerTitle formBannerTitle111265">
                                        <div id="bigg" class="titleText titleText111265" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111265">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111265" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($('#111265-moduleLayer .operate-inner'));">
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; text-align: center;">
                                            <span style="line-height:300%;"><span style="color:#3939a0;"><span
                                                            style="font-family: 微软雅黑;"><span data-v-3c4f858a=""
                                                                                             data-group="0"
                                                                                             style="box-sizing: border-box;"><span
                                                                    style="font-size: 24px;">远见</span></span></span></span></span><span
                                                    style="color:#3939a0;"><span style="font-family: 微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="0"
                                                            style="box-sizing: border-box;"></span></span></span></p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif;">
                                            <span style="color:#3939a0;"><span style="font-family: 微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="0"
                                                            style="box-sizing: border-box;">-为中国市场提供战略眼光。</span></span></span>
                                        </p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="font-variant-numeric: normal; font-variant-east-asian: normal; box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif;">
                                            <span style="color:#3939a0;"><span style="font-family: 微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="1"
                                                            style="box-sizing: border-box;">-寻找在中国市场拓展好关系的可能性。</span></span></span>
                                        </p>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111265" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111265" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111265" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111265" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111265" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111265" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111265" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111265" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111265" value="1">
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