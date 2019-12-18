<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:92:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/index\view\navigation\live.html";i:1576045625;s:81:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\header1.html";i:1576136533;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\footer.html";i:1575614033;}*/ ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--适应手机窗口大小-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=0.5, maximum-scale=2.0, use-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>周庄旅游官方网站</title>
    <link rel="shortcut icon" href="/static/index/static/images/favicon.png">
    <link rel="stylesheet" href="/static/index/static/lib/bootstrap.css">
    <link rel="stylesheet" href="/static/index/static/css/initial.css">
    <link rel="stylesheet" href="/static/index/static/css/headfoot.css">
    <link rel="stylesheet" href="/static/index/static/css/index.css">
    <link rel="stylesheet" href="/static/index/static/css/general.css">
    <link rel="stylesheet" href="/static/index/static/css/introduction.css">
    <link rel="stylesheet" href="/static/index/static/css/ancientTown.css">
    <link rel="stylesheet" href="/static/index/static/css/wholedomain.css">
    <link rel="stylesheet" href="/static/index/static/css/live.css">
    <link rel="stylesheet" href="/static/index/static/css/scenery.css">
    <link rel="stylesheet" href="/static/index/static/css/ceremony.css">
    <link rel="stylesheet" href="/static/index/static/css/food.css">
    <link rel="stylesheet" href="/static/index/static/css/entertainment.css">

    <script src="/static/index/static/js/jquery-1.8.3.min.js"></script>
</head>

<body>

    <header>
        <div class="hd-c">
            <div class="hd-logo">
                <a href="<?php echo url('Index/index'); ?>"></a>
            </div>
            <div id="hd-btn" class="nav-btn">

            </div>
            <ul class="hd-nav">
                <li class="a_hover_1">
                    <a href="<?php echo url('Index/index'); ?>">首页<span>Home</span></a>

                </li>
                <li class="a_hover">
                    <a href="<?php echo url('General/general'); ?>">概况<span>Introduction</span></a>
                    <div class="nav_dn">
                        <div class="he_submenu">
                            <a href="<?php echo url('General/introduction'); ?>">周庄简介</a>
                            <a href="<?php echo url('General/ancienttown'); ?>">古镇旅游</a>
                            <a href="<?php echo url('General/wholedomain'); ?>">全域旅游</a>
                            <div class="he_submenu_img">
                                <a href="">
                                    <img src="/static/index/static/images/index/index_1.jpg" alt="">
                                </a>
                            </div>
                        </div>

                    </div>
                </li class="a_hover">
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/live'); ?>">住宿<span>Lodging</span></a>
                    <div class="nav_dn">
                        <div class="he_submenu">
                            <a href="<?php echo url('Navigation/live'); ?>#a1">度假酒店</a>
                            <a href="<?php echo url('Navigation/live'); ?>#a2">精品客栈</a>
                            <a href="<?php echo url('Navigation/live'); ?>#a3">特色乡居</a>
                            <div class="he_submenu_img">
                                <a href="">
                                    <img src="/static/index/static/images/index/index_3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/food'); ?>">美食<span>Delicious</span></a>
                    <div class="nav_dn">
                        <div class="he_submenu">
                            <a href="<?php echo url('Navigation/food'); ?>#a1">美滋美味</a>
                            <a href="<?php echo url('Navigation/food'); ?>#a2">名店推荐</a>
                            <div class="he_submenu_img">
                                <a href="">
                                    <img src="/static/index/static/images/index/index_2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/scenery'); ?>">景点<span>Scenic spot</span></a>
                    <div class="nav_dn">
                        <div class="he_submenu">
                            <a href="<?php echo url('Navigation/scenery'); ?>#one">经典必游</a>
                            <a href="<?php echo url('Navigation/scenery'); ?>#a2">原住民风</a>
                            <a href="<?php echo url('Navigation/scenery'); ?>#a3">主题街区</a>
                            <a href="<?php echo url('Navigation/scenery'); ?>#a4">文化艺栈</a>
                            <div class="he_submenu_img">
                                <a href="">
                                    <img src="/static/index/static/images/index/index_4.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/entertainment'); ?>">娱乐<span>Recreation</span></a>
                    <div class="nav_dn">
                        <div class="he_submenu">
                            <a href="<?php echo url('Navigation/entertainment'); ?>#a1">精彩演出</a>
                            <a href="<?php echo url('Navigation/entertainment'); ?>#a2">酒吧咖吧茶吧</a>
                            <div class="he_submenu_img">
                                <a href="">
                                    <img src="/static/index/static/images/index/index_5.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/ceremony'); ?>">周庄有礼<span>Specialty</span></a>
                    <div class="nav_dn">
                        <div class="he_submenu">
                            <a href="<?php echo url('Navigation/ceremony'); ?>#a1">手工艺品</a>
                            <a href="<?php echo url('Navigation/ceremony'); ?>#a2">文化制品</a>
                            <a href="<?php echo url('Navigation/ceremony'); ?>#a3">风味产品</a>
                            <div class="he_submenu_img">
                                <a href="">
                                    <img src="/static/index/static/images/index/index_6.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <div class="nav_dn_bk">
                </div>
            </ul>


            <div class="hd-gz">
                <a href="" target="_blank">EN</a>
                <a href="<?php echo url('Navigation/tickets'); ?>">即刻预订</a>
            </div>

            <div class="search">
                <form action="" method="get" class="ser_frame">
                    <input type="sumbit" id="ser_btn">
                    <input type="text" name="word" id="ser_word" placeholder="请输入搜索关键词...">
                </form>
            </div>
        </div>
        </div>
    </header>
    </nav>

