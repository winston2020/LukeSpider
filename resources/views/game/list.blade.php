<!DOCTYPE html>
<!-- saved from url=(0025)http://www.ppt700.com/sy/ -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{$comuln_name->name}}_{{$host->web_name}}</title>
    <meta name="keywords" content="{{$comuln_name->keyword}}">
    <meta name="description" content="{{$comuln_name->description}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <link href="{{url('css/list.css')}}" rel="stylesheet">
    <style type="text/css">body {
            background: #fbfbfb;
        }

        .indexTitleWraper i, .indexTitleWraper01 i, .indexTitleWraper02 i {
            color: #c30 !important;
        }
    </style>
    <link rel="stylesheet" href="{{url('css/app123_1.css')}}">
    <link rel="stylesheet" href="{{url('css/ie9.cs')}}">
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
                                        <li><a href="http://{{$host->host}}/">网站首页</a></li>
                                        @foreach($comuln as $value)
                                        <li class="am-parent">
                                            <a href="http://{{$host->host}}/list_{{$value['id']}}/" target="_self">{{$value->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="am-u-sm-12  am-u-md-4" style="float:left;">
                    <a style="color:white;">欢迎访问{{$host->web_name}}！</a>
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
                    <a href="http://{{$host->host}}/list_{{$value['id']}}/" target="_self">{{$value->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- /header -->


    <div class="amz-banner">
        <div class="amz-container am-g">
            <div class="am-u-md-6 am-u-sm-12 am-u-md-push-6">
            </div>
            <div class="am-u-md-6 am-u-sm-12 am-u-md-pull-6">
                <ol class="am-breadcrumb am-breadcrumb-slash">
                    <li><a href="http://{{$host->host}}/">首页</a></li>
                    <li><a href="http://{{$host->host}}/list_{{$comuln_name->id}}/">{{$comuln_name->name}}</a></li>
                </ol>
            </div>
        </div>
        <div class="container" style="padding-top:26px;text-align:left;">
            <div class="am-g am-g-collapse">
                <div class="am-u-lg-9 am-u-md-8 am-u-sm-12">
                    <div class="artileListWraper">
                        @foreach(array_random($content,20) as $value)
                        <div class="articleList">
                            <h3><a href="http://{{$host->host}}/show_{{$value['id']}}.html"
                                   target="_blank">{{$value['title']}}</a></h3>
                            <p class="m-news-desc">

                            </p>
                            <div class="m-news-data">
                                <span><i class="am-icon-clock-o"></i> {{date('Y-m-d')}}</span>
                                <span><i class="am-icon-check-square-o"></i> {{rand(0,1000)}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-4 am-u-sm-12">
                    <div class="articleSlider" style="margin-bottom:2px;">
                        <div data-am-widget="list_news" class="am-list-news am-list-news-default">
                            <div class="am-list-news-hd am-cf">
                                <h2>相关文章</h2>
                            </div>
                            <div class="am-list-news-bd">
                                <ul class="am-list" style="">
                                    <li class="am-g am-list-item-desced">
                                        <div class=" am-list-main">
                                            <h3 class="am-list-item-hd"><a href="http://{{$host->host}}/list_{{$comuln_name->id}}/"
                                                                           class="parentCate currentCate">{{$comuln_name->name}}</a></h3>
                                        </div>
                                    </li>
                                    <li class="am-g am-list-item-desced">
                                        @foreach(array_random($content,3) as $value)
                                        <div class=" am-list-main">
                                            <h3 class="am-list-item-hd"><a href="http://{{$host->host}}/show_{{$value['id']}}/"
                                                                           class="subCate">{{$value['title']}}</a></h3>
                                        </div>
                                        @endforeach
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-4 am-u-sm-12">
                    <div class="articleSlider">
                        <div data-am-widget="list_news" class="am-list-news am-list-news-default">
                            <div class="am-list-news-hd am-cf">
                                <h2>最新文章</h2>
                            </div>
                            <div class="am-list-news-bd">
                                <ul class="am-list" style="">
                                    @foreach(array_random($content,6) as $value)
                                    <li class="am-g am-list-item-desced">
                                        <div class=" am-list-main">
                                            <h3 class="am-list-item-hd"><a
                                                        href="http://{{$host->host}}/show_{{$value['id']}}.html" class="">{{$value['title']}}</a></h3>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-4 am-u-sm-12">
                    <div class="articleSlider">
                        <div data-am-widget="list_news" class="am-list-news am-list-news-default">
                            <div class="am-list-news-hd am-cf">
                                <h2>热点文章</h2>
                            </div>
                            <div class="am-list-news-bd">
                                <ul class="am-list" style="">
                                    @foreach(array_random($content,6) as $value)
                                    <li class="am-g am-list-item-desced">
                                        <div class=" am-list-main">
                                            <h3 class="am-list-item-hd"><a href="http://{{$host->host}}/show_{{$value['id']}}.html"
                                                                           class="">{{$value['title']}}</a></h3>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
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

    <!-- Baidu Button END -->


</form>


</body>
</html>