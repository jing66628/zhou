<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:96:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/index\view\general\wholedomain.html";i:1574263044;s:81:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\header1.html";i:1576136533;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\footer.html";i:1575614033;}*/ ?>
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
<div class="nav_Globalbgimg"></div>
<!--------------------------- nav_bgimg部分结束 -->
<!--------------------------- head_nav部分 -->
<div class="head_nav">
    <div class="head_navbox">
        <div class="nav_nleft">
            <span></span>
            <a href="<?php echo url('Index/index'); ?>">首页</a> >
            <a href="<?php echo url('General/general'); ?>">概况</a> >
            <a href="">全域旅游</a>
        </div>
    </div>
</div>
<!--------------------------- head_nav部分结束 -->
<!--------------------------- Global_main部分结束 -->
<div class="main_Global">
    <div class="Global_box">
        <h1 class="Global_h1">
            全域旅游
            <span>Whole domain Tourism</span>
        </h1>
        <div class="Global_mainbox">
            <p>天堂苏杭之间，是周庄，它被世人称为“中国第一水乡”。俯瞰全镇，宛如头向南湖，身在太史淀、天花荡、白蚬湖，尾摇澄湖，正在遨游江南的一尾鱼。盈盈湖荡，悠悠河港，流淌成梦里的“鱼米之乡”。</p>
            <p>周庄全域旅游版图已然点亮，“旅游+N”模式带动更多企业参与，呈献更多精彩体验。美丽的江南乡村静谧安详，悠然的田园农庄亲近自然，品质的度假酒店惬意流连，精致的民宿客栈枕水而眠，丰盛的水乡特产心意满满，诱人的周庄滋味打动舌尖，缤纷的体验活动精彩绚烂。</p>
            <p>全域旅游在周庄，处处是风景，时时好心情，满足对生活的向往。</p>
            <div>
                <p style="text-align:center;">
                    <img alt="" src="/static/index/static/images/general/Global24.jpg">
                </p>
                <p style="text-align:center;">
                    <img alt="" src="/static/index/static/images/general/Global25.jpg">
                </p>
            </div>
            <div>
                <p>从古镇到水乡，拓展北部空间，打造大虹桥的第六空间，实现周庄全域旅游新格局。</p>
                <p style="text-align:center;">
                    <strong style="color: rgb(32, 29, 29)">全域旅游版图</strong>
                </p>
                <h3>龙头，水乡生活小镇</h3>
                <p>头依古镇，以周庄水乡生活小镇为龙头，开展古镇精致化建设，优化要素产品，引领全域旅游发展。</p>
                <h3>龙身，水乡江南湖区</h3>
                <p>身绕湿地，以环太史淀湿地新城片区为龙身，引进强IP、自带大流量的优质项目，打造高品质度假产品体系。</p>
                <h3>龙尾，水乡田园乡村</h3>
                <p style="text-align:left;">尾摇湖荡，以同周路沿线、泛天花荡区域为龙尾，"一村一品"，提升颜值、振兴产业、落实富民，发展休闲乡村旅游。</p>
                <div>
                    <img alt="" src="/static/index/static/images/general/Global26.jpg" width="1200px" />
                </div>
                </br>
                <p style="text-align:center;">
                    <strong style="color: rgb(32, 29, 29)">全域旅游看点</strong>
                </p>
                <h3>夜色----周庄</h3>
                <p style="text-align: left;">以光影科技、艺术设计点亮周庄的湖湾、水巷、小桥、老街、古宅、名刹，用南北市河及沿河街道将文创灯光串联成珠，形成八大特色内容产品：夜渔、夜戏、夜画、夜囍、夜宴、夜禅、夜月、夜泊。</p>
                <p style="text-align: center;">
                    <img alt="" src="/static/index/static/images/general/Global27.jpg">
                </p>
                <h3>周庄----夜·渔</h3>
                <p style="text-align: left;">以水幕光影呈现渔家生活景象。蚬江湾水美鱼肥，自古就是周庄人的渔猎场。在蚬江湾畔设置每晚两场光影秀，以“蚬江渔唱”为主题，渔猎、渔获、渔歌、渔火等场景做到水雾缭绕，如梦如幻，把周庄历史悠久的渔文化扎根其中。</p>
                <p style="text-align: center;">
                    <img alt="" src="/static/index/static/images/general/Global28.jpg">
                </p>
                <p style="text-align: center;">
                    <img alt="" src="/static/index/static/images/general/Global29.jpg" width="900px" />
                </p>
                <h3>周庄----夜·戏</h3>
                <p style="text-align: left;">周庄人爱听戏，沈万三和他的亲家顾阿瑛都是著名的昆曲票友，把传统的周庄曲艺社交中心——周庄古戏台，升级为清风明月•周庄梨园，游客可以在此品着阿婆茶香，欣赏“百戏之祖”昆曲，唱词典雅华丽的《浣纱记》和曲调幽雅婉转的《牡丹亭》片段备，是这里最叫座的节目。此外，运营成熟的《四季周庄》也加入到夜戏的序列里，每年4月－11月与观众们相约在实景构筑的江南人家·水上舞台。</p>
                <p style="text-align: center;">
                    <img alt="" src="/static/index/static/images/general/Global30.jpg" width="1080px">
                </p>
                <h3>周庄----夜·画</h3>
                <p style="text-align: left;">周庄是陈逸飞、杨明义等当代艺术大师们流连忘返、装之入画的地方，游客们于夜色中，与大师的双桥经典画面一起入画，进入一副以双桥为中心、古宅水色相伴、流光溢彩灯隐烘托的长卷里。</p>
                <p style="text-align: center;">
                    <img alt="" src="/static/index/static/images/general/Global31.jpg" width="1080px">
                </p>
                <h3>周庄----夜·囍</h3>
                <p style="text-align: left;">周庄的水乡婚俗，也是游客们非常感兴趣的一个点。用灯光“爆改张厅”，让这座白天看上去充满了书卷气的古建筑，在夜晚充满了欢乐喜气，成为水乡花嫁体验空间，迎新娘、跨火盆、掀盖头、抱新娘等十二个成体系的婚俗环节，游客们不但可以看到，更可以亲身参与体验到。</p>
                <p style="text-align: center;">
                    <img alt="" src="/static/index/static/images/general/Global32.jpg" width="600px" />
                </p>
                <h3>周庄----夜·宴</h3>
                <p style="text-align: left;">沈厅酒家有最正宗的周庄味，万三蹄、三味圆、蚬江水鲜……带来的是“周庄八大碗”万三家宴；全功楼时尚餐厅是古镇里的港式时尚，用港式时尚茶餐厅文化、迎合时尚、年轻的饮食节拍、填补周庄新餐饮文化空缺；纸箱王创意餐厅是纸上的台式美味，它用特种纸张盛放的各种美味摆放在纸桌上，一个由“纸”构成的创意用餐环境，诠释与周庄有深厚渊源的台湾味道。</p>
                <p style="text-align: center;">
                    <img alt="" src="/static/index/static/images/general/Global33.jpg" width="1080px">
                </p>
                <p style="text-align: center;">
                    <img alt="" src="/static/index/static/images/general/Global34.jpg" width="1080px">
                </p>
                <h3>周庄----夜·禅</h3>
                <p style="text-align: left;">在全福讲寺东边，一湾水，一座牌楼，一座古寺，佛光、晚钟，用悠远的禅意慰藉游客的疲惫身心。 夜·月，南湖湾是中秋最佳赏月圣地之一，南湖秋月灯光秀成为一道靓丽典雅、充满人文气息与生活气息的风景线。还有“莼鲈之思”的佳话流传至今，而南湖正是主人公张翰的故乡。这是一处呼唤着“团圆”和“回归精神故乡”的文化地标。
                </p>
                <p style="text-align: center;">
                    <img alt="" src="/static/index/static/images/general/Global35.jpg" width="1080px">
                </p>
                <h3>周庄----夜·泊</h3>
                <p style="text-align: left;">夜色深沉的时候，静谧的西湾，停泊着周庄水乡游船、渔船。小船在此相拥，在此驻留，渔民百姓的生活小景在水巷里剪影式地呈现，渔船上星星点点的灯火，呈现出一种朦胧美，给予游人一首水乡版的《枫桥夜泊》之吟，给这幅水乡夜色绘景增添悦目赏心的风姿。</p>
                <p style="text-align: center;">
                    <img alt="" src="/static/index/static/images/general/Global36.jpg" width="1080px">
                </p>
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

<script src="/static/index/static/js/head.js"></script>
</body>

</html>