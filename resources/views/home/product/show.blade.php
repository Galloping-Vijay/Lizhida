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
        #row70884 {background-repeat:no-repeat;}
        #row70884 {background-position:center top;}
        #row70884 {background-image:url(http://image.fast.126net.cn/group1/M00/04/4E/wKgADFujcI2Afr7iAAJTbDR-YLc775.jpg);}
        #row70884 {height:437px;}
        #row13073 {height:46px;}
    </style>
@endsection

@section('nav')
    @parent
@endsection

@section('content')
    <div id="demoMain">
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid-1 clearfix" id="row70884">
                    <div class="span12">
                    </div>
                    <div class="float_div_class">
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid ui-resizable-disabled ui-state-disabled clearfix" id="row69818"
                     _heightstatus="2">
                    <div class="span12">
                        <!-- 产品内容 -->
                        <div id="module14018" class="form form14018 product_content c-prodetail01" iscontent="1"
                             contenttplid="50856" site_id="1181" product_id="14018">
                            <div class="ProductContent">
                                <input id="productId" type="hidden" value="14018">
                                <div class="productDetail ">
                                    <div class="pdTableLayout">
                                        <div class="pro_img">
                                            <div id="preview">
                                                <div class="big_pro_img jqzoom" id="spec-n1">
                                                    <img width="400" height="400"
                                                         src="{{ $info->images[0] }}"
                                                         jqimg="/">
                                                </div>
                                                <div id="spec-n5" class="thumb_img">
                                                    <div class="control control_left" id="spec-left">
                                                        <span class="arrow_left gray_arrow"></span>
                                                    </div>
                                                    <div id="spec-list" style="height: 76px;">
                                                        <ul class="list-h">

                                                            @foreach ($info->images as $img)
                                                                <li onclick="showThumb(this);" class=""><img
                                                                            alt="{{$info->title}}"
                                                                            src="{{$img}}">
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="control control_right" id="spec-right">
                                                        <span class="arrow_right gray_arrow"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro_introduce">
                                            <div class="c-g_minor">
                                                <span>{{$info->title}}</span>
                                            </div>
                                            <div class="pdLine"></div>

                                            <div class="ovh">
                                                <div class="popvalue_list">
                                                    <div class="propName fl">库存：</div>
                                                    <div class="propValue fl" id="inventory_num">{{$info->total}}</div>
                                                </div>
                                                <div class="popvalue_list">
                                                    <div class="propName fl">销量：</div>
                                                    <div class="propValue fl" id="sales_num">{{$info->sales}}</div>
                                                </div>
                                                <div class="popvalue_spec">
                                                    <div class="propName fl">规格：</div>
                                                    <div class="fl">
                                                        <a class="value_a v_checked" href="javascript:void(0);"
                                                           attr_name="默认" attr_price="35000.00"
                                                           attr_count="99">默认</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popvalue_list price_list">
                                                <div class="propName fl">价格：</div>
                                                <div class="propValue fl"><b>￥</b><span class="c-nowprice"
                                                                                        id="product_price">￥{{$info->price}}</span>
                                                </div>
                                                <span class="c-marketprice">￥{{$info->o_price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="detailTable" class="detail_table cl">
                                        <ul class="detail_tab">
                                            <li class="detail_cur"><a href="javascript:void(0);">宝贝详情</a></li>
                                            <li class=""><a href="javascript:void(0);">产品评论</a></li>
                                        </ul>
                                        <div class="detail_content">

                                            <div class="detail_item item_cur">
                                                <div class="product_parameter">
                                                </div>
                                                <div class="detailInfo">
                                                    {!! $info->content !!}
                                                </div>
                                            </div>
                                            <!--评论-->
                                            <div class="detail_item">
                                                <div id="appraiseDiv">    <!-- 评论展示 -->
                                                    <div class="noData">
                                                        <span class="nodata_ico"></span>
                                                        <span>暂时还没有评论哦！</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style>
                                #detailTable .detail_cur {
                                    background: rgb(172, 6, 8);
                                }

                                #pdAppendLayout .buy_now {
                                    border-color: rgb(172, 6, 8);
                                    background: rgb(172, 6, 8);
                                }

                                #pdAppendLayout .buy_now:hover {
                                    background: #fff;
                                    color: rgb(172, 6, 8);
                                }

                                #pdAppendLayout .c-addcart {
                                    color: rgb(172, 6, 8);
                                    background: rgba(172, 6, 8, 0.1);
                                    background: #fff \0;
                                    border-color: rgb(172, 6, 8);
                                }

                                #pdAppendLayout .c-addcart:hover {
                                    background: #fff;
                                    background: rgb(172, 6, 8) \0;
                                    color: #fff \0;
                                    color: rgb(172, 6, 8) \9 \0;
                                }

                                .pro_collection a:hover {
                                    color: rgb(172, 6, 8);
                                }

                                #numChange .gy_add:hover, #numChange .gy_reduce:hover {
                                    border-color: rgb(172, 6, 8);
                                    color: rgb(172, 6, 8);
                                }

                                .thumb_img li:hover, .thumb_img li.current {
                                    border-color: rgb(172, 6, 8);
                                }
                            </style>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lyrow">
            <div class="view">
                <div class="row-fluid clearfix" id="row13073">
                    <div class="span12">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent
    <script type="text/javascript">
        var p_staticPageStatus = 0;

        //评论列表
        function ajaxAppraise(pageNo){
            var pn = pageNo;
            var product_id = "14018";
            var baseUrl = "http://www.lizhidasz.com";
            $.ajax({
                url:baseUrl+'/ajaxAppraise.jspx',
                type:'get',
                dataType:'html',
                crossDomain: true,
                xhrFields:{withCredentials:true},
                data:{"pageNo":pn,"pageSize":5,"productId":product_id,"productType":'2',"styleList":'m_a_list_1-2'},
                success:function(data){
                    $("#appraiseDiv").empty();
                    $("#appraiseDiv").append(data);
                }
            });
        }

        function loadProdutData(){
            var product_id = "14018";
            var baseUrl = "http://shebei01.mb.126net.cn";
            $.ajax({
                url:baseUrl+'/loadProdutData.jspx',
                type:'get',
                dataType:'json',
                crossDomain: true,
                xhrFields:{withCredentials:true},
                data:{"pid":product_id},
                success:function(data){
                    $("#sales_num").html(data.salesNum);
                    if(data.specPrice && data.specPrice.length>0 && $(".popvalue_spec a").length > 0){
                        $(".popvalue_spec a").each(function(i,o){
                            var spec = $(o).attr("attr_name")
                            $.each(data.specPrice,function(j,q){
                                if(q.spec==spec){
                                    $(o).attr("attr_count",q.specCount)
                                    return
                                }
                            });
                        });
                    }else{
                        $("#inventory_num").html(data.inventoryNum);
                    }
                    if ($(".popvalue_spec a").length > 0) {
                        $(".popvalue_spec a").eq(0).click();
                    }
                    if(data.isCollect){
                        $("#mcollect").addClass("active").end().attr("is_star",1);
                    }
                }
            });
        }
        //收藏夹
        function addMyDotey(obj,id){
            if(typeof(loginStatus)!== "undefined" && loginStatus==1){
                $.ajax({
                    url:'http://shebei01.mb.126net.cn/ucenter/addMemberCollect.jspx',
                    type:'post',
                    data:{"productId":id},
                    dataType:'json',
                    success:function(data){
                        if(data.code=="200"){
                            if(data.type=="1"){
                                $.alert("商品收藏成功！",function(){
                                    $(obj).addClass("active");
                                    $(obj).attr("is_star","1");
                                });
                            }else if(data.type=="2"){
                                $.alert("取消收藏成功！",function(){
                                    $(obj).removeClass("active");
                                    $(obj).attr("is_star","0");
                                });

                            }
                        }else if(data.code="300"){
                            $.alert("已收藏过！",function(){});
                        }else{
                            $.alert("收藏失败！",function(){});
                        }
                    }
                });
            }else{
                JRF.login();
            }
        }
        //加入购物车  20160629
        function buyProduct(pid,type){
            if(typeof(loginStatus)!== "undefined" && loginStatus==1){
                var paycount = $("#paycount").val();
                var inventoryNum = $("#paycount").attr("inventory_num");
                if(parseInt(paycount)>parseInt(inventoryNum)){
                    $.alert("库存不足！");
                    return ;
                }
                if(parseInt(paycount)){
                    var flg = true;
                    var gouWu = new Array();
                    var len = $("#module"+pid).find(".productDetail").find("[pbuy_item='']").length;
                    if(len>0){
                        flg = false;
                    }
                    $("#module"+pid).find(".productDetail").find("[pbuy_item='']").each(function(index,obj){
                        var gouwu_name = $(obj).find("[pbuy_item_name='']").attr("attr_name");
                        var gouwu_val = "";
                        $(obj).find("[buy_itme='']").each(function(i,o){
                            if($(o).hasClass("v_checked")){
                                //选中购物属性
                                gouwu_val = $(o).attr("attr_value");
                                return
                            }
                        });
                        if(gouwu_name!=""&&gouwu_val&&gouwu_val!=""){
                            gouWu.push(gouwu_name+":"+gouwu_val);
                        }
                    });
                    if(!flg&&gouWu.length<len){
                        $.alert("请选择购买项！");
                        return ;
                    }
                    var standard = "";
                    if(gouWu.length>0){
                        standard ="{"+gouWu.join(',')+"}";
                    }
                    var specName = "";
                    $("#module"+pid).find(".popvalue_spec a").each(function(index,obj){
                        if($(obj).hasClass("v_checked")){
                            //选中购物属性
                            specName = $(obj).attr("attr_name");
                            return
                        }
                    });
                    $.ajax({
                        type : 'post',
                        url : 'http://shebei01.mb.126net.cn/ucenter/checkProductInventoryNum.jspx',
                        data : {"pid":pid,"count":paycount,"spec":JRF.encodeUrl(specName)},
                        dataType:'json',
                        success : function(data){
                            if(data.code=="200"){
                                if(data.flg){
                                    if(type==1){
                                        var shopAttribute = JRF.encodeUrl(standard);
                                        //立即购买
                                        location.href="http://shebei01.mb.126net.cn/ucenter/shoppingBuyNow.jspx?productId="+pid +"&count=" +paycount+"&shopAttribute="+shopAttribute+"&spec="+JRF.encodeUrl(specName);
                                    }else if(type==2){
                                        //加入购物车
                                        $.ajax({
                                            type : 'post',
                                            url : 'http://shebei01.mb.126net.cn/ucenter/addShoppingToCart.jspx',
                                            data : {"pid":pid,"count":paycount,"shopAttribute":standard,"spec":JRF.encodeUrl(specName)},
                                            dataType:'json',
                                            success : function(data){
                                                if(data.code=="1"){
                                                    $.alert("商品已加入购物车！");
                                                    return ;
                                                }else{
                                                    $.alert(data.message);
                                                    return ;
                                                }
                                            }
                                        });
                                    }
                                }else{
                                    $.alert(data.message);
                                }
                            }else{
                                $.alert(data.message);
                            }
                        }
                    });
                }else{
                    $.alert("请填写购买商品数量！");
                    return ;
                }
            }else{
                JRF.login();
            }
        }
        //购物车增加
        function shoppingAdd(obj){
            var inventoryNum = $("#paycount").attr("inventory_num");
            var num = $("#paycount").val();
            if(num==""){
                num = 0;
            }
            num=parseInt(num)+1;
            if(parseInt(num)>parseInt(inventoryNum)){
                $.alert("库存不足！");
                $(obj).addClass("disabled_btn");
                return ;
            }
            $(obj).siblings("input").attr("value",num);
            if(num>=1){
                $(obj).siblings("a").removeClass("disabled_btn");
            }
        }

        function checkNum(obj){
            var num = $(obj).val();
            var inventoryNum = $("#paycount").attr("inventory_num");
            if(num==""){
                num=1;
                $("#paycount").val(1);
                return
            }
            if(parseInt(num)>parseInt(inventoryNum)){
                $.alert("库存不足！",function(){
                    $("#paycount").val(inventoryNum);
                });
                return ;
            }
            if(parseInt(num)==0){
                $("#paycount").val(1);
                return ;
            }
        }
        // 购物车减少
        function shoppingReduce(obj){
            var num = $("#paycount").val();
            if(num==""){
                num = 0;
            }
            if(parseInt(num)>=1){
                num = num-1;
                $("#paycount").val(num);
                if(num==0){
                    $(obj).addClass("disabled_btn");
                }else{
                    $(obj).removeClass("disabled_btn");
                }
            }else{
                $("#paycount").val(0);
                $(obj).addClass("disabled_btn");
            }
        }
    </script><script type="text/javascript">
        $(function(){
            $("#spec-right").click(function () {
                if (!$(this).siblings("#spec-list").is(":animated")) {
                    if (nowimg < i - 5) {
                        nowimg++;
                        $(this).siblings("#spec-list").find("ul").animate({
                            "left": -nowimg * imgWidth
                        }, 600);
                        $(this).siblings("#spec-left").children().removeClass('gray_arrow');
                        if (nowimg == i - 5) {
                            $(this).children().addClass('gray_arrow');
                        }
                    }
                }
            });

            $("#spec-left").click(function () {
                if (!$(this).siblings("#spec-list").is(":animated")) {
                    if (nowimg > 0) {
                        nowimg--;
                        $(this).siblings("#spec-list").find("ul").animate({
                            "left": -nowimg * imgWidth
                        }, 600);
                        $(this).siblings("#spec-right").children().removeClass('gray_arrow');
                        if (nowimg == 0) {
                            $(this).children().addClass('gray_arrow');
                        }
                    }
                }
            });

            // 点击属性
            $(".propValue a").click(function () {
                $(this).addClass("v_checked").siblings().removeClass("v_checked");
            });
            //规格切换
            $(".popvalue_spec a").click(function () {
                var count = $(this).attr("attr_count");
                var price = $(this).attr("attr_price");
                $(this).addClass("v_checked").siblings().removeClass("v_checked");
                $("#inventory_num").html(count);
                $("#product_price").html(price);
                $("#paycount").attr("inventory_num", count);
            });
            //宝贝详情和评论详情
            $("#detailTable .detail_tab li").click(function () {
                $(this).addClass("detail_cur").siblings().removeClass("detail_cur");
                $("#detailTable .detail_item").eq($(this).index()).addClass("item_cur").siblings().removeClass("item_cur");
            });

            $("#spec-list li").eq(0).attr("class", "current");
            var imgHeight = $("#spec-list li").outerHeight(true) + 12;
            $("#spec-list").height(imgHeight);
            var nowimg = 0
            var imgWidth = $("#spec-list li").outerWidth(true);
            var i = $("#spec-list li").length;
            if (i < 6) {
                $(".control_right .arrow_right").addClass("gray_arrow");
            }


            if(p_staticPageStatus==1){
                //独立部署调用
                loadProdutData();
            }else{
                if ($(".popvalue_spec a").length > 0) {
                    $(".popvalue_spec a").eq(0).click();
                }
            }


            var priceCal = $("#priceCalculation");
            var t = priceCal.find(".amount-num");
            priceCal.find(".add").on('click', function () {
                t.text(parseInt(t.text()) + 1)
            });
            priceCal.find(".min").click(function () {
                t.text(parseInt(t.text()) - 1)
                if (parseInt(t.text()) < 0) {
                    t.text(0);
                }
            });
            var specBox = $("#specItems"),
                specChild = $("#spitsList"),
                onTurn = $("#onTurn"),
                onDown = $("#onDown"),
                h = specChild.find("li").height() + 5;
            onDown.on('click', function () {
                specChild.stop(true, true);
                var t = parseInt(specChild.css("top"));
                if (t != 0 && t < 0) {
                    slide(false, t);
                }
            });
            onTurn.on('click', function () {
                specChild.stop(true, true);
                var len = specChild.find('li').length;
                var t = parseInt(specChild.css("top"));
                var num = parseInt(specBox.height() / h) - len;
                var top = num * h;
                if (top < t && top !== t) {
                    slide(true, t);
                }
            });
            function slide(direction, t) {
                if (direction) {
                    var a = t - h
                } else {
                    var a = t + h
                }
                specChild.animate({"top": a}, 500)
            }

            var liList = specChild.find("li");
            var options = {
                zoomWidth: 250,
                zoomHeight: 250,
                zoomType: 'reverse',
                lens: false,
                title: false
            };

            liList.on('click', function () {
                var that = $(this);
                that.addClass("active").siblings().removeClass("active");
                var imgSrc = that.find('img').attr("data-src");
                console.log(imgSrc)
                $(".jqzoom").find('img').attr('src', imgSrc)
                $(".jqzoom").attr('href', imgSrc);
                $(".jqzoom").jqzoom(options);
            });
            //加载评论列表
            ajaxAppraise(1);
        });

        //缩略图选中
        function showThumb(obj) {
            $(obj).addClass("current").siblings().removeClass("current");
            var imgsrc = $(obj).find("img").attr("src");
            $(".big_pro_img img").attr("src", imgsrc);
        }
    </script>
@endsection