<!------------住宿背景-->
<div class="live_bg" id="a1"></div>

<!------------中间模块-->
<div class="live_middle">
    <!------------- 度假酒店 -->
    <div class="hotel" id="hotel_1">
        <div class="hotel_top">
            <h2>度假酒店</h2>
            <span>Resort Hotel</span>
            <img src="/static/index/static/images/live/middle_bg_1.png" alt="">
        </div>
        <ul class="hotel_content">
            <li class="hotel_content_1">
                <a href="javascript:;">
                    <img src="/static/index/static/images/live/middle_bg.jpg" alt="">
                </a>
                <div class="word">
                    <h2>
                        <a href="javascript:;">水之韵酒店</a>
                    </h2>
                    <p>周庄水之韵酒充满水乡风情，集当地建筑古朴风格与现代化居住的舒适环境内外于一体，房间干净整洁，环境幽雅。酒店为顾客奉上周庄... </p>
                    <p class="word_one">
                        <a href="javascript:;">查看更多</a>
                    </p>
                </div>
            </li>
            <li class="hotel_content_2">
                <a href="javascript:;">
                    <img src="/static/index/static/images/live/middle_bg_2.jpg" alt="">
                </a>
                <div class="word">
                    <h2 style="margin-top:30px;margin-bottom:20px;">
                        <a href="javascript:;">莼鲈之思度假酒店</a>
                    </h2>
                    <p>有一种生活叫周庄，有一种休闲就在莼鲈之思度假酒店，这里是旅行者享受水乡休闲度假体验的首选。这里没有快节奏的生活，没有生活... </p>
                    <p>
                        <a href="javascript:;">查看更多</a>
                    </p>
                </div>
            </li>
            <li class="hotel_content_3">
                <a href="javascript:;">
                    <img src="/static/index/static/images/live/middle_bg_3.png" alt="">
                </a>
                <div class="word">
                    <h2 style="margin-top:30px;margin-bottom:20px;">
                        <a href="javascript:;">莼鲈之思度假酒店</a>
                    </h2>
                    <p>有一种生活叫周庄，有一种休闲就在莼鲈之思度假酒店，这里是旅行者享受水乡休闲度假体验的首选。这里没有快节奏的生活，没有生活... </p>
                    <p>
                        <a href="javascript:;" id="a2">查看更多</a>
                    </p>
                </div>
            </li>
        </ul>
    </div>
    <!--------------精品客栈-->
    <div class="hotel" id="lnn">
        <div class="hotel_top">
            <h2>精品客栈</h2>
            <img src="/static/index/static/images/live/middle_bg_1.png" alt="">
        </div>
        <ul class="hotel_content">
            <li class="hotel_content_1">
                <a href="javascript:;">
                    <img src="/static/index/static/images/live/lnn_bg.png" style="width:580px;height:380px" alt="">
                </a>
                <div class="word">
                    <h2>
                        <a href="javascript:;">贞固堂</a>
                    </h2>
                    <p>周庄贞固堂民居客栈位于太平桥畔，距离双桥仅一步之遥。始建于民国初期，内部建筑结构精巧，高墙花窗、粉墙黛瓦，以木制家具为主... </p>
                    <p>
                        <a href="javascript:;">查看更多</a>
                    </p>
                </div>
            </li>
            <li class="hotel_content_2">
                <a href="javascript:;">
                    <img src="/static/index/static/images/live/lnn_bg_1.jpg" style="width:580px;height:380px" alt="">
                </a>
                <div class="word">
                    <h2 style="margin-top:30px;margin-bottom:20px;">
                        <a href="javascript:;">意在青云</a>
                    </h2>
                    <p>形入紫闼，而意在青云。客栈座落在周庄古镇中心位置，每间客房都各具特点，充分体现了中国建筑的特色，在喧嚣中让客人享受一份悠... </p>
                    <p>
                        <a href="javascript:;">查看更多</a>
                    </p>
                </div>
            </li>
            <li class="hotel_content_3">
                <a href="javascript:;">
                    <img src="/static/index/static/images/live/lnn_bg_2.jpg" style="width:580px;height:380px" alt="">
                </a>
                <div class="word">
                    <h2 style="margin-top:30px;margin-bottom:20px;">
                        <a href="javascript:;">碧水云居</a>
                    </h2>
                    <p>客栈座落在周庄古镇中心注明的富安桥旁，客栈为古典江南人家式建筑，中式庭院景致细腻精美，环境幽雅，闹中取静。客栈装饰精致，... </p>
                    <p>
                        <a href="javascript:;" id="a3">查看更多</a>
                    </p>
                </div>
            </li>
        </ul>
    </div>
    <!--------- 特色乡居 -->
    <div class="hotel" id="country">
        <div class="hotel_top">
            <h2>特色乡居</h2>
            <img src="/static/index/static/images/live/middle_bg_1.png" alt="">
        </div>
        <ul class="hotel_content">
            <li class="hotel_content_1">
                <a href="javascript:;">
                    <img src="/static/index/static/images/live/country_bg.jpg" style="width:580px;height:380px" alt="">
                </a>
                <div class="word" style="height:380px;">
                    <h2>
                        <a href="javascript:;">周庄·香村</a>
                    </h2>
                    <p>香村·祁庄位于周庄镇三珠浜村，是依托周庄古镇的深度乡村文旅度假品牌，距离上海约80公里，距离周庄古镇约5公里，临近肖甸湖森林... </p>
                    <p class="word_one">
                        <a href="javascript:;">查看更多</a>
                    </p>
                </div>
            </li>

        </ul>
    </div>
