<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/index\view\user\login.html";i:1574404667;s:81:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\header2.html";i:1575454218;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\footer.html";i:1575614033;}*/ ?>
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
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/static/index/static/images/user/login_banner1.jpg" alt="...">

            </div>
            <div class="item">
                <img src="/static/index/static/images/user/login_banner2.jpg" alt="...">
            </div>
        </div>
    </div>
    <div class="login_form">
        <form action="<?php echo url('login'); ?>" method="post" id="loginform">
            <table></table>
            <p>登录</p>
            <p>请您输入您的用户名和密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo url('User/registered'); ?>">未注册？</a></p>
            <p><span></span><input type="text" name="user_name" id="name"></p>
            <p><span></span><input type="password" name="user_password" id="password"></p>
            <p><span class="ioocyzm"></span><input type="text" name="ca_code" id="yanzhengma"><img id="changeCa" src="<?php echo url('getCaptcha'); ?>" alt="换一张" style="margin-left: 10px;" /></p>
            <p><a href="">忘记密码？</a> </p>
            <div>
                <a href="javascript:login();">安全登录</a>
            </div>
        </form>
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

<script src="/static/index/static/js/jquery.js"></script>
<script src="/static/index/static/lib/bootstrap.js"></script>
<script>
    function login() {
        var name = document.getElementById("name").value;
        var password = document.getElementById("password").value;
        var yanzhengma = document.getElementById("yanzhengma").value;
        if (name === null || name === "" || name === undefined) {
            alert("请输入用户名！");
            return;
        }

        if (password === null || password === "" || password === undefined) {
            alert("请输入密码！");
            return;
        }

        if (yanzhengma === null || yanzhengma === "" || yanzhengma === undefined) {
            alert("请输入验证码！");
            return
        }

        loginform.submit();
    }

    //点击刷新验证码
    var changeCa = document.getElementById("changeCa");
    changeCa.onclick = function() {
        this.src = this.src + '?' + Math.random();
    }
</script>

</body>

</html>