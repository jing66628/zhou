<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:95:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/index\view\navigation\tickets.html";i:1575339571;s:81:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\header2.html";i:1575454218;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\footer.html";i:1575614033;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--适应手机窗口大小-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, use-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>周庄旅游官方网站</title>
    <link rel="shortcut icon" href="/static/index/static/images/favicon.png">


    <link rel="stylesheet" href="/static/index/static/lib/bootstrap.css">
    <link rel="stylesheet" href="/static/index/static/css/tail.css">
    <link rel="stylesheet" href="/static/index/static/css/initial.css">
    <link rel="stylesheet" href="/static/index/static/css/tickets.css">
    <link rel="stylesheet" href="/static/index/static/css/booking.css">
    <link rel="stylesheet" href="/static/index/static/css/login.css">
    <link rel="stylesheet" href="/static/index/static/css/registered.css">
    <link rel="stylesheet" href="/static/index/static/css/personal.css">
    <link rel="stylesheet" href="/static/index/static/css/bookedit.css">


</head>

<body>
    <!------------------------ 顶部  -->
    <header>
        <div class="hd-c center">
            <div class="hd-logo">
                <a href="<?php echo url('Index/index'); ?>"></a>
            </div>
            <ul class="hd-nav">
                <li class="a_hover">
                    <a href="<?php echo url('Index/index'); ?>">首页<span>Home</span></a>
                </li>
                <li class="a_hover">
                    <a href="<?php echo url('General/general'); ?>">概况<span>Introduction</span></a>

                </li class="a_hover">
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/live'); ?>">住宿<span>Lodging</span></a>

                </li>
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/food'); ?>">美食<span>Delicious</span></a>

                </li>
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/scenery'); ?>">景点<span>Scenic spot</span></a>

                </li>
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/entertainment'); ?>">娱乐<span>Recreation</span></a>

                </li>
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/ceremony'); ?>">周庄有礼<span>Specialty</span></a>

                </li>

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
    </header>


<!--------------------------- 版心 -->
<div class="main">
    <div class="top_img"></div>
    <div class="tickets_nav center">
        <p class="tickets_navheader">
            <a href="<?php echo url('Index/index'); ?>" class="tickets_color">首页</a> &nbsp;> &nbsp;
            <a href="#" class="tickets_color" style="color: #000;">票务政策</a></p>
        <div class="tickets_login">
            <p>欢迎您&nbsp;<span></span>&nbsp;<a href="javascript:;" style="color: red;"><?php echo \think\Session::get('user_name'); ?></a>&nbsp;
                <a href="<?php echo url('Order/bookList'); ?>" class="tickets_color">个人中心</a>&nbsp;
                <a href="<?php echo url('User/logout'); ?>" class="tickets_color">退出</a>&nbsp;|
                <a href="<?php echo url('User/login'); ?>" class="tickets_color">登录</a>
            </p>
        </div>
    </div>
    <div class="tickets_img center">
        <p class="tickets_pwcz">票务政策</p>
        <p class="tickets_ty">门票</p>
        <ul class="tickets_jiage">
            <?php foreach($data as $k=>$v): ?>
            <li>
                <img src="<?php echo $v['product_url']; ?>" width="350px">
                <p><?php echo $v['product_name']; ?>
                    <a href="<?php echo url('Order/booking',['id'=>$v['id']]); ?>" class="pone"><span>￥&nbsp;<?php echo $v['product_price']; ?></span></a>
                </p>
            </li>
            <!-- <li>
                <img src="/static/index/static/images/booking/tickets_03.jpg" width="350px">
                <p>周庄古镇门票<span class="pw">敬请期待</span></p>
            </li>
            <li>
                <img src="/static/index/static/images/booking/tickets_04.jpg" width="350px">
                <p>周庄古镇门票<span class="pw">敬请期待</span></p>
            </li> -->
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="tickets_text center">
        <div class="text_top">
            <p class="tickets_ty">票务信息</p>
            <p class="tickets_color">门票一经售出，概不退换，景区门票当日一次使用有效，消码/打孔注销；门票实行一票分检制，进入景区各小景点请主动出示门票</p>
        </div>
        <div class="text_left">
            <p>免票</p>
            <p>以下游客凭本人有效证件即可进入</p>
            <p>1、 国家旅游局颁发的国导证（IC卡）、领队证；</p>
            <p>2、 国务院、中央军委颁发的老干部离休证；</p>
            <p>3、 残疾证（中国残疾人联合会制发）、残疾军人证（中华人民民政部制发）、伤残人民警察证、 伤残公务员证、伤残国家机关工作人员证、因战因公伤残人员证、 伤残民兵民工证；</p>
            <p>注：以上证件为中华人民共和国民政部制有效</p>
            <p>4、 随旅行社团队驾驶员A/A1证，一台车1位；</p>
            <p>5、 1.2米以下儿童或6周岁以下儿童凭有效证件；</p>
            <p>凭本人以下有效证件至西栅游客服务中心咨询处或东栅游客服务中心导游部办理相关手续进入：</p>
            <p>中央新闻总署颁发的最新版本新闻记者证；</p>
            <p>国家旅游局所颁发的旅行社经理资格证（附本人名片）；</p>
        </div>
        <div class="text_right">
            <div>
                <p>优待半价票</p>
                <p>请于购票前出示本人以下有效证件</p>
                <p>1、老年人优待证或60周岁以上身份证；</p>
                <p>2、现役军人证、士官退休证、三属（烈士遗属、因公牺牲军人遗属和病故军人遗属）优待证。</p>
            </div>
            <div>
                <p>儿童半价票</p>
                <p>6周岁（含6周岁）以下或者身高1.4米（含1.4米）以下的儿童。</p>
            </div>
            <div>
                <p style="line-height: 83px;">学生半价票</p>
                <p>全日制在校大学本科及以下学历学生凭学生证。</p>
            </div>
        </div>
        <div class="tickets_ljyd">
            <a href="<?php echo url('Order/booking'); ?>">
                <p>立即预定<span></span></p>
            </a>
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


</body>

</html>