</div>

<!--------------------------- 尾部 -->

<!--------------------------- 尾部 -->
<a href="javascript:;" id="up" style="display: none;">
    <img src="/static/index/static/images/index/floatbtn2.png" alt="">
</a>
<footer>
    <div class="footer_middle center">
        <div class="ft_middle_top">
            <dl>
                <dt><a href="<?php echo url('General/general'); ?>">概况</a></dt>
                <dd><a href="<?php echo url('General/introduction'); ?>">周庄简介</a></dd>
                <dd><a href="<?php echo url('General/ancienttown'); ?>">古镇旅游</a></dd>
                <dd><a href="<?php echo url('General/wholedomain'); ?>">全域旅游</a></dd>
            </dl>
            <dl>
                <dt><a href="<?php echo url('Navigation/live'); ?>">住宿</a></dt>
                <dd><a href="<?php echo url('Navigation/live'); ?>#a1">度假酒店</a></dd>
                <dd><a href="<?php echo url('Navigation/live'); ?>#a2">精品客栈</a></dd>
                <dd><a href="<?php echo url('Navigation/live'); ?>#a3">特色乡居</a></dd>

            </dl>
            <dl>
                <dt><a href="<?php echo url('Navigation/food'); ?>">美食</a></dt>
                <dd><a href="<?php echo url('Navigation/food'); ?>#a1">名店推荐</a></dd>
                <dd><a href="<?php echo url('Navigation/food'); ?>#a2">美滋美味</a></dd>
            </dl>
            <dl>
                <dt><a href="<?php echo url('Navigation/scenery'); ?>">景点</a></dt>
                <dd><a href="<?php echo url('Navigation/scenery'); ?>#one">经典必游</a></dd>
                <dd><a href="<?php echo url('Navigation/scenery'); ?>#a2">原住民风体验点</a></dd>
                <dd><a href="<?php echo url('Navigation/scenery'); ?>#a3">主题街区</a></dd>
                <dd><a href="<?php echo url('Navigation/scenery'); ?>#a4">文化艺栈</a></dd>
            </dl>
            <dl>
                <dt><a href="<?php echo url('Navigation/entertainment'); ?>">娱乐</a></dt>
                <dd><a href="<?php echo url('Navigation/entertainment'); ?>#a1">精彩演出</a></dd>
                <dd><a href="<?php echo url('Navigation/entertainment'); ?>#a2">酒吧咖吧茶吧</a></dd>
            </dl>
            <dl>
                <dt><a href="<?php echo url('Navigation/ceremony'); ?>">周庄有礼</a></dt>
                <dd><a href="<?php echo url('Navigation/ceremony'); ?>#a1">手工艺品</a></dd>
                <dd><a href="<?php echo url('Navigation/ceremony'); ?>#a2">文化制品</a></dd>
                <dd><a href="<?php echo url('Navigation/ceremony'); ?>#a3">风味产品</a></dd>
            </dl>
        </div>
        <div class="ft_middle_bottom">
            <a href="">
                <img src="/static/index/static/images/index/bottom_logo.png" alt="">
            </a>
        </div>
    </div>
    <div class="ft_state center">

        <div class="ft_state_link">
            <a href="">版权声明</a> |
            <a href="">联系我们</a> |
            <a href="">友情链接</a> |
            <a href="">网络预订</a> |
            <a href="" class="ft_state_link_s">
                <span></span> 周庄微信服务号
            </a> |
            <a href="">周庄新浪微博</a>
        </div>
        <div class="ft_state_copyright">
            <span>Copyright © 2019  仅供学习交流，不作商业用途　网站建设:今日小组&nbsp&nbsp&nbsp&nbsp&nbsp</span>
            <a href="">ICP备案号xxxxxxxx号</a>
            <span id="ft_s_icon">
                    <a href="">
                        <img src="/static/index/static/images/index/index_42.gif" alt="">
                    </a>
                </span>
        </div>
    </div>
</footer>

<script src=/static/index/static/js/live.js "></script>
</body>

</html>