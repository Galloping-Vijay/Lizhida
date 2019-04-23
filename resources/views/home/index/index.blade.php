@extends('layouts.app')

@section('title', '励致达')

@section('head')
    @parent
@show

@section('style')
    <style id="stylemodule" type="text/css">
        #module111221 {width:200px ;}
        #module111221 {z-index:502;}
        #module111221 .formBanner111221{display:none;}
        #module111215 {z-index:501;}
        #modulenav228a00001 .itemSelected .itemName0{color:rgba(57,57,160,1);}
        #modulenav228a00001 .itemHover .itemName0{color:rgba(57,57,160,1);}
        #modulenav228a00001 .itemName0{font-size:16px;}
        #modulenav228a00001 .mainnav{height:80px;}
        #modulenav228a00001 .navCenterContent{height:80px;}
        #modulenav228a00001 .navCenter{height:80px;}
        #modulenav228a00001 .itemContainer{height:80px;}
        #modulenav228a00001 {height:px;}
        #modulenav228a00001 .navCenter a{line-height:80px;}
        #webBannerbk{height:80px;}
        #logo_picture img{width:100%;}
        #logo_picture img{height:100%;}
        #logo_picture{width:115.26829268292683px;}
        #logo_picture{height:34px;}
        #navigationBox1181{width:1000px;}
        #modulenav228a00001 {width:0px;}
        #modulenav228a00001 .navContent{width:0px;}
        #modulenav228a00001 .navCenter{width:0;}
        #logo_picture{left:0px;}
        #logo_picture{position:absolute;}
        #webFooterbk{background:rgba(57,57,160,1);}
        #webFooterbk #design_foot{font-family:微软雅黑;}
        #webFooterbk #design_foot{font-size:14px;}
        #webFooterbk #design_foot{color:rgba(255, 255, 255,1);}
        #webFooterbk #design_foot a{font-family:微软雅黑;}
        #webFooterbk #design_foot a{font-size:14px;}
        #webFooterbk #design_foot a{color:rgba(255, 255, 255,1);}
        #webFooterbk #design_foot a:hover{color:rgba(255, 255, 255,1);}
        #webFooterbk #design_foot{padding-top:200px;}
        #webFooterbk #design_foot{padding-bottom:0px;}
        #webFooterbk #design_foot{padding-left:0px;}
        #webFooterbk #design_foot{padding-right:0px;}
        #module111215 .formBanner111215{display:none;}
        #module111215 {width:233px ;}
        #module111215 .formMiddle111215{background:none;}
        #module111215 .formMiddle111215 .formMiddleCenter111215{background:none;}
        #module111215 .formMiddleContent111215{background:none;}
        #modulenav228a00001 {left:430px;}
        #modulenav228a00001 {top:-79px;}
        #multilanguage{left:984px;}
        #multilanguage{position:absolute;}
        #multilanguage{top:22px;}
        #undefined {height:300px;}
        #module111201 .formMiddle111201{padding-bottom:30px;}
        #module111201 .formMiddle111201{padding-top:20px;}
        #module111201 .formMiddle111201{padding-left:0px;}
        #module111201 .formMiddle111201{padding-right:0px;}
        #module111201 {padding-bottom:0px;}
        #module111201 {padding-top:0px;}
        #module111201 {padding-left:0px;}
        #module111201 {padding-right:0px;}
        #module111201 {margin-bottom:0px;}
        #module111201 {margin-top:0px;}
        #module111201 {margin-left:0px;}
        #module111201 {margin-right:0px;}
        #module111201 {height:100%;}
        #module111201 .formBanner111201{display:none;}
        #module111200 .formMiddle111200{padding-bottom:10px;}
        #module111200 .formMiddle111200{padding-top:50px;}
        #module111200 .formMiddle111200{padding-left:0px;}
        #module111200 .formMiddle111200{padding-right:0px;}
        #module111200 {background:rgba(0, 0, 0,0) url(home/static/images/wkgbs1s7b4cawutdaaakhnkqsw4079.png)  no-repeat center center ;}
        #module111200 .formMiddleContent111200{background:none;}
        #module111200 .formMiddle111200 .formMiddleCenter111200{background:none;}
        #module111200 .formMiddle111200{background:none;}
        #module111200 {width:1098px ;}
        #module111200 .formBanner111200{display:none;}
        #module111188 {z-index:509;}
        #module111093 .formMiddle111093{padding-bottom:10px;}
        #module111093 .formMiddle111093{padding-top:50px;}
        #module111093 .formMiddle111093{padding-left:0px;}
        #module111093 .formMiddle111093{padding-right:0px;}
        #module111093 {background:rgba(0, 0, 0,0) url(home/static/images/wkgbs1s7b2yaaellaaanrjrcbim495.png)  no-repeat center center ;}
        #module111093 .formMiddleContent111093{background:none;}
        #module111093 .formMiddle111093 .formMiddleCenter111093{background:none;}
        #module111093 .formMiddle111093{background:none;}
        #module111093 .formBanner111093{display:none;}
        #module110887 .formBanner110887{display:none;}
        #module110887 .formMiddle110887{padding-right:0px;}
        #module110887 .formMiddle110887{padding-left:0px;}
        #module110887 .formMiddle110887{padding-top:50px;}
        #module110887 .formMiddle110887{padding-bottom:10px;}
        #module110976 .formBanner110976{display:none;}
        #module110976 {margin-right:0px;}
        #module110976 {margin-left:0px;}
        #module110976 {margin-top:0px;}
        #module110976 {margin-bottom:0px;}
        #module110976 {padding-right:0px;}
        #module110976 {padding-left:0px;}
        #module110976 {padding-top:0px;}
        #module110976 {padding-bottom:0px;}
        #module110976 .formMiddle110976{padding-right:0px;}
        #module110976 .formMiddle110976{padding-left:0px;}
        #module110976 .formMiddle110976{padding-top:30px;}#module110976 .formMiddle110976{padding-bottom:0px;}
        #module111101 .formBanner111101{display:none;}
        #module111101 {width:1901px ;}
        #module111101 {z-index:501;}
        #module111102 .formBanner111102{display:none;}
        #module111102 {width:1901px ;}
        #module111102 {z-index:502;}
        #module111103 .formBanner111103{display:none;}
        #module111103 {width:1901px ;}
        #module111103 {z-index:503;}
        #module111104 .formBanner111104{display:none;}
        #module111104 {width:1901px ;}
        #module111104 {z-index:504;}
        #module111105 .formBanner111105{display:none;}
        #module111105 {width:1901px ;}
        #module111105 {z-index:505;}
        #module111106 .formBanner111106{display:none;}
        #module111106 {width:1901px ;}
        #module111106 {z-index:506;}
        #module111093 {width:1098px ;}
        #module111108 .formBanner111108{display:none;}
        #module111108 {width:1098px ;}
        #module111108 .formMiddle111108{background:none;}
        #module111108 .formMiddle111108 .formMiddleCenter111108{background:none;}
        #module111108 .formMiddleContent111108{background:none;}
        #module111108 {background:#fff url(home/static/images/wkgbs1s7b4camfftaaanogrineg513.png)  no-repeat center center ;}
        #module111108 .formMiddle111108{padding-right:0px;}
        #module111108 .formMiddle111108{padding-left:0px;}
        #module111108 .formMiddle111108{padding-top:50px;}
        #module111108 .formMiddle111108{padding-bottom:10px;}
        #module111113 .formBanner111113{display:none;}
        #module111113 {border-right-width:5px;}
        #module111113 {border-left-width:5px;}
        #module111113 {border-top-width:5px;}
        #module111113 {border-bottom-width:5px;}
        #module111113 {border-color:rgba(57,57,160,1);}
        #module111113 {border-style:solid;}
        #module111113 {height:384px;}
        #module111113 {width:190px ;}
        #module111115 .formBanner111115{display:none;}
        #module111115 {height:394px;}
        #module111115 .formMiddle111115{background:none;}
        #module111115 .formMiddle111115 .formMiddleCenter111115{background:none;}
        #module111115 .formMiddleContent111115{background:none;}
        #module111115 {background:rgba(57,57,160,1);}
        #module111115 {width:350px ;}
        #module111113 {z-index:100;}
        #module111115 {z-index:501;}
        #module111116 .formBanner111116{display:none;}
        #module111116 {width:548px ;}
        #module111116 {z-index:502;}
        #module111120 .formBanner111120{display:none;}
        #module111120 {width:570px ;}
        #module111121 {width:160px ;}
        #module111121 {z-index:503;}
        #module111126 .formBanner111126{display:none;}
        #module111126 {width:1901px ;}
        #module111126 .formMiddle111126{background:none;}
        #module111126 .formMiddle111126 .formMiddleCenter111126{background:none;}
        #module111126 .formMiddleContent111126{background:none;}
        #module111126 {background:rgba(0, 0, 0,0) url(home/static/images/wkgbs1s7b2yaaw-qaaanrmfkibs925.png)  no-repeat center center ;}
        #module111126 .formMiddle111126{padding-right:0px;}
        #module111126 .formMiddle111126{padding-left:0px;}
        #module111126 .formMiddle111126{padding-top:50px;}
        #module111126 .formMiddle111126{padding-bottom:10px;}
        #module111185 .formBanner111185{display:none;}
        #module111185 {z-index:501;}
        #module111186 .formBanner111186{display:none;}
        #module111186 {z-index:502;}
        #module111187 .formBanner111187{display:none;}
        #module111187 {z-index:503;}
        #module111188 .formBanner111188{display:none;}
        #module111185 {width:100px ;}
        #module111186 {width:100px ;}
        #module111187 {width:100px ;}
        #module111188 {width:100px ;}
        #module111190 .formBanner111190{display:none;}
        #module111190 {z-index:505;}
        #module111190 {width:257px ;}
        #module111194 .formBanner111194{display:none;}
        #module111194 {width:1901px ;}
        #module111194 {z-index:506;}
        #module111195 .formBanner111195{display:none;}
        #module111195 {width:1901px ;}
        #module111195 {z-index:507;}
        #module111196 .formBanner111196{display:none;}
        #module111196 {width:1901px ;}
        #module111196 {z-index:508;}
        #module110887 {width:1098px ;}
        #module111104 .formMiddle111104{background:none;}
        #module111104 .formMiddle111104 .formMiddleCenter111104{background:none;}
        #module111104 .formMiddleContent111104{background:none;}
        #module111106 .formMiddle111106{background:none;}
        #module111106 .formMiddle111106 .formMiddleCenter111106{background:none;}
        #module111106 .formMiddleContent111106{background:none;}
        #module111105 .formMiddle111105{background:none;}
        #module111105 .formMiddle111105 .formMiddleCenter111105{background:none;}
        #module111105 .formMiddleContent111105{background:none;}
        #module111113 .formMiddle111113{background:none;}
        #module111113 .formMiddle111113 .formMiddleCenter111113{background:none;}
        #module111113 .formMiddleContent111113{background:none;}
        #module111190 .formMiddle111190{background:none;}
        #module111190 .formMiddle111190 .formMiddleCenter111190{background:none;}
        #module111190 .formMiddleContent111190{background:none;}
        #module111195 .formMiddle111195{background:none;}
        #module111195 .formMiddle111195 .formMiddleCenter111195{background:none;}
        #module111195 .formMiddleContent111195{background:none;}
        #module111196 .formMiddle111196{background:none;}
        #module111196 .formMiddle111196 .formMiddleCenter111196{background:none;}
        #module111196 .formMiddleContent111196{background:none;}
        #module111194 .formMiddle111194{background:none;}
        #module111194 .formMiddle111194 .formMiddleCenter111194{background:none;}
        #module111194 .formMiddleContent111194{background:none;}
        #row7801 {background-image:url(home/static/images/wkgbs1s7b22avtwiaaopfnxnujm766.jpg);}
        #row7801 {background-position:center center;}
        #row7801 {background-repeat:no-repeat;}
        #row32613 {height:300px;}
        #row76590 {background-repeat:no-repeat;}
        #row76590 {background-position:center center;}
        #row76590 {background-image:url(home/static/images/wkgbs1s7b22alskxaaalp8mgg-0853.png);}
        #row7801 {height:402px;}
        #row92 >div[class^='span']:nth-child(1){width:52%;}
        #row92 >div[class^='span']:nth-child(2){width:48%;}
        #row92 {height:471px;}
        #row44085 {background-repeat:no-repeat;}
        #row44085 {background-position:center center;}
        #row44085 {background-image:url(home/static/images/wkgbs1s7b22afxbeaaiqszs2qfw225.jpg);}
        #row44085 {height:561px;}
    </style>
