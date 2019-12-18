<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:101:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/index\view\navigation\entertainment.html";i:1574908007;s:81:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\header1.html";i:1576136533;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\footer.html";i:1575614033;}*/ ?>
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

<!--------------------------- nav_bgimg部分 -->
<div class="nav_generalbgimg">
</div>
<!--------------------------- nav_bgimg部分结束 -->
<!--------------------------- head_nav部分 -->
<div class="head_nav" id="a1">
    <div class="head_navbox">
        <div class="nav_nleft">
            <span></span>
            <a href="">首页</a> >
            <a href="">娱乐</a>
        </div>
    </div>
</div>
<!--------------------------- head_nav部分结束 -->
<!--------------------------- entertainment_main部分 -->
<div class="entertainment_main">

    <div class="entertainment_mainbox">
        <div class="performance_box">
            <img src="/static/index/static/images/entertainment/entertainment37.jpg" alt="精彩演出">
            <div class="performance_textbox">
                <h2>精彩演出</h2>
                <p class="textbox1_p1">这里有呈现江南原生态文化的水乡实景演出，一夜识江南；这里有水墨腔调的昆曲，看水袖长衣舞动如戏人生；这里有评弹声声，领略江南的风情。</p>
                <p class="textbox1_p2">
                    <a class="mvls_box" href="javascript:;">了解更多>></a>
                </p>
            </div>
        </div>
        <div class="BarCoffeeTea_box">
            <img src="/static/index/static/images/entertainment/entertainment38.jpg" alt="酒吧咖吧茶吧" id="a2">
            <div class="BarCoffeeTea_textbox">
                <h2>酒吧咖吧茶吧</h2>
                <p style="margin: 15px auto;width: 60%">周庄有特制的美酒，有醇香的咖啡，有淡香的茶水，有特别的音乐，等着你有趣的故事。</p>
                <p><a class="bar_box" style="color: #fff" href="javascript:;">了解更多>></a></p>
            </div>
        </div>
    </div>
</div>
<!-- 酒吧更多 -->
<div class="bar">
    <div class="bar_centent">
        <ul class="bar_wrap">
            <li>
                <h3>一、红庭</h3>
                <img src="/static/index/static/images/entertainment/BarCoffeeTea41.jpg" alt="">
                <p>酒吧街区里热闹的酒吧，华丽的颜色和怀旧的装饰是其特点。</p>
            </li>
            <li>
                <h3>二、纸箱王露天音乐吧</h3>
                <img src="/static/index/static/images/entertainment/BarCoffeeTea42.jpg" alt="">
                <p style="text-indent: 2px;">可以和三五好友，一边分享露天烧烤的美味欢乐，一边尽情沉醉在富有质感的音乐声里。</p>
            </li>
            <li>
                <h3>三、汤小糖</h3>
                <img src="/static/index/static/images/entertainment/BarCoffeeTea43.jpg" alt="">
                <p>饿了？渴了？还是累了？来汤小糖解馋、解渴、解闷。健康早午餐，悠闲下午茶，K歌小聚喝点酒。</p>
            </li>
        </ul>
    </div>
    <div class="close">
    </div>
</div>
<!-- 精彩表演 -->
<div class="performance_wrap">
    <div class="performance_main">
        <div class="pfmc_box">
            <div class="fourseasons_box">
                <div class="fourseasons_textbox">
                    <h2>四季周庄</h2>
                    <div class="textbox_p">这是一部呈现江南原生态文化的水乡实景演出，以明初江南首富沈万三和陆丽娘优美的爱情故事为主线，从相识相恋，两人的爱情走过了春夏秋冬，最终结成连理。</div>
                    <a class="more_bt" href="">查看更多</a>
                </div>
            </div>
            <div class="ancientStage_box">
                <div class="ancientStage_textbox">
                    <h2>古戏台</h2>
                    <div class="textbox_p">
                        水墨腔调，水袖长衣，余音环绕，水滋水味。人生如戏，戏如人生。百戏之祖在生旦净末丑的演绎下如梦如幻，金戈铁马、鸟鸣莺啭，人生的爱情情仇、悲欢聚散，都在古戏台上一幕幕铺展……一壶阿婆茶，数碟点心，一段回味，一场大梦！
                    </div>
                    <a class="more_bt" href="">查看更多</a>
                </div>
            </div>
            <div class="PingTan_box">
                <div class="PingTan_textbox">
                    <h2>
                        聚宾楼评弹表演
                    </h2>
                    <img src="/static/index/static/images/entertainment/performance_40.png" alt="">
                    <div class="textbox_p">一壶阿婆茶，几碟茶点，亲朋好友，围坐一桌，聊天解乏，悦听评弹。《江南好》、《黛玉葬花》、《太湖美》、《杜十娘》等经典曲目，声声入耳，甚为惬意。 </div>
                    <a class="more_bt" href="">查看更多</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mvls_close">
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


<script src="/static/index/static/js/head.js"></script>
<script src="/static/index/static/js/entertainment.js"></script>
</body>

</html>