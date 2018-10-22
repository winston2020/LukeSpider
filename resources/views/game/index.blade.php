<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0022)http://www.ppt700.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>{{$host->web_name}}</title>
    <meta name="keywords" content="{{$host->keywords}}">
    <meta name="description" content="{{$host->description}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <script src="{{url('js/282181.js')}}" defer="" async=""></script>
    <script src="{{url('js/hm.js')}}"></script>
    <script type="text/javascript" src="{{url('js/51.la.js')}}"></script>
    <link rel="stylesheet" href="{{url('css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{url('css/app123.css')}}">
    <link rel="stylesheet" href="{{url('css/amazeui.slick.min.css')}}">
    <link rel="stylesheet" href="{{url('css/layer.css')}}" media="all">
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/slick.min.js')}}"></script>
    <script src="{{url('js/amazeui.lazyload.min.js')}}"></script>
    <script src="{{url('js/layer.js')}}"></script>
    <link rel="stylesheet" href="{{url('css/layer(1).css')}}" id="layuicss-layer">

    <link rel="stylesheet" href="{{url('css/app123_1.css')}}">
    <link rel="stylesheet" href="{{url('css/ie9.css')}}">
</head>

<body>
<form name="aspnetForm" method="post" action="" id="aspnetForm">
    <!-- header -->
    <div class="headerWraper">
        <div class="topWraper">
            <div class="topContent">

            </div>
        </div>
        <div class="header">
            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="mobileMenuWraper">
                        <nav id="topbar-collapse" data-am-widget="menu" class="am-menu  am-menu-offcanvas1"
                             data-am-menu-offcanvas="">
                            <a href="http://{{$host->host}}" class="am-menu-toggle">
                                <i class="am-menu-toggle-icon am-icon-bars"></i>
                            </a>
                            <div class="am-offcanvas">
                                <div class="am-offcanvas-bar">
                                    <ul class="am-menu-nav am-avg-sm-1">
                                        <li><a href="http://{{$host->host}}">网站首页</a></li>
                                        @foreach($comuln as $value)
                                        <li class="am-parent">
                                            <a href="http://{{$host->host}}/list_{{$value->id}}" target="_self">{{$value->name}}</a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="am-u-sm-12  am-u-md-4" style="float:left;">
                    <a style="color:white;">欢迎访问引新游戏资讯网！</a>
                </div>
                <div class="am-u-sm-12  am-u-md-4">

                    <a style="color:white;" href="http://{{$host->host}}/sitemap.html" title="网站地图"
                       target="_blank">网站地图</a>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-contain">
        <div class="nav-inner">
            <ul class="am-nav am-nav-pills am-nav-justify">
                <li><a href="http://{{$host->host}}/">网站首页</a></li>
                @foreach($comuln as $value)
                <li>
                    <a href="http://{{$host->host}}/list_{{$value->id}}" target="_self">{{$value->name}}</a>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
    <!-- /header -->


    <div class="bannerWraper">
        <div class="slider lazyForBanner indexBanner slick-initialized slick-slider">
            <div aria-live="polite" class="slick-list draggable" tabindex="0">
                <div class="slick-track" style="opacity: 1; width: 1903px;">
                    <div class="slick-slide slick-active" data-slick-index="0" aria-hidden="false"
                         style="width: 1903px; position: relative; left: 0px; top: 0px; z-index: 900; opacity: 1;">
                        <div class="image">
                            <img alt="" class="" src="{{url('image/44444.jpg')}}" style="opacity: 1;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('.indexBanner').slick({
                lazyLoad: 'ondemand',
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                autoplaySpeed: 5000,
                autoplay: true,

            });
        </script>
    </div>
    <div class="container" style="margin-top:20px;">
        <div class="indexTitleWraper">
            <h2><i class="am-icon-th-large"></i> 游戏杂谈</h2>
            <a href="http://{{$host->host}}/list_4/" target="_blank">更多&gt;&gt;</a>
        </div>
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6 am-u-lg-5">
                <div class="slider single-item indexJDT slick-initialized slick-slider">
                    <div aria-live="polite" class="slick-list draggable" tabindex="0">
                        <div class="slick-track" style="opacity: 1; width: 2295px;">
                            @foreach(array_random($content,1) as $value)
                            <div class="jianDianWraper slick-slide" data-slick-index="0" aria-hidden="true"
                                 style="width: 459px; position: relative; left: 0px; top: 0px; z-index: 800; opacity: 0;">
                                <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank" class="jd_imgLink">
                                    <img alt="{{$value->title}}" class="" src="{{url('image/232GCD1_lit.jpg')}}"
                                         style="opacity: 1;">
                                </a>
                                <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank" class="jd_TextLink">
                                    {{$value->title}}
                                </a>
                            </div>
                            @endforeach
                            @foreach(array_random($content,1) as $value)
                            <div class="jianDianWraper slick-slide slick-active" data-slick-index="1"
                                 aria-hidden="false"
                                 style="width: 459px; position: relative; left: -459px; top: 0px; z-index: 900; opacity: 1;">
                                <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank" class="jd_imgLink">
                                    <img alt="{{$value->title}}" class="" src="{{url('image/2233143247_lit.jpg')}}"
                                         style="opacity: 1;">
                                </a>
                                <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank" class="jd_TextLink">
                                    {{$value->title}}
                                </a>
                            </div>
                            @endforeach
                            @foreach(array_random($content,1) as $value)
                            <div class="jianDianWraper slick-slide" data-slick-index="2" aria-hidden="true"
                                 style="width: 459px; position: relative; left: -918px; top: 0px; z-index: 800; opacity: 0;">
                                <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank" class="jd_imgLink">
                                    <img alt="{{$value->title}}" class="" src="{{url('image/2152535118_lit.jpg')}}"
                                         style="opacity: 1;">
                                </a>
                                <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank" class="jd_TextLink">
                                    {{$value->title}}
                                </a>
                            </div>
                            @endforeach
                            @foreach(array_random($content,1) as $value)
                            <div class="jianDianWraper slick-slide" data-slick-index="3" aria-hidden="true"
                                 style="width: 459px; position: relative; left: -1377px; top: 0px; z-index: 800; opacity: 0;">
                                <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank" class="jd_imgLink">
                                    <img alt="{{$value->title}}" class="" src="{{url('image/215112TS_lit.jpg')}}"
                                         style="opacity: 1;">
                                </a>
                                <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank" class="jd_TextLink">
                                    {{$value->title}}
                                </a>
                            </div>
                            @endforeach
                            @foreach(array_random($content,1) as $value)
                            <div class="jianDianWraper slick-slide" data-slick-index="4" aria-hidden="true"
                                 style="width: 459px; position: relative; left: -1836px; top: 0px; z-index: 800; opacity: 0;">
                                <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank" class="jd_imgLink">
                                    <img alt="{{$value->title}}" class=""
                                         src="{{url('images/20170510_my_227_3.jpg')}}"
                                         style="opacity: 1;">
                                </a>
                                <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank" class="jd_TextLink">
                                    {{$value->title}}
                                </a>
                            </div>
                            @endforeach


                        </div>
                    </div>


                    <button type="button" data-role="none" class="slick-prev" aria-label="previous"
                            style="display: inline-block;">Previous
                    </button>
                    <button type="button" data-role="none" class="slick-next" aria-label="next"
                            style="display: inline-block;">Next
                    </button>
                    <ul class="slick-dots" style="display: block;">
                        <li class="" aria-hidden="true">
                            <button type="button" data-role="none">1</button>
                        </li>
                        <li aria-hidden="false" class="slick-active">
                            <button type="button" data-role="none">2</button>
                        </li>
                        <li aria-hidden="true" class="">
                            <button type="button" data-role="none">3</button>
                        </li>
                        <li aria-hidden="true" class="">
                            <button type="button" data-role="none">4</button>
                        </li>
                        <li aria-hidden="true" class="">
                            <button type="button" data-role="none">5</button>
                        </li>
                    </ul>
                </div>
                <script>
                    $('.single-item').slick({
                        lazyLoad: 'ondemand',
                        dots: true,
                        infinite: true,
                        fade: true,
                        speed: 500,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplaySpeed: 5000,
                        autoplay: true,
                    });
                </script>
            </div>
            <div class="am-u-sm-12 am-u-md-6 am-u-lg-7">
                <div class="articleTopWraper">
                    @foreach(array_random($content,1) as $value)
                    <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank">
                        <h2>{{$value->title}}</h2>
                    </a>
                    <p>

                    </p>
                    @endforeach
                </div>
                <div class="articleList01">
                    <ul>
                        @foreach(array_random($content,5) as $value)
                        <li>
                            <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank">
                                <i class="am-icon-angle-right"></i>
                                {{$value->title}}
                            </a>
                            <span>[{{date('m-d')}}]</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container am-g ad_c1">
        <div class="am-u-sm-12">
            <a><img src="{{url('image/ad001.jpg')}}" alt="广告横条1"></a>
        </div>
    </div>
    <div class="container am-g">
        <div class="am-u-sm-12 am-u-md-4 am-u-lg-4">
            <div class="indexTitleWraper01">
                <h2><i class="am-icon-file"></i> 手游资讯</h2>
                <a href="http://{{$host->host}}/list_1/" target="_blank">更多&gt;&gt;</a>
            </div>
            <div class="articleList02">
                <ul>
                    @foreach(array_random($content,6) as $value)
                    <li>
                        <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank">
                            <i class="am-icon-angle-right"></i>
                            {{$value->title}}
                        </a>
                        <span>[{{date('m-d')}}]</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="am-u-sm-12 am-u-md-4 am-u-lg-4">
            <div class="indexTitleWraper01">
                <h2><i class="am-icon-file"></i> 手游攻略</h2>
                <a href="http://{{$host->host}}/list_1/" target="_blank">更多&gt;&gt;</a>
            </div>
            <div class="articleList02">
                <ul>
                    @foreach(array_random($content,6) as $value)
                    <li>
                        <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank">
                            <i class="am-icon-angle-right"></i>
                            {{$value->title}}
                        </a>
                        <span>[{{date('m-d')}}]</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="am-u-sm-12 am-u-md-4 am-u-lg-4">
            <div class="indexTitleWraper01">
                <h2><i class="am-icon-file"></i> 手游评测</h2>
                <a href="http://{{$host->host}}/list_1/" target="_blank">更多&gt;&gt;</a>
            </div>
            <div class="articleList02">
                <ul>
                    @foreach(array_random($content,6) as $value)
                    <li>
                        <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank">
                            <i class="am-icon-angle-right"></i>
                            {{$value->title}}
                        </a>
                        <span>[{{date('m-d')}}]</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="container am-g ad_c1">
        <div class="am-u-sm-12">
            <a><img src="{{url('image/ad002.jpg')}}" alt="广告横条2"></a>
        </div>
    </div>
    <div class="container am-g">
        <div class="am-u-sm-12 am-u-md-4 am-u-lg-4">
            <div class="indexTitleWraper01">
                <h2><i class="am-icon-file"></i> 网游资讯</h2>
                <a href="http://{{$host->host}}/list_2/" target="_blank">更多&gt;&gt;</a>
            </div>
            <div class="articleList02">
                <ul>
                    @foreach(array_random($content,6) as $value)
                    <li>
                        <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank">
                            <i class="am-icon-angle-right"></i>
                            {{$value->title}}
                        </a>
                        <span>[{{date('m-d')}}]</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="am-u-sm-12 am-u-md-4 am-u-lg-4">
            <div class="indexTitleWraper01">
                <h2><i class="am-icon-file"></i> 网游攻略</h2>
                <a href="http://{{$host->host}}/list_2/" target="_blank">更多&gt;&gt;</a>
            </div>
            <div class="articleList02">
                <ul>
                    @foreach(array_random($content,6) as $value)
                    <li>
                        <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank">
                            <i class="am-icon-angle-right"></i>
                            <strong>{{$value->title}}</strong>
                        </a>
                        <span>[{{date('m-d')}}]</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="am-u-sm-12 am-u-md-4 am-u-lg-4">
            <div class="indexTitleWraper01">
                <h2><i class="am-icon-file"></i> 网游评测</h2>
                <a href="http://{{$host->host}}/list_2/" target="_blank">更多&gt;&gt;</a>
            </div>
            <div class="articleList02">
                <ul>
                    @foreach(array_random($content,6) as $value)
                    <li>
                        <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank">
                            <i class="am-icon-angle-right"></i>
                            {{$value->title}}
                        </a>
                        <span>[{{date('m-d')}}]</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="container am-g ad_c1">
        <div class="am-u-sm-12">
            <a><img src="{{url('image/ad003.jpg')}}" alt="广告横条3"></a>
        </div>
    </div>
    <div class="container am-g">
        <div class="am-u-sm-12 am-u-md-4 am-u-lg-4">
            <div class="indexTitleWraper01">
                <h2><i class="am-icon-file"></i> 单游资讯</h2>
                <a href="http://{{$host->host}}/list_3/" target="_blank">更多&gt;&gt;</a>
            </div>
            <div class="articleList02">
                <ul>
                    @foreach(array_random($content,6) as $value)
                    <li>
                        <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank">
                            <i class="am-icon-angle-right"></i>
                            {{$value->title}}
                        </a>
                        <span>[{{date('m-d')}}]</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="am-u-sm-12 am-u-md-4 am-u-lg-4">
            <div class="indexTitleWraper01">
                <h2><i class="am-icon-file"></i> 单游攻略</h2>
                <a href="http://{{$host->host}}/list_3/" target="_blank">更多&gt;&gt;</a>
            </div>
            <div class="articleList02">
                <ul>
                    @foreach(array_random($content,6) as $value)
                    <li>
                        <a href="http://{{$host->host}}/show_{{$value->id}}.html" target="_blank">
                            <i class="am-icon-angle-right"></i>
                            {{$value->title}}
                        </a>
                        <span>[{{date('m-d')}}]</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="am-u-sm-12 am-u-md-4 am-u-lg-4">
            <div class="indexTitleWraper01">
                <h2><i class="am-icon-file"></i> 单游评测</h2>
                <a href="http://{{$host->host}}/list_3/" target="_blank">更多&gt;&gt;</a>
            </div>
            <div class="articleList02">
                <ul>
                    @foreach(array_random($content,6) as $value)
                    <li>
                        <a href="http://{{$host->host}}/{{$value->id}}.html" target="_blank">
                            <i class="am-icon-angle-right"></i>
                            {{$value->title}}
                        </a>
                        <span>[{{date('m-d')}}]</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="index_Gray" style="">
        <div class="container am-g">
            <div class="am-u-sm-12 am-u-md-12">
                <div class="am-tabs indexTabWraper" data-am-tabs="{}">
                    <ul class="am-tabs-nav am-nav am-nav-tabs">
                        <li class="am-active">
                            <a href="http://www.ppt700.com/#tabLink4">友情链接</a>
                        </li>
                    </ul>
                    <div class="am-tabs-bd" style="padding:0;">
                        <div class="am-tab-panel am-fade am-in am-active" id="tabLink4">
                            <ul class="index_UL_TextLink am-avg-sm-2 am-avg-md-4 am-avg-lg-6">
                                @foreach($otherlink as $value)
                                <li><a href="http://{{$value->host}}/" target="_blank">{{$value->web_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--foot start-->
    <div class="layout-footer">
        <div class="footer">
            <div style="background-color:#333;" class="footer--bg"></div>
            <div class="footer--inner">
                <div class="myFooter">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6 am-u-md-push-2 am-u-lg-7 am-u-lg-push-1">
                            <div class="footerInfo">
                                <span class="footerTitle">Copyright &#169; 2017-2020 锦江区引新网络工作室 版权所有</span>
                                <span><a href="http://www.miitbeian.gov.cn/"
                                         target="_blank">工信部备案号:蜀ICP备17026654号-16</a></span>
                                <script type="text/javascript" src="{{url('js/cjx.js')}}"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  鐧惧害鎻愪氦   -->

    <!-- Baidu Button BEGIN -->



</form>


</body>
</html>