@endsection

@section('nav')
    @parent

@endsection

@section('content')
    <div id="demoMain">
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid-1 hfbgcss ui-resizable-disabled ui-state-disabled clearfix" id="hfbg"
                     _heightstatus="2">
                    <div class="span12">
                        <div class="form form110886 bannerstyle11 modulePattern0 bannercss3" id="module110886" style="">
                            <div id="picBox" class="sliderBox swiper-container" style="height: 650px">
                                <!-- banner图 -->
                                <div id="show_banner" class="swiper-wrapper" index="110886">
                                    <div id="banner5ad5ce62a310c794cd2d7118" class="swiper-slide swiper-no-swiping "
                                         style="background: url(/home/static/images/wkgbs1rgyxmafq5aaabajdcdha4321.jpg) center center no-repeat; width:100%; height:650px;"
                                         img_src="/home/static/images/wkgbs1rgyxmafq5aaabajdcdha4321.jpg"
                                         banner_id="5ad5ce62a310c794cd2d7118" advertising_id="35293" custom_flg="1"
                                         onclick="tiaozhuan(&#39;&#39;)"></div>
                                </div>
                                <!-- 分页符样式 01 -->
                                <div class="swiper-pagination pagination pagination_02"></div>
                                <!-- 分页符样式 03 -->
                                <!-- 横幅特效 -->
                                <!--  -->
                            </div>

                        </div>

                    </div>
                    <div class="float_div_class">
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row6896" _heightstatus="2">
                    <div class="span12">
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row76590" _heightstatus="2">
                    <div class="span12">
                        <div id="module110887" class="form text_list form110887 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest110887" type="text/css">
                                    #module110887.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module110887.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner110887">
                                    <div class="formBannerTitle formBannerTitle110887">
                                        <div id="bigg" class="titleText titleText110887" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore110887">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle110887" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($(&#39;#110887-moduleLayer .operate-inner&#39;));">
                                        <div style="text-align: center;"><span style="line-height:200%;"><span
                                                        style="color:#3939a0;"><span style="font-size:27px;"><span
                                                                style="font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal;"><span
                                                                    style="color: rgb(57, 57, 160); font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-size: 27px; text-align: center;">产品展示</span></span></span></span></span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm110887"
                                  action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima110887" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue110887" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger110887" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed110887" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity110887" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima110887" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue110887" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText110887" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row49954" _heightstatus="2">
                    <div class="span12">
                        <div id="module110976" style="" class="form form110976 product_module modulePattern0">
                            <div>
                                <style id="styleModuleTest110976">
                                    #module110976.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module110976.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner110976">
                                    <div class="formBannerTitle formBannerTitle110976">
                                        <div class="titleText titleText110976">
                                            产品展示
                                        </div>
                                        <div class="formBannerMore formBannerMore110976">
                                        </div>
                                    </div>
                                </div>
                                <ul class="formMiddle formMiddle110976 c-prolist27">
                                    <li class="formMiddleContent formMiddleContent110976 contentLine ">
                                        <a href="">
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
                                    <li class="formMiddleContent formMiddleContent110976 contentLine ">
                                        <a href="/">
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
                                    <li class="formMiddleContent formMiddleContent110976 contentLine c-lastpro ">
                                        <a href="/">
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
                                    <li class="formMiddleContent formMiddleContent110976 contentLine ">
                                        <a href="/">
                                            <div class="c-img">
                                                <img alt="金属导体行业反渗透设备、去离子水设备"
                                                     src="home/static/picture/wkgbs1rgyxmagvalaaa0jer4lzy993.jpg"
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
                                    <li class="formMiddleContent formMiddleContent110976 contentLine ">
                                        <a href="/">
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
                                    <li class="formMiddleContent formMiddleContent110976 contentLine c-lastpro ">
                                        <a href="/">
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
                                </ul>
                                <div class="clearfloat"></div>
                            </div>
                            <form id="jvForm110976"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima110976" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue110976" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger110976" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed110976" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity110976" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima110976" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue110976" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText110976" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row38548" _heightstatus="2">
                    <div class="span12">
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid-1 clearfix" id="row7801">
                    <div class="span12" _floatmodule="111102,111103,111101,111104,111105,111106">
                        <div id="module111093" class="form text_list form111093 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111093" type="text/css">
                                    #module111093.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111093.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111093">
                                    <div class="formBannerTitle formBannerTitle111093">
                                        <div id="bigg" class="titleText titleText111093" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111093">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111093" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($(&#39;#111093-moduleLayer .operate-inner&#39;));">
                                        <div style="text-align: center;"><span style="color:#ffffff;"><span
                                                        style="font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-size: 27px; text-align: center;">营业范围</span></span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111093"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111093" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111093" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111093" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111093" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111093" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111093" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111093" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111093" value="1">
                            </form>
                        </div>
                    </div>
                    <div class="float_div_class">
                        <div id="module111104" _float="1"
                             style="left:99px;top:322px;position: absolute;height:41px;width:142px;"
                             class="form text_list form111104 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111104" type="text/css">
                                    #module111104.modulePattern17401 .titleText {
                                        color: #0cf;
                                    }

                                    #module111104.modulePattern17401 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111104.modulePattern17402 .titleText {
                                        color: #0cf;
                                    }

                                    #module111104.modulePattern17403 .titleText {
                                        border-left-color: #0cf;
                                        color: #0cf;
                                    }

                                    #module111104.modulePattern17404 .formBanner {
                                        background: #0cf;
                                    }

                                    #module111104.modulePattern17405 .titleText {
                                        color: #0cf;
                                    }

                                    #module111104.modulePattern17405 .titleText:after {
                                        border-left-color: #0cf;
                                    }

                                    #module111104.modulePattern17406 .titleText {
                                        background: #0cf;
                                    }

                                    #module111104.modulePattern17406 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111104.modulePattern17407 .titleText {
                                        background: #0cf;
                                    }

                                    #module111104.modulePattern17407 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111104.modulePattern17408 .titleText {
                                        color: #0cf;
                                    }

                                    #module111104.modulePattern17409 .titleText {
                                        color: #0cf;
                                    }

                                    #module111104.modulePattern17410 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111104.modulePattern17410 .titleText {
                                        color: #0cf;
                                    }

                                    #module111104.modulePattern17411 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111104.modulePattern17412 .titleText {
                                        border-color: #0cf;
                                    }

                                    #module111104.modulePattern17413 .titleText {
                                        background: #0cf;
                                    }
                                </style>
                                <div class="formBanner formBanner111104">
                                    <div class="formBannerTitle formBannerTitle111104">
                                        <div id="bigg" class="titleText titleText111104" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111104">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111104" style="width: 100%;height: 100%;">
                                    <div class="ztextbox" style="width: 100%;height: 100%;"
                                         ondblclick="Site.editTextStyle($(&#39;#111104-moduleLayer .operate-inner&#39;));">

                                        <div style="text-align: center;"><span style="color:#ffffff;"><span
                                                        style="font-family:微软雅黑;"><span style="font-size:21px;"><span
                                                                style="font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 21px;">产品开发</span></span></span></span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111104"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111104" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111104" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111104" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111104" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111104" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111104" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111104" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111104" value="1">
                            </form>
                        </div>
                        <div id="module111103" _float="1"
                             style="left:873px;top:153px;position: absolute;;width:150px;height:150px;"
                             class="form pic_module form111103 modulePattern0">
                            <div style="height:100%;box-sizing:border-box;">

                                <div class="formMiddle formMiddle111103  hover_style00" style="height:100%;">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="home/static/picture/wkgbtfrgytoajtraaaahlv4jrha845.png"
                                                 id="111103preImg1" width="100%" height="100%">


                                        </a>
                                        <form id="jvForm111103"
                                              action="/"
                                              labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111103">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="1">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="150" id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="150"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value="/home/static/images/wKgBTFrgyTOAJtrAAAAhLV4jrhA845.png"
                                                   id="uploadImgPath111103">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111103"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111103" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111103" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111103" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111103" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111103" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111103" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111103" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111103" value="1">
                            </form>

                        </div>
                        <div id="module111102" _float="1"
                             style="left:477px;top:151px;position: absolute;;width:150px;height:150px;"
                             class="form pic_module form111102 modulePattern0">
                            <div style="height:100%;box-sizing:border-box;">

                                <div class="formMiddle formMiddle111102  hover_style00" style="height:100%;">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="home/static/picture/wkgbtfrgytoahnvdaaaaaz5zfca187.png"
                                                 id="111102preImg1" width="100%" height="100%">


                                        </a>
                                        <form id="jvForm111102"
                                              action="/"
                                              labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111102">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="1">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="150" id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="150"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value="/home/static/images/wKgBTFrgyTOAHnVDAAAaaZ5ZFCA187.png"
                                                   id="uploadImgPath111102">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111102"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111102" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111102" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111102" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111102" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111102" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111102" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111102" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111102" value="1">
                            </form>

                        </div>
                        <div id="module111106" _float="1"
                             style="left:882px;top:321px;position: absolute;height:43px;width:142px;"
                             class="form text_list form111106 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111106" type="text/css">
                                    #module111106.modulePattern17401 .titleText {
                                        color: #0cf;
                                    }

                                    #module111106.modulePattern17401 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111106.modulePattern17402 .titleText {
                                        color: #0cf;
                                    }

                                    #module111106.modulePattern17403 .titleText {
                                        border-left-color: #0cf;
                                        color: #0cf;
                                    }

                                    #module111106.modulePattern17404 .formBanner {
                                        background: #0cf;
                                    }

                                    #module111106.modulePattern17405 .titleText {
                                        color: #0cf;
                                    }

                                    #module111106.modulePattern17405 .titleText:after {
                                        border-left-color: #0cf;
                                    }

                                    #module111106.modulePattern17406 .titleText {
                                        background: #0cf;
                                    }

                                    #module111106.modulePattern17406 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111106.modulePattern17407 .titleText {
                                        background: #0cf;
                                    }

                                    #module111106.modulePattern17407 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111106.modulePattern17408 .titleText {
                                        color: #0cf;
                                    }

                                    #module111106.modulePattern17409 .titleText {
                                        color: #0cf;
                                    }

                                    #module111106.modulePattern17410 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111106.modulePattern17410 .titleText {
                                        color: #0cf;
                                    }

                                    #module111106.modulePattern17411 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111106.modulePattern17412 .titleText {
                                        border-color: #0cf;
                                    }

                                    #module111106.modulePattern17413 .titleText {
                                        background: #0cf;
                                    }
                                </style>
                                <div class="formBanner formBanner111106">
                                    <div class="formBannerTitle formBannerTitle111106">
                                        <div id="bigg" class="titleText titleText111106" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111106">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111106" style="width: 100%;height: 100%;">
                                    <div class="ztextbox" style="width: 100%;height: 100%;"
                                         ondblclick="Site.editTextStyle($(&#39;#111106-moduleLayer .operate-inner&#39;));">

                                        <div style="text-align: center;"><span style="color:#ffffff;"><span
                                                        style="font-size:21px;"><span style="font-family:微软雅黑;"><span
                                                                style="font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 21px;">支持服务</span></span></span></span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111106"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111106" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111106" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111106" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111106" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111106" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111106" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111106" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111106" value="1">
                            </form>
                        </div>
                        <div id="module111101" _float="1"
                             style="left:96px;top:152px;position: absolute;;width:150px;height:150px;"
                             class="form pic_module form111101 modulePattern0">
                            <div style="height:100%;box-sizing:border-box;">

                                <div class="formMiddle formMiddle111101  hover_style00" style="height:100%;">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="home/static/picture/wkgbtfrgytoasn7jaaacz_gnwzw812.png"
                                                 id="111101preImg1" width="100%" height="100%">


                                        </a>
                                        <form id="jvForm111101"
                                              action="/"
                                              labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111101">
                                            <input type="hidden" name="moduleId" value="351">
                                            <input type="hidden" name="attr_imageLink" value="">
                                            <input type="hidden" name="attr_linkTarget" value="1">
                                            <input type="hidden" name="attr_urlType" value="">
                                            <input type="hidden" name="attr_shapetype" value="">
                                            <input type="hidden" name="attr_imageWidth" value="150" id="attrImageWidht">
                                            <input type="hidden" name="attr_imageHeight" value="150"
                                                   id="attrImageHeight">

                                            <input type="hidden" name="attr_imageInitialWidth" value="400"
                                                   id="attrImageInitialWidht">
                                            <input type="hidden" name="attr_imageInitialHeight" value="400"
                                                   id="attrImageInitialHeight">

                                            <input type="hidden" name="attr_imageUrl"
                                                   value="/home/static/images/wKgBTFrgyTOASN7jAAAcz_GnWzw812.png"
                                                   id="uploadImgPath111101">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111101"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111101" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111101" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111101" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111101" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111101" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111101" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111101" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111101" value="1">
                            </form>

                        </div>
                        <div id="module111105" _float="1"
                             style="left:496px;top:324px;position: absolute;height:36px;width:124px;"
                             class="form text_list form111105 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111105" type="text/css">
                                    #module111105.modulePattern17401 .titleText {
                                        color: #0cf;
                                    }

                                    #module111105.modulePattern17401 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111105.modulePattern17402 .titleText {
                                        color: #0cf;
                                    }

                                    #module111105.modulePattern17403 .titleText {
                                        border-left-color: #0cf;
                                        color: #0cf;
                                    }

                                    #module111105.modulePattern17404 .formBanner {
                                        background: #0cf;
                                    }

                                    #module111105.modulePattern17405 .titleText {
                                        color: #0cf;
                                    }

                                    #module111105.modulePattern17405 .titleText:after {
                                        border-left-color: #0cf;
                                    }

                                    #module111105.modulePattern17406 .titleText {
                                        background: #0cf;
                                    }

                                    #module111105.modulePattern17406 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111105.modulePattern17407 .titleText {
                                        background: #0cf;
                                    }

                                    #module111105.modulePattern17407 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111105.modulePattern17408 .titleText {
                                        color: #0cf;
                                    }

                                    #module111105.modulePattern17409 .titleText {
                                        color: #0cf;
                                    }

                                    #module111105.modulePattern17410 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111105.modulePattern17410 .titleText {
                                        color: #0cf;
                                    }

                                    #module111105.modulePattern17411 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111105.modulePattern17412 .titleText {
                                        border-color: #0cf;
                                    }

                                    #module111105.modulePattern17413 .titleText {
                                        background: #0cf;
                                    }
                                </style>
                                <div class="formBanner formBanner111105">
                                    <div class="formBannerTitle formBannerTitle111105">
                                        <div id="bigg" class="titleText titleText111105" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111105">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111105" style="width: 100%;height: 100%;">
                                    <div class="ztextbox" style="width: 100%;height: 100%;"
                                         ondblclick="Site.editTextStyle($(&#39;#111105-moduleLayer .operate-inner&#39;));">

                                        <div style="text-align: center;"><span style="color:#ffffff;"><span
                                                        style="font-size:21px;"><span style="font-family:微软雅黑;"><span
                                                                style="font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 21px;">市场扩展</span></span></span></span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111105"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111105" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111105" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111105" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111105" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111105" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111105" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111105" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111105" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row30813" _heightstatus="2">
                    <div class="span12">
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row33851" _heightstatus="2">
                    <div class="span12">
                        <div id="module111108" class="form text_list form111108 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111108" type="text/css">
                                    #module111108.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111108.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111108">
                                    <div class="formBannerTitle formBannerTitle111108">
                                        <div id="bigg" class="titleText titleText111108" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111108">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111108" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($(&#39;#111108-moduleLayer .operate-inner&#39;));">
                                        <div style="text-align: center;"><span
                                                    style="color: rgb(57, 57, 160); font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-size: 27px; text-align: center;">关于我们</span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111108"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111108" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111108" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111108" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111108" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111108" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111108" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111108" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111108" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid clearfix" id="row92">
                    <div class="span6" _floatmodule="111121">
                        <div id="module111120" class="form text_list form111120 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111120" type="text/css">
                                    #module111120.modulePattern17401 .titleText {
                                        color: #0cf;
                                    }

                                    #module111120.modulePattern17401 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111120.modulePattern17402 .titleText {
                                        color: #0cf;
                                    }

                                    #module111120.modulePattern17403 .titleText {
                                        border-left-color: #0cf;
                                        color: #0cf;
                                    }

                                    #module111120.modulePattern17404 .formBanner {
                                        background: #0cf;
                                    }

                                    #module111120.modulePattern17405 .titleText {
                                        color: #0cf;
                                    }

                                    #module111120.modulePattern17405 .titleText:after {
                                        border-left-color: #0cf;
                                    }

                                    #module111120.modulePattern17406 .titleText {
                                        background: #0cf;
                                    }

                                    #module111120.modulePattern17406 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111120.modulePattern17407 .titleText {
                                        background: #0cf;
                                    }

                                    #module111120.modulePattern17407 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111120.modulePattern17408 .titleText {
                                        color: #0cf;
                                    }

                                    #module111120.modulePattern17409 .titleText {
                                        color: #0cf;
                                    }

                                    #module111120.modulePattern17410 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111120.modulePattern17410 .titleText {
                                        color: #0cf;
                                    }

                                    #module111120.modulePattern17411 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111120.modulePattern17412 .titleText {
                                        border-color: #0cf;
                                    }

                                    #module111120.modulePattern17413 .titleText {
                                        background: #0cf;
                                    }
                                </style>
                                <div class="formBanner formBanner111120">
                                    <div class="formBannerTitle formBannerTitle111120">
                                        <div id="bigg" class="titleText titleText111120" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111120">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111120" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($(&#39;#111120-moduleLayer .operate-inner&#39;));">
                                        <span style="color:#3939a0;"><strong><span style="font-size:30px;"><span
                                                            style="font-family:微软雅黑;"><span
                                                                style="line-height:300%;">PINO</span><br><span
                                                                style="line-height:200%;"></span></span></span></strong></span>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal;">
                                            <span style="line-height:250%;"><span style="font-size:15px;"><span
                                                            data-v-3c4f858a="" data-group="0" style="box-sizing: border-box;">Pino以汽车零部件技术、品牌和服务为核心竞争力。</span><span
                                                            data-v-3c4f858a="" data-group="-1" style="box-sizing: border-box;">自成立以来，<span
                                                                style="font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif;"><span
                                                                    style="font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif;">Pino</span></span>致力于以领先的技术开发产品，拓展市场和OEM服务。</span><span
                                                            data-v-3c4f858a="" data-group="-2" style="box-sizing: border-box;">目前我们的主要产品有空调系统、发动机冷却系统、汽车电子等，适用于奔驰、宝马、奥迪、路虎、捷豹等欧洲豪华车品牌，并在业内享有盛誉。</span></span></span>
                                        </p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal;">
                                            <span style="line-height:250%;"><span style="font-size:15px;"><span
                                                            data-v-3c4f858a="" data-group="1"
                                                            style="box-sizing: border-box;"></span></span></span></p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal;">
                                            <span style="line-height:250%;"><span style="font-size:15px;"><span
                                                            data-v-3c4f858a="" data-group="2"
                                                            style="box-sizing: border-box;"><span
                                                                style="font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif;">Pino</span>总部位于德国法兰克福，自2016年起进入中国市场。</span><span
                                                            data-v-3c4f858a="" data-group="1" style="box-sizing: border-box;">我们为中国市场提供世界领先的技术，中国主要汽车制造商，tier1 OEM供应商和售后市场。</span></span></span>
                                        </p><span style="color:#3939a0;"><strong><span style="font-size:30px;"><span
                                                            style="font-family:微软雅黑;"></span></span></strong></span>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111120"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111120" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111120" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111120" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111120" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111120" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111120" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111120" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111120" value="1">
                            </form>
                        </div>
                        <div id="module111121" _float="1"
                             style="left:3px;top:368px;position: absolute;height:40px;width:160px;" class="form form111121 btnstyle modulePattern0
">
                            <div style="height: 100%;">
                                <div class="buttonStyle1111121 buttonstyle_02" style="width: 100%;height: 100%;">
                                    <a href="javascript:void(0);" style="

                    width: 100%;height: 100%;line-height: 40px;
                    background-color:rgb(222, 44, 46);                        background-color:rgba(57,57,160,1);
                            background-repeat:no-repeat;
                font-size:16px;                font-family:微软雅黑;                                                                color:rgba(255, 255, 255,1);                border-color:rgba(57,57,160,1);                border-width:1px;                border-style:solid;                                "
                                       onmouseover="btn_over111121()" onmouseout="btn_out111121()">

                                        了解更多

                                    </a>
                                </div>
                                <form id="jvForm111121"
                                      action="/">
                                    <input type="hidden" name="moduleId" value="325">
                                    <input type="hidden" name="channelId" value="">
                                    <input type="hidden" name="mcId" value="111121">
                                    <input type="hidden" name="attr_name" value="按钮模块">
                                    <input type="hidden" name="attr_styleList" value="325-1">
                                    <input type="hidden" name="attr_buttonName" value="了解更多">
                                    <input type="hidden" name="attr_lianjie" value="0">
                                    <input type="hidden" name="attr_buttonSizes" value="1">
                                    <input type="hidden" name="attr_buttonTextWidth" id="buttonTextWidth" value="160">
                                    <input type="hidden" name="attr_buttonTextHeight" id="buttonTextHeight" value="40">
                                    <input type="hidden" name="attr_buttonBgColor" value="rgba(57,57,160,1)">
                                    <input type="hidden" name="attr_buttonBgColor1" value="rgba(255, 255, 255,1)">
                                    <input type="hidden" name="attr_buttonBgPicture" value="">
                                    <input type="hidden" name="attr_butstyle" value="">
                                    <input type="hidden" name="attr_buttonBgPicture1" value="">
                                    <input type="hidden" name="attr_buttonTextSize" value="16">
                                    <input type="hidden" name="attr_buttonTextFamily" value="微软雅黑">
                                    <input type="hidden" name="attr_buttonTextBold" value="false">
                                    <input type="hidden" name="attr_buttonTextI" value="false">
                                    <input type="hidden" name="attr_buttonTextU" value="false">
                                    <input type="hidden" name="attr_buttonTextColor" value="rgba(255, 255, 255,1)">
                                    <input type="hidden" name="attr_buttonTextColor1" value="rgba(57,57,160,1)">
                                    <input type="hidden" name="attr_buttonBolColor" value="rgba(57,57,160,1)">
                                    <input type="hidden" name="attr_buttonBolWidth" value="1">
                                    <input type="hidden" name="attr_buttonBolStyle" value="0">
                                    <input type="hidden" name="attr_buttonBolTopWidth" value="">
                                    <input type="hidden" name="attr_buttonBolLeftWidth" value="">
                                    <input type="hidden" name="attr_buttonBolRightWidth" value="">
                                    <input type="hidden" name="attr_buttonBolBottomWidth" value="">
                                    <input type="hidden" name="attr_buttonA1" value="0">
                                    <input type="hidden" name="attr_buttonA2" value="0">
                                    <input type="hidden" name="attr_radiusLock" value="0">
                                    <input type="hidden" name="attr_buttonA3" value="0">
                                    <input type="hidden" name="attr_buttonA4" value="0">
                                    <input type="hidden" name="attr_pictureStyle" value="buttonstyle_02">
                                    <input type="hidden" name="attr_styleDefinedColor" value="rgb(222, 44, 46)">
                                    <input type="hidden" name="attr_buttonUrl" value="">
                                    <input type="hidden" name="attr_backgroundStyle" id="backgroundStyle1" value="1">
                                    <input type="hidden" name="attr_wordSetup" id="wordSetup1" value="1">
                                    <input type="hidden" name="attr_wordsStyle" id="wordStyle1" value="1">
                                    <input type="hidden" name="attr_buttonFram" id="buttonFram1" value="1">
                                    <input type="hidden" name="attr_buttonFillet" id="buttonFillet1" value="0">
                                </form>
                            </div>
                            <form id="jvForm111121"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111121" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111121" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111121" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111121" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111121" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111121" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111121" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111121" value="1">
                            </form>

                        </div>
                    </div>
                    <div class="span6" _floatmodule="111115,111113,111116">
                        <div id="module111116" _float="1"
                             style="left:156px;top:45px;position: absolute;;width:350px;height:394px;"
                             class="form pic_module form111116 modulePattern0">
                            <div style="height:100%;box-sizing:border-box;">

                                <div class="formMiddle formMiddle111116  hover_style00" style="height:100%;">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="home/static/picture/wkgbs1rgys-asvzaaab9eep2d4w119.jpg"
                                                 id="111116preImg1" width="100%" height="100%">


                                        </a>
                                        <form id="jvForm111116"
                                              action="/"
                                              labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111116">
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
                                                   value="/home/static/images/wKgBS1rgyS-ASVZaAAB9EEp2D4w119.jpg"
                                                   id="uploadImgPath111116">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111116"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111116" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111116" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111116" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111116" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111116" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111116" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111116" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111116" value="1">
                            </form>

                        </div>
                        <div id="module111113" _float="1"
                             style="left:130px;top:21px;position: absolute;height:394px;width:349px;"
                             class="form text_list form111113 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111113" type="text/css">
                                    #module111113.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111113.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111113">
                                    <div class="formBannerTitle formBannerTitle111113">
                                        <div id="bigg" class="titleText titleText111113" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111113">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111113" style="width: 100%;height: 100%;">
                                    <div class="ztextbox" style="width: 100%;height: 100%;"
                                         ondblclick="Site.editTextStyle($(&#39;#111113-moduleLayer .operate-inner&#39;));">

                                        <span style="color:#ffffff;">1</span>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111113"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111113" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111113" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111113" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111113" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111113" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111113" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111113" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111113" value="1">
                            </form>
                        </div>
                        <div id="module111115" _float="1"
                             style="left:174px;top:61px;position: absolute;height:394px;width:350px;"
                             class="form text_list form111115 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111115" type="text/css">
                                    #module111115.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111115.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111115">
                                    <div class="formBannerTitle formBannerTitle111115">
                                        <div id="bigg" class="titleText titleText111115" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111115">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111115" style="width: 100%;height: 100%;">
                                    <div class="ztextbox" style="width: 100%;height: 100%;"
                                         ondblclick="Site.editTextStyle($(&#39;#111115-moduleLayer .operate-inner&#39;));">

                                        <span style="color:#3939a0;">1</span>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111115"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111115" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111115" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111115" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111115" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111115" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111115" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111115" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111115" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid-1 clearfix" id="row44085">
                    <div class="span12" _floatmodule="111190,111194,111195,111196,111185,111186,111187,111188">
                        <div id="module111126" class="form text_list form111126 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111126" type="text/css">
                                    #module111126.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111126.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111126">
                                    <div class="formBannerTitle formBannerTitle111126">
                                        <div id="bigg" class="titleText titleText111126" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111126">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111126" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($(&#39;#111126-moduleLayer .operate-inner&#39;));">
                                        <div style="text-align: center;"><span
                                                    style="color: rgb(255, 255, 255); font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-size: 27px; text-align: center;">我们的优势</span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111126"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111126" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111126" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111126" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111126" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111126" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111126" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111126" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111126" value="1">
                            </form>
                        </div>
                    </div>
                    <div class="float_div_class">
                        <div id="module111188" _float="1"
                             style="left:913px;top:181px;position: absolute;;width:100px;height:100px;"
                             class="form pic_module form111188 modulePattern0">
                            <div style="height:100%;box-sizing:border-box;">

                                <div class="formMiddle formMiddle111188  hover_style00" style="height:100%;">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="home/static/picture/wkgbtfrgyqwadti3aaah-kvkwhy450.png"
                                                 id="111188preImg1" width="100%" height="100%">


                                        </a>
                                        <form id="jvForm111188"
                                              action="/"
                                              labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111188">
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
                                                   value="/home/static/images/wKgBTFrgyQWADTI3AAAH-KVkwhY450.png"
                                                   id="uploadImgPath111188">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111188"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111188" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111188" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111188" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111188" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111188" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111188" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111188" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111188" value="1">
                            </form>

                        </div>
                        <div id="module111190" _float="1"
                             style="left:16px;top:342px;position: absolute;height:118px;width:256px;"
                             class="form text_list form111190 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111190" type="text/css">
                                    #module111190.modulePattern17401 .titleText {
                                        color: #0cf;
                                    }

                                    #module111190.modulePattern17401 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111190.modulePattern17402 .titleText {
                                        color: #0cf;
                                    }

                                    #module111190.modulePattern17403 .titleText {
                                        border-left-color: #0cf;
                                        color: #0cf;
                                    }

                                    #module111190.modulePattern17404 .formBanner {
                                        background: #0cf;
                                    }

                                    #module111190.modulePattern17405 .titleText {
                                        color: #0cf;
                                    }

                                    #module111190.modulePattern17405 .titleText:after {
                                        border-left-color: #0cf;
                                    }

                                    #module111190.modulePattern17406 .titleText {
                                        background: #0cf;
                                    }

                                    #module111190.modulePattern17406 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111190.modulePattern17407 .titleText {
                                        background: #0cf;
                                    }

                                    #module111190.modulePattern17407 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111190.modulePattern17408 .titleText {
                                        color: #0cf;
                                    }

                                    #module111190.modulePattern17409 .titleText {
                                        color: #0cf;
                                    }

                                    #module111190.modulePattern17410 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111190.modulePattern17410 .titleText {
                                        color: #0cf;
                                    }

                                    #module111190.modulePattern17411 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111190.modulePattern17412 .titleText {
                                        border-color: #0cf;
                                    }

                                    #module111190.modulePattern17413 .titleText {
                                        background: #0cf;
                                    }
                                </style>
                                <div class="formBanner formBanner111190">
                                    <div class="formBannerTitle formBannerTitle111190">
                                        <div id="bigg" class="titleText titleText111190" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111190">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111190" style="width: 100%;height: 100%;">
                                    <div class="ztextbox" style="width: 100%;height: 100%;"
                                         ondblclick="Site.editTextStyle($(&#39;#111190-moduleLayer .operate-inner&#39;));">

                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal; text-align: center;">
                                            <span style="color:#ffffff;"><span style="font-family:微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="0"
                                                            style="box-sizing: border-box;"><span
                                                                style="font-size:24px;">专注</span><br></span></span></span></p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal;">
                                            <span style="color:#ffffff;"><span style="font-family:微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="0"
                                                            style="box-sizing: border-box;"><span style="font-size:14px;"><br>-重点关注德国高端车型的热系统产品。</span></span></span></span>
                                        </p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal;">
                                            <span style="color:#ffffff;"><span style="font-size:14px;"><span
                                                            style="font-family:微软雅黑;"><span data-v-3c4f858a="" data-group="1"
                                                                                            style="box-sizing: border-box;">-专注于提供优质的产品和专业的服务。</span></span></span></span>
                                        </p>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111190"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111190" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111190" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111190" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111190" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111190" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111190" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111190" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111190" value="1">
                            </form>
                        </div>
                        <div id="module111186" _float="1"
                             style="left:371px;top:184px;position: absolute;;width:100px;height:100px;"
                             class="form pic_module form111186 modulePattern0">
                            <div style="height:100%;box-sizing:border-box;">

                                <div class="formMiddle formMiddle111186  hover_style00" style="height:100%;">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="home/static/picture/wkgbtfrgyqwap2nxaaaigdgkqew660.png"
                                                 id="111186preImg1" width="100%" height="100%">


                                        </a>
                                        <form id="jvForm111186"
                                              action="/"
                                              labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111186">
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
                                                   value="/home/static/images/wKgBTFrgyQWAP2NxAAAIGDgkqEw660.png"
                                                   id="uploadImgPath111186">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111186"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111186" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111186" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111186" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111186" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111186" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111186" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111186" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111186" value="1">
                            </form>

                        </div>
                        <div id="module111187" _float="1"
                             style="left:639px;top:182px;position: absolute;;width:100px;height:100px;"
                             class="form pic_module form111187 modulePattern0">
                            <div style="height:100%;box-sizing:border-box;">

                                <div class="formMiddle formMiddle111187  hover_style00" style="height:100%;">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="home/static/picture/wkgbs1rgyuyauzjvaaak8gv22hy713.png"
                                                 id="111187preImg1" width="100%" height="100%">


                                        </a>
                                        <form id="jvForm111187"
                                              action="/"
                                              labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111187">
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
                                                   value="/home/static/images/wKgBS1rgyUyAUzjvAAAK8gv22hY713.png"
                                                   id="uploadImgPath111187">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111187"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111187" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111187" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111187" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111187" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111187" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111187" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111187" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111187" value="1">
                            </form>

                        </div>
                        <div id="module111185" _float="1"
                             style="left:94px;top:180px;position: absolute;;width:100px;height:100px;"
                             class="form pic_module form111185 modulePattern0">
                            <div style="height:100%;box-sizing:border-box;">

                                <div class="formMiddle formMiddle111185  hover_style00" style="height:100%;">
                                    <div class="picture_shadebox ">


                                        <a href="javascript:void(0);">

                                            <img src="home/static/picture/wkgbs1rgyuyait-2aaaqz_lydyu554.png"
                                                 id="111185preImg1" width="100%" height="100%">


                                        </a>
                                        <form id="jvForm111185"
                                              action="/"
                                              labelwidth="12">
                                            <input type="hidden" name="attr_styleList" value="608-23">
                                            <input type="hidden" name="attr_name" value="图片模块">
                                            <input type="hidden" name="attr_radius" value="">
                                            <input type="hidden" name="mcId" value="111185">
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
                                                   value="/home/static/images/wKgBS1rgyUyAIT-2AAAQZ_lYDYU554.png"
                                                   id="uploadImgPath111185">
                                            <input type="hidden" name="attr_hoverEffect" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111185"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111185" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111185" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111185" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111185" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111185" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111185" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111185" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111185" value="1">
                            </form>

                        </div>
                        <div id="module111195" _float="1"
                             style="left:566px;top:343px;position: absolute;height:174px;width:245px;"
                             class="form text_list form111195 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111195" type="text/css">
                                    #module111195.modulePattern17401 .titleText {
                                        color: #0cf;
                                    }

                                    #module111195.modulePattern17401 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111195.modulePattern17402 .titleText {
                                        color: #0cf;
                                    }

                                    #module111195.modulePattern17403 .titleText {
                                        border-left-color: #0cf;
                                        color: #0cf;
                                    }

                                    #module111195.modulePattern17404 .formBanner {
                                        background: #0cf;
                                    }

                                    #module111195.modulePattern17405 .titleText {
                                        color: #0cf;
                                    }

                                    #module111195.modulePattern17405 .titleText:after {
                                        border-left-color: #0cf;
                                    }

                                    #module111195.modulePattern17406 .titleText {
                                        background: #0cf;
                                    }

                                    #module111195.modulePattern17406 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111195.modulePattern17407 .titleText {
                                        background: #0cf;
                                    }

                                    #module111195.modulePattern17407 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111195.modulePattern17408 .titleText {
                                        color: #0cf;
                                    }

                                    #module111195.modulePattern17409 .titleText {
                                        color: #0cf;
                                    }

                                    #module111195.modulePattern17410 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111195.modulePattern17410 .titleText {
                                        color: #0cf;
                                    }

                                    #module111195.modulePattern17411 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111195.modulePattern17412 .titleText {
                                        border-color: #0cf;
                                    }

                                    #module111195.modulePattern17413 .titleText {
                                        background: #0cf;
                                    }
                                </style>
                                <div class="formBanner formBanner111195">
                                    <div class="formBannerTitle formBannerTitle111195">
                                        <div id="bigg" class="titleText titleText111195" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111195">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111195" style="width: 100%;height: 100%;">
                                    <div class="ztextbox" style="width: 100%;height: 100%;"
                                         ondblclick="Site.editTextStyle($(&#39;#111195-moduleLayer .operate-inner&#39;));">

                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal; text-align: center;">
                                            <span style="color:#ffffff;"><span style="font-family:微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="0"
                                                            style="box-sizing: border-box;"><span style="font-size:24px;">能力<br></span></span></span></span>
                                        </p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal;">
                                            <span style="color:#ffffff;"><span style="font-family:微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="0"
                                                            style="box-sizing: border-box;"><br>-一些OE项目和公司运作的成功经验。</span></span></span>
                                        </p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal;">
                                            <span style="color:#ffffff;"><span style="font-family:微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="1" style="box-sizing: border-box;">-可以通过与OE制造公司以及在热产品行业的售后市场参与者建立良好的联系来实现这个目标。</span></span></span>
                                        </p>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111195"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111195" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111195" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111195" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111195" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111195" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111195" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111195" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111195" value="1">
                            </form>
                        </div>
                        <div id="module111196" _float="1"
                             style="left:850px;top:344px;position: absolute;height:159px;width:241px;"
                             class="form text_list form111196 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111196" type="text/css">
                                    #module111196.modulePattern17401 .titleText {
                                        color: #0cf;
                                    }

                                    #module111196.modulePattern17401 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111196.modulePattern17402 .titleText {
                                        color: #0cf;
                                    }

                                    #module111196.modulePattern17403 .titleText {
                                        border-left-color: #0cf;
                                        color: #0cf;
                                    }

                                    #module111196.modulePattern17404 .formBanner {
                                        background: #0cf;
                                    }

                                    #module111196.modulePattern17405 .titleText {
                                        color: #0cf;
                                    }

                                    #module111196.modulePattern17405 .titleText:after {
                                        border-left-color: #0cf;
                                    }

                                    #module111196.modulePattern17406 .titleText {
                                        background: #0cf;
                                    }

                                    #module111196.modulePattern17406 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111196.modulePattern17407 .titleText {
                                        background: #0cf;
                                    }

                                    #module111196.modulePattern17407 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111196.modulePattern17408 .titleText {
                                        color: #0cf;
                                    }

                                    #module111196.modulePattern17409 .titleText {
                                        color: #0cf;
                                    }

                                    #module111196.modulePattern17410 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111196.modulePattern17410 .titleText {
                                        color: #0cf;
                                    }

                                    #module111196.modulePattern17411 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111196.modulePattern17412 .titleText {
                                        border-color: #0cf;
                                    }

                                    #module111196.modulePattern17413 .titleText {
                                        background: #0cf;
                                    }
                                </style>
                                <div class="formBanner formBanner111196">
                                    <div class="formBannerTitle formBannerTitle111196">
                                        <div id="bigg" class="titleText titleText111196" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111196">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111196" style="width: 100%;height: 100%;">
                                    <div class="ztextbox" style="width: 100%;height: 100%;"
                                         ondblclick="Site.editTextStyle($(&#39;#111196-moduleLayer .operate-inner&#39;));">

                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal; text-align: center;">
                                            <span style="color:#ffffff;"><span style="font-family:微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="0"
                                                            style="box-sizing: border-box;"><span style="font-size:24px;">远见<br></span></span></span></span>
                                        </p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal;">
                                            <span style="color:#ffffff;"><span style="font-family:微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="0"
                                                            style="box-sizing: border-box;"><br><span
                                                                style="font-size: 14px;">-</span>为中国市场提供战略眼光。</span></span></span>
                                        </p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal;">
                                            <span style="color:#ffffff;"><span style="font-family:微软雅黑;"><span
                                                            data-v-3c4f858a="" data-group="1" style="box-sizing: border-box;">-寻找在中国市场拓展良好关系甚至组织的可能性。</span></span></span>
                                        </p>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111196"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111196" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111196" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111196" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111196" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111196" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111196" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111196" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111196" value="1">
                            </form>
                        </div>
                        <div id="module111194" _float="1"
                             style="left:319px;top:338px;position: absolute;height:124px;width:203px;"
                             class="form text_list form111194 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111194" type="text/css">
                                    #module111194.modulePattern17401 .titleText {
                                        color: #0cf;
                                    }

                                    #module111194.modulePattern17401 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111194.modulePattern17402 .titleText {
                                        color: #0cf;
                                    }

                                    #module111194.modulePattern17403 .titleText {
                                        border-left-color: #0cf;
                                        color: #0cf;
                                    }

                                    #module111194.modulePattern17404 .formBanner {
                                        background: #0cf;
                                    }

                                    #module111194.modulePattern17405 .titleText {
                                        color: #0cf;
                                    }

                                    #module111194.modulePattern17405 .titleText:after {
                                        border-left-color: #0cf;
                                    }

                                    #module111194.modulePattern17406 .titleText {
                                        background: #0cf;
                                    }

                                    #module111194.modulePattern17406 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111194.modulePattern17407 .titleText {
                                        background: #0cf;
                                    }

                                    #module111194.modulePattern17407 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111194.modulePattern17408 .titleText {
                                        color: #0cf;
                                    }

                                    #module111194.modulePattern17409 .titleText {
                                        color: #0cf;
                                    }

                                    #module111194.modulePattern17410 .formBanner {
                                        border-bottom-color: #0cf;
                                    }

                                    #module111194.modulePattern17410 .titleText {
                                        color: #0cf;
                                    }

                                    #module111194.modulePattern17411 .titleText:after {
                                        background: #0cf;
                                    }

                                    #module111194.modulePattern17412 .titleText {
                                        border-color: #0cf;
                                    }

                                    #module111194.modulePattern17413 .titleText {
                                        background: #0cf;
                                    }
                                </style>
                                <div class="formBanner formBanner111194">
                                    <div class="formBannerTitle formBannerTitle111194">
                                        <div id="bigg" class="titleText titleText111194" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111194">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111194" style="width: 100%;height: 100%;">
                                    <div class="ztextbox" style="width: 100%;height: 100%;"
                                         ondblclick="Site.editTextStyle($(&#39;#111194-moduleLayer .operate-inner&#39;));">

                                        <div style="text-align: center;"><span style="color:#ffffff;"><span
                                                        style="font-family:微软雅黑;"><span
                                                            style="font-size:24px;">经验<br></span><br></span></span></div>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal;">
                                            <span style="color:#ffffff;"><span style="font-size:14px;"><span
                                                            style="font-family:微软雅黑;"><span data-v-3c4f858a="" data-group="0"
                                                                                            style="box-sizing: border-box;">-在热产品行业从业13年以上。</span></span></span></span>
                                        </p>
                                        <p data-v-3c4f858a="" class="_tgt"
                                           style="box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 26px; font-family: Arial, &quot;Microsoft YaHei&quot;, &quot;\\5FAE软雅黑&quot;, &quot;\\5B8B体&quot;, &quot;Malgun Gothic&quot;, Meiryo, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal;">
                                            <span style="color:#ffffff;"><span style="font-size:14px;"><span
                                                            style="font-family:微软雅黑;"><span data-v-3c4f858a="" data-group="1"
                                                                                            style="box-sizing: border-box;">-多年的市场经验和市场关系。</span></span></span></span>
                                        </p><span style="color:#ffffff;"><span
                                                    style="font-family:微软雅黑;"></span></span><br>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111194"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111194" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111194" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111194" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111194" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111194" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111194" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111194" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111194" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row97448" _heightstatus="2">
                    <div class="span12">
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row13809" _heightstatus="2">
                    <div class="span12">
                        <div id="module111200" class="form text_list form111200 modulePattern0">
                            <div style="width: 100%;height: 100%;">
                                <style id="styleModuleTest111200" type="text/css">
                                    #module111200.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111200.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111200">
                                    <div class="formBannerTitle formBannerTitle111200">
                                        <div id="bigg" class="titleText titleText111200" channelname="0">
                                            <div class="title_zcont">
                                                文本标题
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111200">

                                        </div>
                                    </div>
                                </div>
                                <div class="formMiddle formMiddle111200" style="">
                                    <div class="ztextbox"
                                         ondblclick="Site.editTextStyle($(&#39;#111200-moduleLayer .operate-inner&#39;));">
                                        <div style="text-align: center;"><font color="#3939a0"
                                                                               face="Arial, Microsoft YaHei, \\5FAE软雅黑, \\5B8B体, Malgun Gothic, Meiryo, sans-serif"><span
                                                        style="font-size: 27px;">新闻资讯</span></font></div>


                                    </div>
                                </div>
                            </div>
                            <form id="jvForm111200"
                                  action="/">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111200" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111200" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111200" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111200" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111200" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111200" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111200" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111200" value="1">
                            </form>
                        </div>
                        <!-- 文章列表 图+摘要+标题 -->
                        <div id="module111201" style="" class="form contenttext form111201 modulePattern0">
                            <div>
                                <style id="styleModuleTest111201" type="text/css">
                                    #module111201.modulePattern17401 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17401 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17402 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17403 .titleText {
                                        border-left-color: rgb(222, 44, 46);
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17404 .formBanner {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17405 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17405 .titleText:after {
                                        border-left-color: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17406 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17406 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17407 .titleText {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17407 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17408 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17409 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17410 .formBanner {
                                        border-bottom-color: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17410 .titleText {
                                        color: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17411 .titleText:after {
                                        background: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17412 .titleText {
                                        border-color: rgb(222, 44, 46);
                                    }

                                    #module111201.modulePattern17413 .titleText {
                                        background: rgb(222, 44, 46);
                                    }
                                </style>
                                <div class="formBanner formBanner111201">
                                    <div class="formBannerTitle formBannerTitle111201">
                                        <div id="bigg" class="titleText titleText111201" channelname="0">
                                            <div class="title_zcont">
                                                文章列表
                                            </div>
                                        </div>
                                        <div class="formBannerMore formBannerMore111201">

                                        </div>
                                    </div>
                                </div>
                                <ul class="formMiddle formMiddle111201 list_style109">
                                    <li>
                                        <div class="formMiddleContent  formMiddleContent111201 contentLine">
                                            <div class="style03_bot">
                                                <a href="/"
                                                   class="style03_botl" title="箱体式低噪音发电机参数" target="_blank">

                                                    <img src="home/static/picture/wkgbtfrgyfqarjpxaabbxyqljem136.jpg">
                                                </a>
                                            </div>
                                            <div class="c-listcontent">
                                                <div class="style03_botr">


                                                    <!-- 头条推荐 -->
                                                    <!-- 显示分类 -->
                                                    <a class="list_title"
                                                       href="/"
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
                                                <a class="c-more"
                                                   href="/"
                                                   target="_blank">more <i class="c-arrowleft">&gt;</i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="formMiddleContent  formMiddleContent111201 contentLine">
                                            <div class="style03_bot">
                                                <a href="/"
                                                   class="style03_botl" title="体积小20KW汽油发电机使用" target="_blank">

                                                    <img src="home/static/picture/wkgbtfrgygoahjgfaabvsjm6ipy222.jpg">
                                                </a>
                                            </div>
                                            <div class="c-listcontent">
                                                <div class="style03_botr">


                                                    <!-- 头条推荐 -->
                                                    <!-- 显示分类 -->
                                                    <a class="list_title"
                                                       href="/"
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
                                                <a class="c-more"
                                                   href="/"
                                                   target="_blank">more <i class="c-arrowleft">&gt;</i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="formMiddleContent  formMiddleContent111201 contentLine">
                                            <div class="style03_bot">
                                                <a href="/"
                                                   class="style03_botl" title="2018上海国际橡胶工业展览会" target="_blank">

                                                    <img src="home/static/picture/wkgbs1rgykgaiwhnaabhc1q4bcq765.jpg">
                                                </a>
                                            </div>
                                            <div class="c-listcontent">
                                                <div class="style03_botr">


                                                    <!-- 头条推荐 -->
                                                    <!-- 显示分类 -->
                                                    <a class="list_title"
                                                       href="/"
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
                                                <a class="c-more"
                                                   href="/"
                                                   target="_blank">more <i class="c-arrowleft">&gt;</i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="formMiddleContent  formMiddleContent111201 contentLine">
                                            <div class="style03_bot">
                                                <a href="/"
                                                   class="style03_botl" title="低压开关柜哪个品牌好" target="_blank">

                                                    <img src="home/static/picture/wkgbtfrgygoaau_laaalcgxuyrm624.jpg">
                                                </a>
                                            </div>
                                            <div class="c-listcontent">
                                                <div class="style03_botr">


                                                    <!-- 头条推荐 -->
                                                    <!-- 显示分类 -->
                                                    <a class="list_title"
                                                       href="/"
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
                                                <a class="c-more"
                                                   href="/"
                                                   target="_blank">more <i class="c-arrowleft">&gt;</i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="formMiddleContent  formMiddleContent111201 contentLine">
                                            <div class="style03_bot">
                                                <a href="/"
                                                   class="style03_botl" title="居然因高压开关柜这一举动，企业损失重大" target="_blank">

                                                    <img src="home/static/picture/wkgbtfrgygoajrmcaaaajsamcbs643.jpg">
                                                </a>
                                            </div>
                                            <div class="c-listcontent">
                                                <div class="style03_botr">


                                                    <!-- 头条推荐 -->
                                                    <!-- 显示分类 -->
                                                    <a class="list_title"
                                                       href="/news"
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
                                                <a class="c-more"
                                                   href=""
                                                   target="_blank">more <i class="c-arrowleft">&gt;</i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="formMiddleContent  formMiddleContent111201 contentLine">
                                            <div class="style03_bot">
                                                <a href=""
                                                   class="style03_botl" title="仿威图机柜的行业定义及特点" target="_blank">

                                                    <img src="home/static/picture/wkgbs1rgykcau-xzaaak2ekcehg599.jpg">
                                                </a>
                                            </div>
                                            <div class="c-listcontent">
                                                <div class="style03_botr">


                                                    <!-- 头条推荐 -->
                                                    <!-- 显示分类 -->
                                                    <a class="list_title"
                                                       href=""
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
                                                <a class="c-more"
                                                   href=""
                                                   target="_blank">more <i class="c-arrowleft">&gt;</i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <form id="jvForm111201"
                                  action="">
                                <!-- 模块动画名称 -->
                                <input type="hidden" name="attr_bananima" id="bananima111201" value="0">
                                <!-- 模块动画方向 -->
                                <input type="hidden" name="attr_checkvalue" id="checkvalue111201" value="">
                                <!-- 模块动画单次/多次播放 -->
                                <input type="hidden" name="attr_trigger" id="atrigger111201" value="1">
                                <!-- 模块动画速度 -->
                                <input type="hidden" name="attr_Animatespeed" id="speed111201" value="0.5">
                                <!-- 模块透明度 -->
                                <input type="hidden" name="attr_clarity" id="clarity111201" value="0">
                                <!-- 图文动画名称 -->
                                <input type="hidden" name="attr_textanima" id="textanima111201" value="0">
                                <!-- 图文动画方向 -->
                                <input type="hidden" name="attr_checkTextvalue" id="checkTextvalue111201" value="">
                                <!-- 图文动画单次/多次播放 -->
                                <input type="hidden" name="attr_triggerText" id="atriggerText111201" value="1">
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