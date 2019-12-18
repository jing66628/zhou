<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:88:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/index\view\index\index.html";i:1576137297;s:81:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\header1.html";i:1576136533;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\footer.html";i:1575614033;}*/ ?>
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



<!------------------- 轮播 -->
<section id="main_ad" id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#main_ad" data-slide-to="0" class="active"></li>
        <li data-target="#main_ad" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image: url('/static/index/static/images/index/banner.jpg')">
        </div>
        <div class="item" style="background-image: url('/static/index/static/images/index/banner2.jpg')">
        </div>
    </div>
</section>

<!-- 了解更多 -->
<div class="more">
    <div class="more_content">
        <div class="more_left">
            <p>
                <a href="javascript:;">查看更多</a>
            </p>
            <p>
                <a href="javascript:;">精彩周庄特辑</a>
            </p>
            <div class="more_left_ct">
                <a href="">
                    <img src="/static/index/static/images/index/weibo-shouji.png" alt="">
                </a>
                <a href="">
                    <img src="/static/index/static/images/index/weixin-shouji.png" alt="">
                </a>
                <a href="">
                    <img src="/static/index/static/images/index//face-shouji.png" alt="">
                </a>
            </div>
            <div class="more_left_bm">
                <span class="stripe">
                        <a href="javascript:;">更多动态</a>
                        <span class="stripe_red"></span>
                </span>
            </div>
        </div>
        <div class="more_right">
            <ul>
                <?php foreach($data as $k=>$v): ?>
                <li>
                    <p><a href="<?php echo url('Zixun/hotpot',['id'=>$v['id']]); ?>" target="_blank"><?php echo $v['title']; ?></a></p>
                    <small><?php echo date("Y-m-d",$v['update_time']); ?></small>
                    <div class="more_left_bm">
                        <span class="stripe">
                            <a href="javascript:;">更多动态</a>
                            <span class="stripe_red"></span>
                        </span>
                    </div>
                </li>
                <?php endforeach; ?>
                <!-- <li>
                    <p>生活｜小院小巷生活美，闲来水乡晒暖阳</p>
                    <small>2019.11.12</small>
                    <div class="more_left_bm">
                        <span class="stripe">
                                <a href="">更多动态</a>
                                <span class="stripe_red"></span>
                        </span>
                    </div>
                </li>
                <li>
                    <p>寻味周庄｜秋季限定攻略，拿好不“蟹”</p>
                    <small>2019.10.30</small>
                    <div class="more_left_bm">
                        <span class="stripe">
                                <a href="">更多动态</a>
                                <span class="stripe_red"></span>
                        </span>
                    </div>
                </li> -->
            </ul>
        </div>
    </div>
</div>


<!------------------- 小轮播 -->

