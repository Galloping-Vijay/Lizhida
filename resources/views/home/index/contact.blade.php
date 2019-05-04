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

        #module111282 .formMiddle111282 {
            padding-bottom: 20px;
        }

        #module111282 .formMiddle111282 {
            padding-top: 20px;
        }

        #module111282 .formMiddle111282 {
            padding-left: 5px;
        }

        #module111282 .formMiddle111282 {
            padding-right: 5px;
        }

        #module111282 {
            width: 273px;
        }

        #module111282 .formBanner111282 {
            display: none;
        }

        #module111281 .formMiddle111281 {
            padding-bottom: 20px;
        }

        #module111281 .formMiddle111281 {
            padding-top: 20px;
        }

        #module111281 .formMiddle111281 {
            padding-left: 5px;
        }

        #module111281 .formMiddle111281 {
            padding-right: 5px;
        }

        #module111281 {
            width: 273px;
        }

        #module111281 .formBanner111281 {
            display: none;
        }

        #module111280 .formMiddle111280 {
            padding-bottom: 20px;
        }

        #module111280 .formMiddle111280 {
            padding-top: 20px;
        }

        #module111280 .formMiddle111280 {
            padding-left: 5px;
        }

        #module111280 .formMiddle111280 {
            padding-right: 5px;
        }

        #module111280 {
            z-index: 501;
        }

        #module111280 .formBanner111280 {
            display: none;
        }

        #module111279 .formMiddle111279 {
            padding-bottom: 20px;
        }

        #module111279 .formMiddle111279 {
            padding-top: 20px;
        }

        #module111279 .formMiddle111279 {
            padding-left: 0px;
        }

        #module111279 .formMiddle111279 {
            padding-right: 0px;
        }

        #module111279 {
            width: 273px;
        }

        #module111279 .formBanner111279 {
            display: none;
        }

        #module111278 {
            border-style: solid;
        }

        #module111278 {
            border-color: rgba(169, 169, 169, 1);
        }

        #module111278 {
            border-bottom-width: 1px;
        }

        #module111278 {
            border-top-width: 0px;
        }

        #module111278 {
            border-left-width: 0px;
        }

        #module111278 {
            border-right-width: 0px;
        }

        #module111278 .formMiddle111278 {
            padding-bottom: 10px;
        }

        #module111278 .formMiddle111278 {
            padding-top: 20px;
        }

        #module111278 .formMiddle111278 {
            padding-left: 0px;
        }

        #module111278 .formMiddle111278 {
            padding-right: 0px;
        }

        #module111278 {
            width: 1098px;
        }

        #module111278 .formBanner111278 {
            display: none;
        }

        #module111271 .formMiddle111271 {
            padding-bottom: 0px;
        }

        #module111271 .formMiddle111271 {
            padding-top: 15px;
        }

        #module111271 .formMiddle111271 {
            padding-left: 0px;
        }

        #module111271 .formMiddle111271 {
            padding-right: 0px;
        }

        #module111276 .formMiddle111276 {
            padding-bottom: 0px;
        }

        #module111276 .formMiddle111276 {
            padding-top: 30px;
        }

        #module111276 .formMiddle111276 {
            padding-left: 0px;
        }

        #module111276 .formMiddle111276 {
            padding-right: 0px;
        }

        #module111276 .formBanner111276 {
            display: none;
        }

        #module111269 .formMiddle111269 {
            padding-bottom: 0px;
        }

        #module111269 .formMiddle111269 {
            padding-top: 30px;
        }

        #module111269 .formMiddle111269 {
            padding-left: 0px;
        }

        #module111269 .formMiddle111269 {
            padding-right: 0px;
        }

        #module111271 .formBanner111271 {
            display: none;
        }

        #module111269 .formBanner111269 {
            display: none;
        }

        #module111268 .formMiddle111268 {
            padding-bottom: 10px;
        }

        #module111268 .formMiddle111268 {
            padding-top: 50px;
        }

        #module111268 .formMiddle111268 {
            padding-left: 0px;
        }

        #module111268 .formMiddle111268 {
            padding-right: 0px;
        }

        #module111268 {
            background: rgba(0, 0, 0, 0) url(home/static/images/wkgbs1s7b4camfftaaanogrineg513.png) no-repeat center center;
        }

        #module111268 .formMiddleContent111268 {
            background: none;
        }

        #module111268 .formMiddle111268 .formMiddleCenter111268 {
            background: none;
        }

        #module111268 .formMiddle111268 {
            background: none;
        }

        #module111268 {
            width: 1098px;
        }

        #module111268 .formBanner111268 {
            display: none;
        }

        #module111266 {
            width: 1901px;
        }

        #module111266 .formBanner111266 {
            display: none;
        }

        #module111280 {
            width: 265px;
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
                <div class="row-fluid-1 ui-resizable-disabled ui-state-disabled clearfix" id="row53531"
                     _heightstatus="2">
                    <div class="span12">
                        <div id="module111266" style="" class="form pic_module form111266 modulePattern0">
                            <div style="box-sizing:border-box;">

                                <div class="formMiddle formMiddle111266  hover_style00">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="/home/static/picture/wKgBTFrgyPeAGjrNAAXxmZtPPDQ104.png"
                                                 id="111266preImg1" height="400" width="1920">


                                        </a>
                                        <form id="jvForm111266" action="" labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111266">
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
                                                   value="/home/static/picture/wKgBTFrgyPeAGjrNAAXxmZtPPDQ104.png"
                                                   id="uploadImgPath111266">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111266" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111266" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111266" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111266" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111266" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111266" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111266" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111266" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111266" value="1">
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
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row94892" _heightstatus="2">
                    <div class="span12">
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row77085" _heightstatus="2">
                    <div class="span12">
                        <div id="module111268" class="form text_list form111268 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111268" type="text/css">
                                    #module111268.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111268.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111268">
                                    <div class="formBannerTitle formBannerTitle111268">
                                        <div id="bigg" class="titleText titleText111268" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111268">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111268" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($('#111268-moduleLayer .operate-inner'));">
                                        <div style="text-align: center;"><span
                                                    style="color: rgb(57, 57, 160); font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-size: 27px; text-align: center;">联系我们</span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111268" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111268" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111268" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111268" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111268" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111268" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111268" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111268" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111268" value="1">
                            </form>
                        </div>
                        <div id="module111276" class="form text_list form111276 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111276" type="text/css">
                                    #module111276.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111276.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111276">
                                    <div class="formBannerTitle formBannerTitle111276">
                                        <div id="bigg" class="titleText titleText111276" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111276">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111276" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($('#111276-moduleLayer .operate-inner'));">
                                        <div style="text-align: center;"><span style="line-height:300%;"><span
                                                        style="font-size:16px;"><span data-v-3c4f858a="" data-group="0" style="font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; box-sizing: border-box;">
                                                       {!! $info->content !!}
                                                    </span>
                                                </span></span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111276" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111276" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111276" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111276" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111276" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111276" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111276" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111276" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111276" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row13524" _heightstatus="2">
                    <div class="span6">
                        <div id="module111271" class="form text_list form111271 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111271" type="text/css">
                                    #module111271.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111271.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111271">
                                    <div class="formBannerTitle formBannerTitle111271">
                                        <div id="bigg" class="titleText titleText111271" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111271">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111271" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($('#111271-moduleLayer .operate-inner'));">
                                        <span style="line-height:250%;"><span style="line-height:500%;"><span
                                                        style="color:#3939a0;"><span style="font-size:26px;"><span
                                                                style="font-family:微软雅黑;">励致达科技</span></span></span></span><span
                                                    style="font-size:15px;"><span style="font-family:微软雅黑;"><br><br
                                                            style="font-family: 微软雅黑; font-size: 15px;"><span
                                                            style="font-family: 微软雅黑; font-size: 15px;">联系：{{ $wechat }} （Wechat）</span><br
                                                            style="font-family: 微软雅黑; font-size: 15px;"><span
                                                            style="font-family: 微软雅黑; font-size: 15px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{ $qq }}&nbsp; &nbsp; &nbsp;（QQ）<br></span>电话：{{ $tel }}<br>邮箱：{{ $email }}<br>地址：{{ $site_address }}</span></span></span>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111271" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111271" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111271" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111271" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111271" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111271" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111271" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111271" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111271" value="1">
                            </form>
                        </div>
                    </div>
                    <div class="span6">
                        <div id="module111269" style="" class="form form111269 modulePattern0">
                            <div>
                                <style id="styleModuleTest111269" type="text/css">
                                    #module111269.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111269.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111269">
                                    <div class="formBannerTitle formBannerTitle111269">
                                        <div id="bigg" class="titleText titleText111269" channelname="0">
                                            <div class="title_zcont">
                                                在线地图
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111269">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111269 list_main_b">
                                    <iframe width="550" height="300"
                                            src="http://www.lizhidasz.com/map"
                                            scrolling="no" frameborder="0" name="mapframe"></iframe>
                                </div>
                            </div>
                            <form id="jvForm111269" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111269" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111269" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111269" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111269" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111269" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111269" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111269" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111269" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row34592" _heightstatus="2">
                    <div class="span12">
                        <div id="module111278" class="form text_list form111278 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111278" type="text/css">
                                    #module111278.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111278.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111278">
                                    <div class="formBannerTitle formBannerTitle111278">
                                        <div id="bigg" class="titleText titleText111278" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111278">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111278" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($('#111278-moduleLayer .operate-inner'));">
                                        <span style="color: rgb(57, 57, 160); font-family: 微软雅黑; font-size: 20px;">周边环境</span><br>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111278" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111278" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111278" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111278" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111278" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111278" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111278" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111278" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111278" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row27005" _heightstatus="2">
                    <div class="span41">
                        <div id="module111279" style="" class="form pic_module form111279 modulePattern0">
                            <div style="box-sizing:border-box;">

                                <div class="formMiddle formMiddle111279  hover_style00">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="/home/static/picture/wKgBS1rgyT2AYh50AAHmf-VofQM654.png"
                                                 id="111279preImg1" height="200" width="265">


                                        </a>
                                        <form id="jvForm111279" action="" labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111279">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="1">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="265" id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="200"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value="/home/static/picture/wKgBS1rgyT2AYh50AAHmf-VofQM654.png"
                                                   id="uploadImgPath111279">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111279" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111279" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111279" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111279" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111279" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111279" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111279" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111279" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111279" value="1">
                            </form>

                        </div>
                    </div>
                    <div class="span41" _floatmodule="111280">
                        <div id="module111280" _float="1"
                             style="left:0px;top:0px;position: absolute;;width:264px;height:240px;"
                             class="form pic_module form111280 modulePattern0">
                            <div style="height:100%;box-sizing:border-box;">

                                <div class="formMiddle formMiddle111280  hover_style00" style="height:100%;">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="/home/static/picture/wKgBS1rgyTaAE4r5AAFdNpLyjlU303.png"
                                                 id="111280preImg1" width="100%" height="100%">


                                        </a>
                                        <form id="jvForm111280" action="" labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111280">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="2">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="264" id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="240"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value="/home/static/picture/wKgBS1rgyTaAE4r5AAFdNpLyjlU303.png"
                                                   id="uploadImgPath111280">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111280" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111280" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111280" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111280" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111280" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111280" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111280" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111280" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111280" value="1">
                            </form>

                        </div>
                    </div>
                    <div class="span41">
                        <div id="module111281" style="" class="form pic_module form111281 modulePattern0">
                            <div style="box-sizing:border-box;">

                                <div class="formMiddle formMiddle111281  hover_style00">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="/home/static/picture/wKgBTFrgyTeAZh-7AAGak4-nGsI961.png"
                                                 id="111281preImg1" height="200" width="265">


                                        </a>
                                        <form id="jvForm111281" action="" labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111281">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="1">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="265" id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="200"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value="/home/static/picture/wKgBTFrgyTeAZh-7AAGak4-nGsI961.png"
                                                   id="uploadImgPath111281">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111281" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111281" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111281" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111281" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111281" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111281" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111281" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111281" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111281" value="1">
                            </form>

                        </div>
                    </div>
                    <div class="span41">
                        <div id="module111282" style="" class="form pic_module form111282 modulePattern0">
                            <div style="box-sizing:border-box;">

                                <div class="formMiddle formMiddle111282  hover_style00">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="/home/static/picture/wKgBTFrgyTaAW3_aAAEj_arRyyg165.png"
                                                 id="111282preImg1" height="200" width="265">


                                        </a>
                                        <form id="jvForm111282" action="" labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111282">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="1">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="265" id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="200"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value="/home/static/picture/wKgBTFrgyTaAW3_aAAEj_arRyyg165.png"
                                                   id="uploadImgPath111282">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111282" action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111282" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111282" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111282" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111282" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111282" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111282" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111282" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111282" value="1">
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