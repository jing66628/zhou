<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:96:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/index\view\general\ancienttown.html";i:1574263096;s:81:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\header1.html";i:1576120729;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\footer.html";i:1575614033;}*/ ?>
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
            <ul class="hd-nav">
                <div class="nav-icon">

                </div>
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
<div class="nav_ancientbgimg"></div>
<!--------------------------- nav_bgimg部分结束 -->
<!--------------------------- head_nav部分 -->
<div class="head_nav">
    <div class="head_navbox">
        <div class="nav_nleft">
            <span></span>
            <a href="<?php echo url('Index/index'); ?>">首页</a> >
            <a href="<?php echo url('General/general'); ?>">概况</a> >
            <a href="">古镇旅游</a>
        </div>
    </div>
</div>
<!--------------------------- head_nav部分结束 -->
<div class="main_ancientTown">
    <div class="ancientTown_box">
        <h1 class="ancientTown_h1">
            古镇旅游
            <span>Ancient town protection</span>
        </h1>
        <div class="ancientTown_mainbox">
            <p style="text-align:center;">
                <strong style="color: rgb(32, 29, 29)">周庄——中国古镇旅游开发的先驱</strong>
            </p>
            <p>1983年，著名画家陈逸飞的画作《双桥》，让世界认识了周庄。</p>
            <p>1988年，周庄成立江苏省第一个乡镇旅游公司——“周庄汽车出租旅游服务公司”，寻求古镇旅游产业发展的道路，开创中国古镇旅游的先河。</p>
            <p>1989年4月1日，周庄售出第一张景点门票。</p>
            <p>2001年6月6日，APEC贸易部长非正式会议在周庄召开，周庄又受到了世界的瞩目。</p>
            <p>……</p>
            <p>时至今日，走进周庄古镇，水巷之间，驳岸、拱桥、粉墙、黛瓦，保存完整，吴韵厚重。井字型河道上完好保存着14座建于元、明、清各代的古石桥。800多户原住民枕河而居，60%以上的民居依旧保存着明清时期的建筑风貌。吴侬软语，阿婆茶香，橹声欸乃，昆曲悠远，“小桥流水人家”如入画卷。国画大师吴冠中先生盛赞“周庄集中国水乡之美”，建筑大师贝聿铭题词“周庄是国宝”。</p>
            <p style="text-align:center;">
                <img style="white-space:normal;" alt="" src="/static/index/static/images/general/ancientTown17.jpg">
            </p>
            <p style="text-align:center;">
                <img alt="" src="/static/index/static/images/general/ancientTown18.jpg">
            </p>
            </br>
            <p style="text-align:center;">
                <span style="line-height:1.5;color: rgb(32, 29, 29)"><strong>湖湾建设</strong></span>
            </p>
            <span style="line-height:1.5;"><br>
                    <strong style="color:rgb(32, 29, 29)">南湖湾水乡天空度假社区</strong><br>
                    　　南湖湾位于周庄镇南部，主要包括南湖长桥、南湖秋月园、莼鲈之思度假酒店板块。以水为媒、以桥为辅的特征，促进了南湖湾休闲体验空间的形成。这里坐拥周庄古八景之一“南湖秋月”，景色秀丽，四季咸宜，尤其以秋月更为醉人。当金风送爽、明月高悬时，湖面上一片碧绿，一带金黄，有“长烟一空，皓月千里，浮光跃金，静影沉璧”的意境。<br>
                    　　南湖湾项目建设一是要打造周庄文化品鉴空间，二是再现周庄古八景之一“南湖秋月”，打造周庄赏景、赏月休闲旅游地。三是打造休闲度假体验空间。四是打造周庄休闲观光游览区，拓展古镇空间。<br>
                </span>
            <p style="text-align:center;">
                <div style="line-height:1.5;"><img alt="" src="/static/index/static/images/general/ancientTown19.jpg"><br>
                </div>
            </p>
            <span style="line-height:1.5;">
                    <div style="text-align:center;">
                        <img style="line-height:1.5;" alt="" src="/static/index/static/images/general/ancientTown20.jpg">
                    </div>
                    <br>
                    <strong style="color:rgb(32, 29, 29)">蚬江湾滨湖休闲地带</strong><br>
                    　　蚬江湾位于古镇区南北市河北端，为进入古镇区一条重要的南北轴线。全功路从中穿过，北部为周庄八景之一的“急水扬帆”景点，南部为周庄1086慢生活街区。<br>
                    　　蚬江湾项目建设一是实现人在画中游，人与环境和谐交融，成为景的观一部分。二是实现画在景中现，沿蚬江湾慢步在廊、亭、谢、栈桥之间，每个视点宛如一幅江南水墨画。三是实现景在人中移，突出移步换景的园林特色。
                </span>
            <div style="white-space:normal;text-align:center;margin: 8px;">
                <img style="line-height:1.5;" alt="" src="/static/index/static/images/general/ancientTown21.jpg">
            </div>
            <div style="white-space:normal;text-align:center;">
                <strong style="line-height:1.5;"><img alt="" src="/static/index/static/images/general/ancientTown22.jpg"></strong>
            </div>
        </div>
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

<script src="/static/index/static/js//head.js"></script>
</body>

</html>