<div class="banner">
    <div class="banner_title">
    </div>
    <div class="banner_small">
        <ul>
            <li style="display:block;"><img src="/static/index/static/images/index/one/1.jpg" alt=""></li>
            <li><img src="/static/index/static/images/index/one/2.jpg" alt=""></li>
            <li><img src="/static/index/static/images/index/one/3.jpg" alt=""></li>
            <li><img src="/static/index/static/images/index/one/4.jpg" alt=""></li>
        </ul>
        <div class="banner_tab">
            <ul>
                <li style="left:350px;margin-left:-175px">
                    <p>周庄简介</p>
                    <span class="banner_active"></span>
                </li>
                <li style="left:600px;margin-left:-175px">
                    <p>经典必游</p>
                    <span class=""></span>
                </li>
                <li style="left:850px;margin-left:-175px">
                    <p>古镇旅游</p>
                    <span class=""></span>
                </li>
                <li style="left:1100px;margin-left:-175px">
                    <p>全域旅游</p>
                    <span class=""></span>
                </li>
            </ul>
        </div>
        <a href="javascript:" class="banner_btn"></a>
        <a href="javascript:" class="banner_btn_1"></a>
    </div>
    <div class="banner_word">
        <div style="display: block">
            <p>周庄在全世界享有“中国第一水乡”的美誉，被联合国教科文组织列入世界文化遗产预备清单，是首批中国历史文化名镇、首批国家AAAAA级旅游景区、首批全国特色景观名镇.</p>
            <div class="banner_word_more">
                <div class="more_left_bm">
                    <span class="stripe">
                            <a href="">了解更多</a>
                            <span class="stripe_red"></span>
                    </span>
                </div>
            </div>
        </div>
        <div style="padding:0 190px;">
            <p>双桥由一座石拱桥——世德桥和一座石梁桥——永安桥组成。桥面一横一竖，桥洞一方一圆，样子很像是古时候人们使用的钥匙，清澈的银子浜和南北市河在镇区东北交汇成十字，河上的石桥联袂筑，显得十分别致。</p>
            <div class="banner_word_more">
                <div class="more_left_bm">
                    <span class="stripe">
                            <a href="">了解更多</a>
                            <span class="stripe_red"></span>
                    </span>
                </div>
            </div>
        </div>
        <div>
            <p>时至今日，走进周庄古镇，水巷之间，驳岸、拱桥、粉墙、黛瓦，保存完整，吴韵厚重。井字型河道上完好保存着14座建于元、明、清各代的古石桥。800多户原住民枕河而居，60%以上的民居依旧保存着明清时期的建筑风貌。</p>
            <div class="banner_word_more">
                <div class="more_left_bm">
                    <span class="stripe">
                            <a href="">了解更多</a>
                            <span class="stripe_red"></span>
                    </span>
                </div>
            </div>
        </div>
        <div>
            <p>天堂苏杭之间，是周庄，它被世人称为“中国第一水乡”。俯瞰全镇，宛如头向南湖，身在太史淀、天花荡、白蚬湖，尾摇澄湖，正在遨游江南的一尾鱼。盈盈湖荡，悠悠河港，流淌成梦里的“鱼米之乡”。</p>
            <div class="banner_word_more">
                <div class="more_left_bm">
                    <span class="stripe">
                            <a href="">了解更多</a>
                            <span class="stripe_red"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- --------------魅力周庄 -->

<div class="charm">
    <div class="charm_center">
        <div class="charm_title"></div>
        <ul class="charm_three">
            <li class="charm_three_wrap">
                <div>
                    <ul class="charm_three_word" style=" top:35%; left:43%;">
                        <li><a href="javascript:">住宿</a></li>
                        <li><a href="javascript:">美食</a></li>
                        <li><a href="javascript:">周庄</a></li>
                        <li><a href="javascript:">度假酒店</a></li>
                    </ul>
                    <div class="charm_three_black"></div>
                    <img src="/static/index/static/images/index/charm_1.jpg" alt="">
                </div>
                <h3>度假</h3>
                <p>品质而舒适，集餐饮、住宿、旅游、会议、娱乐于一体，充满水乡风情。</p>
                <div class="more_left_bm">
                    <span class="stripe">
                            <a href="">了解更多</a>
                            <span class="stripe_red"></span>
                    </span>
                </div>
            </li>
            <li class="charm_three_wrap charm_three_wrap_1">
                <div>
                    <ul class="charm_three_word" style=" top:35%; left:43%; margin-left:-62px">
                        <li><a href="javascript:">三毛茶楼</a></li>
                        <li><a href="javascript:">富贵园广场周末老电影</a></li>
                        <li><a href="javascript:">周庄吃讲茶</a></li>
                        <li><a href="javascript:">全功路社区服务中心</a></li>
                    </ul>
                    <div class="charm_three_black"></div>
                    <img src="/static/index/static/images/index/charm_2.jpg" alt="">
                </div>
                <h3>特色乡居</h3>
                <p>隐于寻常百姓家，感受年代秀民宿的不同气质，品味江南乡村的乡情乡韵。</p>
                <div class="more_left_bm">
                    <span class="stripe">
                            <a href="">了解更多</a>
                            <span class="stripe_red"></span>
                    </span>
                </div>
            </li>
            <li class="charm_three_wrap">
                <div>
                    <ul class="charm_three_word" style=" top:35%; left:38.5%;">
                        <li><a href="javascript:">双桥</a></li>
                        <li><a href="javascript:">叶楚伧故居</a></li>
                        <li><a href="javascript:">澄虚道院</a></li>
                        <li><a href="javascript:">周庄舫</a></li>
                    </ul>
                    <div class="charm_three_black"></div>
                    <img src="/static/index/static/images/index/charm_3.jpg" alt="">
                </div>
                <h3>经典必游</h3>
                <p>周庄历来人文荟萃，历史悠远，景点众多。古桥、老街、寺观、古建...</p>
                <div class="more_left_bm">
                    <span class="stripe">
                            <a href="">了解更多</a>
                            <span class="stripe_red"></span>
                    </span>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-------------------出行锦囊 -->
