<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:95:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/index\view\navigation\scenery.html";i:1574682765;s:81:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\header1.html";i:1576136533;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\footer.html";i:1575614033;}*/ ?>
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


<!------------景点背景-->
<div class="scenery_bg"></div>

<!------------中间模块-->
<div class="middle">
    <!------------经典必游-->
    <div class="swim" id="one">
        <span style="font-size: 45px;color: #444;position: absolute;left: 0;top: 50px;">经典必游</span>
        <img src="/static/index/static/images/scenery/scenery_bg.png" alt="">
    </div>
    <!------------------------ 内容 -------------->
    <div class="content">
        <ul class="content_wrap">
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_1.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">双桥</a>
                </h3>
                <p>双桥由一座石拱桥——世德桥和一座石梁桥——永安桥组成。桥面一横一竖，桥洞一方一圆，样子很像是古时候人们使用的钥匙。清澈的银子浜和南北市河在镇区东北交汇成十字，河上的石桥联袂筑，显得十分别致。</p>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_2.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">沈厅</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_3.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">沈厅</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_4.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">富安桥</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_5.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">迷楼</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
        </ul>
    </div>
    <hr id="a2">
    <!------------原住民风---->
    <div class="swim" id="two">
        <span style="font-size: 45px;color: #444;position: absolute;left: 0;top: 50px;">原住民风</span>
        <img src="/static/index/static/images/scenery/scenery_bg.png" alt="">
    </div>
    <!------------------------ 内容 -------------->
    <div class="content">
        <ul class="content_wrap">
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_6.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">吴爷爷小院</a>
                </h3>
                <p>老周庄人的居家生活。热情好客的吴爷爷是地道的周庄人，小院里种满了牡丹、昙花。吴爷爷是周庄的老领导了，熟悉周庄发展的点点滴滴，以及900岁周庄的历史典故和民风民俗，还有当年陈逸飞到周庄的趣味轶事。</p>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_7.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">三毛茶楼</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_8.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">全功路社区服务中心</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_9.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">富贵园广场周末老电影</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_10.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">南湖鱼市</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
        </ul>
    </div>
    <hr id="a3">
    <!------------主题街区-->
    <div class="swim" id="three">
        <span style="font-size: 45px;color: #444;position: absolute;left: 0;top: 50px;">主题街区</span>
        <img src="/static/index/static/images/scenery/scenery_bg.png" alt="">
    </div>
    <!------------------------ 内容 -------------->
    <div class="content">
        <ul class="content_wrap">
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_11.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">江南文化体验街区</a>
                </h3>
                <p>贞丰文化街上汇集了缂丝坊、苏绣坊、圆木坊、砖坯艺坊、铁匠坊、鞋艺坊、竹编坊、核雕坊、土布坊……十二坊每一坊都是典型的周庄，原住民用原汁原味的艺术，亲手呈献朴素醇厚的水乡。 地址：纸箱王——青龙桥——贞丰文化街</p>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_12.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">“小桥流水人家”观光街区</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_13.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">1086慢生活街区</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_14.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">南湖风物文创街区</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_15.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">南湖湾水乡天空度假社区</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
        </ul>
    </div>
    <hr id="a4">
    <!-------文化艺栈------->
    <div class="swim" id="four">
        <span style="font-size: 45px;color: #444;position: absolute;left: 0;top: 50px;">文化艺栈</span>
        <img src="/static/index/static/images/scenery/scenery_bg.png" alt="">
    </div>
    <!------------------------ 内容 -------------->
    <div class="content">
        <ul class="content_wrap">
            <li class="four_bg">
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_16.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">影艺小院</a>
                </h3>
                <p>这是国内旅游景区成立的第一家为游客提供摄影服务的艺术小院，开创了旅游摄影结合的新尝试。在传承摄影文化、发展摄影艺术的同时，为摄影爱好者们提供专属定制化服务。</p>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_17.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">南湖古琴社</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_18.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">月上·周庄</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_19.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">纸箱王创意园区</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/static/index/static/images/scenery/scenery_bg_20.jpg" alt="">
                </a>
                <h3>
                    <a href="javascript:;">南社百年书院</a>
                </h3>
                <a href="javascript:;" class="scenery_more">了解更多>></a>
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