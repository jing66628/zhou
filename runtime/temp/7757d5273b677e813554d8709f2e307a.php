<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:91:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/index\view\order\bookedit.html";i:1574577170;s:81:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\header2.html";i:1575454218;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\footer.html";i:1575614033;}*/ ?>
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

<div class="personal center">
    <div class="top_img"></div>
    <div class="personal_nav center">
        <p class="personal_navheader">
            <a href="<?php echo url('Index/index'); ?>" class="personal_color">首页</a> &nbsp;> &nbsp;
            <a href="<?php echo url('Order/booklist'); ?>" class="personal_color" style="color: #000;">个人中心</a>&nbsp;> &nbsp;
            <a href="#" class="personal_color">修改订单</a>
        </p>
        <div class="personal_login">
            <p>欢迎您&nbsp;<span></span>&nbsp;<a href="javascript:;" style="color: red;"><?php echo \think\Session::get('user_name'); ?></a>&nbsp;
                <a href="<?php echo url('Order/bookList'); ?>" class="personal_color">个人中心</a>&nbsp;
                <a href="<?php echo url('User/logout'); ?>" class="personal_color">退出</a>&nbsp;|
                <a href="<?php echo url('User/login'); ?>" class="personal_color">登录</a>
            </p>
        </div>
    </div>
    <div class="ddcx center">
        <h2>欢迎您~&nbsp;&nbsp;<?php echo \think\Session::get('user_name'); ?></h2>
        <p>订单修改</p>
        <table>
            <tr>
                <td style="width: 50px;">序号</td>
                <td style="width: 155px;">订单编号</td>
                <td style="width: 105px;">游玩日期</td>
                <td style="width: 100px;">预定人姓名</td>
                <td style="width: 120px;">预定人手机</td>
                <td style="width: 180px;">预定人身份证</td>
                <td style="width: 50px;">数量</td>
                <td style="width: 250px;">备注</td>
                <td style="width: 75px;">总价</td>
                <td>操作</td>
            </tr>
            <form action="<?php echo url('Order/bookedit'); ?>" id="edit" method="post">
                <?php foreach($data as $k=>$v): ?>
                <tr>
                    <td><?php echo $k+1; ?><input type="hidden" name="id" value="<?php echo $v['id']; ?>"></td>
                    <td><?php echo $v['order_id']; ?></td>
                    <td><input type="text" value="<?php echo $v['paly_date']; ?>" id="time" name="paly_date"></td>
                    <td><input type="text" value="<?php echo $v['user_name']; ?>" id="name" name="user_name"></td>
                    <td><input type="text" value="<?php echo $v['user_phone']; ?>" id="phone" name="user_phone"></td>
                    <td><input type="text" value="<?php echo $v['user_iacard']; ?>" id="idcard" name="user_iacard"></td>
                    <td><?php echo $v['tickets_num']; ?></td>
                    <td><input type="text" value="<?php echo $v['user_note']; ?>" id="note" name="user_note"></td>
                    <td><?php echo $v['tickets_total']; ?></td>
                    <td>
                        <a href="javascript:bookedit();" title="修改">确定修改</a>

                    </td>
                </tr>
                <?php endforeach; ?>
            </form>
        </table>
    </div>
</div>

<!--------------------------- 版心 -->
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

<script>
    function bookedit() {
        var time = document.getElementById("time").value; //获取输入的日期
        var name = document.getElementById("name").value; //获取输入的订票人姓名
        var phone = document.getElementById("phone").value; //获取输入的订票人手机
        var idcard = document.getElementById("idcard").value; //获取输入的订票人身份证号
        var note = document.getElementById("note").value; //获取输入的备注信息

        var namereg = /^[\u4E00-\u9FA5]{2,4}$/; //姓名正则
        var phonereg = /^[1][0-9]{10}$/; //手机正则
        var idcardreg = /^[1-9]\d{5}(18|19|([23]\d))\d{2}((0[1-9])|(10|11|12))(([0-2][1-9])|10|20|30|31)\d{3}[0-9Xx]$/; //身份证正则

        if (time === null || time === "" || time === undefined) {
            alert("请输入游玩日期!");
            return;
        }

        if (name === null || name === "" || name === undefined) {
            alert("请输入订票人姓名!");
            return;
        } else if (!namereg.test(name)) {
            alert("请输入正确的订票人姓名!");
            return;
        }

        if (phone === null || phone === "" || phone === undefined) {
            alert("请输入订票人手机!");
            return;
        } else if (!phonereg.test(phone)) {
            alert("请输入正确的订票人手机!");
            return;
        }

        if (idcard === null || idcard === "" || idcard === undefined) {
            alert("请输入订票人身份证号!");
            return;
        } else if (!idcardreg.test(idcard)) {
            alert("请输入正确的订票人身份证号!");
            return;
        }

        edit.submit(); //执行提交命令
    };
</script>
</body>

</html>