<div class="trip">
    <div class="trip-center">
        <div class="trip-title">
            <h1>出行锦囊</h1>
        </div>
        <ul class="trip-icon">
            <li>
                <img src="/static/index/static/images/index/youji-1.png" alt="">
                <svg onclick="" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" style="padding-left: 5px; cursor: pointer; margin-left: 10px;width:50px;height:50px;"><defs><style>.cls-1,.cls-2{fill:none;stroke:#272831;stroke-miterlimit:10;}.cls-1{stroke-width:2px;}</style></defs><title>游记攻略</title><path class="cls-1" d="M67,70.5H27a6,6,0,0,1-6-6v-41a6,6,0,0,1,6-6H67Z" transform="translate(-19.98 -16.5)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 192.852, 192.852; stroke-dashoffset: 0;"></path><path class="cls-2" d="M23.83,60.65V23.5a6,6,0,0,1,6-6" transform="translate(-19.98 -16.5)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 46.5761, 46.5761; stroke-dashoffset: 0;"></path><path class="cls-1" d="M21,64.5a5.21,5.21,0,0,1,5.21-5.21H67" transform="translate(-19.98 -16.5)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 48.975, 48.975; stroke-dashoffset: 0;"></path><polyline class="cls-1" points="40.1 1 40.1 16.64 34.88 13.17 29.67 16.64 29.67 1"></polyline><line class="cls-2" x1="47.05" y1="48.79" x2="1" y2="48.79"></line><line class="cls-2" x1="30.53" y1="1" x2="29.67" y2="1.86"></line><line class="cls-2" x1="36.18" y1="1" x2="29.67" y2="7.51"></line><line class="cls-2" x1="40.09" y1="2.75" x2="29.67" y2="13.17"></line><line class="cls-2" x1="40.09" y1="8.4" x2="35.14" y2="13.35"></line><line class="cls-2" x1="40.09" y1="14.06" x2="38.54" y2="15.61"></line></svg>
                <p>
                    <a href="javascript:">游记攻略</a>
                </p>
            </li>
            <li>
                <img src="/static/index/static/images/index/piaowu-1.png" alt="">
                <svg onclick="" xmlns="http://www.w3.org/2000/svg" width="80" height="60" viewBox="0 0 65 60" style="margin-top:5px;cursor:pointer;width:50px;height:50px;"><defs><style>.cls-1,.cls-2,.cls-3{fill:none;stroke:#272831;stroke-miterlimit:10;}.cls-1{stroke-width:2px;}.cls-3{stroke-width:3px;}</style></defs><title>票务信息</title><path class="cls-1" d="M75,25.75V62.09H31.17a3.21,3.21,0,1,0-6.41,0H13V25.75H24.76a3.21,3.21,0,0,0,6.41,0Z" transform="translate(-12 -24.75)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 204.03, 204.03; stroke-dashoffset: 0;"></path><line class="cls-2" x1="16" y1="5.17" x2="16" y2="8.17"></line><line class="cls-2" x1="16" y1="10.17" x2="16" y2="13.17"></line><line class="cls-2" x1="16" y1="15.17" x2="16" y2="18.17"></line><line class="cls-2" x1="16" y1="20.17" x2="16" y2="23.17"></line><line class="cls-2" x1="16" y1="25.17" x2="16" y2="28.17"></line><line class="cls-2" x1="16" y1="30.17" x2="16" y2="33.17"></line><rect class="cls-2" x="50" y="28" width="6" height="5"></rect><line class="cls-2" x1="24" y1="30" x2="38" y2="30"></line><line class="cls-2" x1="24" y1="33" x2="32" y2="33"></line><line class="cls-3" x1="5" y1="8.5" x2="10" y2="8.5"></line><line class="cls-2" x1="5" y1="11.5" x2="10" y2="11.5"></line><line class="cls-2" x1="5" y1="5.5" x2="10" y2="5.5"></line><circle class="cls-2" cx="53.5" cy="8" r="2.5"></circle><line class="cls-2" x1="56" y1="12.5" x2="49" y2="12.5"></line><line class="cls-2" x1="60" y1="1.09" x2="60" y2="37.4"></line></svg>
                <p>
                    <a href="javascript:">票务信息</a>
                </p>
            </li>
            <li>
                <img src="/static/index/static/images/index/dianhua-1.png" alt="">
                <svg style="cursor:pointer; width:50px;height:50px;" onclick="" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"><defs><style>.cls-1,.cls-2{fill:none;stroke:#272831;stroke-miterlimit:10;}.cls-1{stroke-width:2px;}</style></defs><title>常用电话</title><path class="cls-1" d="M63.6,66.58l2.3-3.45h0a5.14,5.14,0,0,0,.61-1.72,5,5,0,0,0-.27-2.69,2.82,2.82,0,0,0-1.94-1.78,49,49,0,0,1-6.9-2.35,2.5,2.5,0,0,0-1-.21,2.57,2.57,0,0,0-2.21,1.23l-.94,1.53a.8.8,0,0,1-.7.4.83.83,0,0,1-.36-.08,46.72,46.72,0,0,1-21-21,.82.82,0,0,1,.32-1.06l1.54-1a2.61,2.61,0,0,0,1-3.22,50.22,50.22,0,0,1-2.36-6.89C31.32,22.87,30,22,28.12,22H28a5.39,5.39,0,0,0-2.52.68h0L22,25a8.34,8.34,0,0,0-3.53,4.18,8.47,8.47,0,0,0-.18,5.49c1.58,5.09,5.29,13,14,21.68S48.88,68.72,54,70.29a8.33,8.33,0,0,0,9.64-3.71Z" transform="translate(-15.58 -14.67)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 155.651, 155.651; stroke-dashoffset: 0;"></path><path class="cls-2" d="M16.08,31.59h0M55.93,72.33h0M30.67,35.67l-1.3.8A.83.83,0,0,0,29,37.56,47.52,47.52,0,0,0,50.49,59a.81.81,0,0,0,.37.09.85.85,0,0,0,.72-.41l.71-1.17" transform="translate(-15.58 -14.67)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 36.3145, 36.3145; stroke-dashoffset: 0;"></path><path class="cls-2" d="M31.95,35.06C29.39,30.34,28,25.8,28,22" transform="translate(-15.58 -14.67)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 13.778, 13.778; stroke-dashoffset: 0;"></path><path class="cls-2" d="M66.52,61.39c-3.87-.21-8.45-1.76-13.15-4.46" transform="translate(-15.58 -14.67)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 14.0061, 14.0061; stroke-dashoffset: 0;"></path><path class="cls-1" d="M44.94,32.71a9.94,9.94,0,0,1,9.94,9.94" transform="translate(-15.58 -14.67)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 15.6159, 15.6159; stroke-dashoffset: 0;"></path><path class="cls-1" d="M44.94,24.19A18.46,18.46,0,0,1,63.4,42.65" transform="translate(-15.58 -14.67)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 29.001, 29.001; stroke-dashoffset: 0;"></path><path class="cls-1" d="M44.94,15.67a27,27,0,0,1,27,27" transform="translate(-15.58 -14.67)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 42.4174, 42.4174; stroke-dashoffset: 0;"></path></svg>
                <p>
                    <a href="javascript:">常用电话</a>
                </p>
            </li>
            <li>
                <img src="/static/index/static/images/index/luxian-1.png" alt="">
                <svg style="cursor:pointer; width:50px;height:50px;" onclick="" xmlns="http://www.w3.org/2000/svg" width="80" height="60" viewBox="0 0 60 60"><defs><style>.cls-1,.cls-2{fill:none;stroke:#272831;stroke-miterlimit:10;}.cls-1{stroke-width:2px;}</style></defs><title>景区交通</title><polygon class="cls-1" points="2.15 45.5 19.18 25.28 29.15 31.66 40.47 14.63 57.49 45.5 2.15 45.5"></polygon><line class="cls-2" x1="54.49" y1="45.5" x2="38.82" y2="17.1"></line><path class="cls-1" d="M22.88,55.75a16,16,0,1,1,26-15.24" transform="translate(-11.68 -21)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 61.2401, 61.2401; stroke-dashoffset: 0;"></path><polyline class="cls-2" points="27.49 45.5 34.49 35.5 41.49 45.5"></polyline><path class="cls-2" d="M63.78,24.34v0a2.82,2.82,0,0,0-5.39-1.18,1.57,1.57,0,1,0-3,1h-.6a2.67,2.67,0,0,0-2.67,2.67h0a2.67,2.67,0,0,0,2.67,2.67h8a2.67,2.67,0,0,0,2.67-2.67h0A2.67,2.67,0,0,0,63.78,24.34Z" transform="translate(-11.68 -21)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 37.0281, 37.0281; stroke-dashoffset: 0;"></path><path class="cls-2" d="M68.17,28.5a3,3,0,1,1,3,3h-12" transform="translate(-11.68 -21)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 26.1392, 26.1392; stroke-dashoffset: 0;"></path></svg>
                <p>
                    <a href="javascript:">景区交通</a>
                </p>
            </li>
            <li>
                <img src="/static/index/static/images/index/jiaotong-1.png" alt="">
                <svg style="cursor:pointer; width:50px;height:50px;" onclick="" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"><defs><style>.cls-1,.cls-2,.cls-3{fill:none;stroke:#272831;stroke-miterlimit:10;}.cls-2{stroke-dasharray:4.07 2.04;}.cls-3{stroke-width:2px;}</style></defs><title>周边交通</title><path class="cls-1" d="M62.56,41.23A3.59,3.59,0,0,1,63.51,43" transform="translate(-15.5 -16)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 2.03601, 2.03601; stroke-dashoffset: 0;"></path><path class="cls-2" d="M63.82,45c.43,7.55-5.37,21.58-15.61,9.51-5.93-7-28.19-23.12-22.78,2.58" transform="translate(-15.5 -16)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 66.2079, 66.2079; stroke-dashoffset: 0;"></path><path class="cls-1" d="M25.65,58.05q.21.94.48,1.95" transform="translate(-15.5 -16)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 2.00835, 2.00835; stroke-dashoffset: 0;"></path><circle class="cls-1" cx="13.24" cy="48.76" r="2.76"></circle><polyline class="cls-3" points="49.64 20.81 55 22 55 55 37 51 19 55 1 51 1 18 19 22 37 18 41.5 19"></polyline><line class="cls-1" x1="19" y1="22" x2="19" y2="55"></line><line class="cls-1" x1="37" y1="18" x2="37" y2="51"></line><path class="cls-3" d="M69.06,20.14l-.7-.7a9.54,9.54,0,0,0-12.75,0l-.24.23.07-.06-.35.35.06-.06-.23.24a9.53,9.53,0,0,0,.17,12.93L62,40l6.91-6.9A9.54,9.54,0,0,0,69.06,20.14Z" transform="translate(-15.5 -16)" style="transition: stroke-dashoffset 2s linear; stroke-dasharray: 64.3069, 64.3069; stroke-dashoffset: 0;"></path><circle class="cls-1" cx="46.48" cy="10.52" r="3.96"></circle></svg>
                <p>
                    <a href="javascript:">周边交通</a>
                </p>
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
<!-- 返回顶部 -->



<script src="/static/index/static/js/jquery.js"></script>
<script src="/static/index/static/lib/bootstrap.js"></script>
<script src="/static/index/static/js/index.js"></script>
<script src="/static/index/static/js/head.js"></script>

</body>

</html>