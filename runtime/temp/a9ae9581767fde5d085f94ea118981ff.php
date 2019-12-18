<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:91:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/index\view\order\booklist.html";i:1575454322;s:81:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\header2.html";i:1575454218;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\footer.html";i:1575614033;}*/ ?>
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
<div class="headerbgd"></div>
<div class="personal center">
    <div class="top_img"></div>
    <div class="personal_nav center">
        <p class="personal_navheader">
            <a href="<?php echo url('Index/index'); ?>" class="personal_color">首页</a> &nbsp;> &nbsp;
            <a href="#" class="personal_color" style="color: #000;">个人中心</a></p>
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
        <p>个人订单查看</p>
        <table>
            <tr>
                <td style="width: 40px;">序号</td>
                <td style="width: 155px;">门票种类</td>
                <td style="width: 140px;">订单编号</td>
                <td style="width: 90px;">游玩日期</td>
                <td style="width: 80px;">预定人姓名</td>
                <td style="width: 100px;">预定人手机</td>
                <td style="width: 160px;">预定人身份证</td>
                <td style="width: 40px;">数量</td>
                <td style="width: 188px;">备注</td>
                <td style="width: 80px;">下单时间</td>
                <td style="width: 50px;">总价</td>
                <td>操作</td>
            </tr>
            <?php foreach($data as $k=>$v): ?>
            <tr>
                <td><?php echo $k+1; ?></td>
                <td><?php echo $v['product_name']; ?></td>
                <td><?php echo $v['order_id']; ?></td>
                <td><?php echo $v['paly_date']; ?></td>
                <td><?php echo $v['user_name']; ?></td>
                <td><?php echo $v['user_phone']; ?></td>
                <td><?php echo $v['user_iacard']; ?></td>
                <td><?php echo $v['tickets_num']; ?></td>
                <td><?php echo $v['user_note']; ?></td>
                <td><?php echo $v['create_time']; ?></td>
                <td><?php echo $v['tickets_total']; ?>元</td>
                <td>
                    <a href="<?php echo url('bookedit',['id'=>$v['id']]); ?>" title="修改订单"><img src="/static/index/static/images/edit.png" alt="修改订单"></a>&nbsp;&nbsp;
                    <a href="javascript:;" title="删除订单" onclick="order_del(this,<?php echo $v['id']; ?>)"><img src="/static/index/static/images/delete.png" alt="删除订单"></a>
                </td>
            </tr>
            <?php endforeach; ?>
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

<script src="/static/index/static/js/jquery-1.8.3.min.js"></script>
<script src="/static/index/static/lib/layer-v3.1.1/layer/layer.js"></script>
<script type="text/javascript">
    //订单删除
    function order_del(obj, id) {

        //layer插件，弹出一个确认框
        layer.confirm('确定要取消订单吗？', function(index) {

            //用ajax进行数据删除
            $.ajax({
                type: 'post', //提交方式
                url: "<?php echo url('bookdel'); ?>", //提交地址
                data: {
                    'id': id
                }, //提交数据id
                //以json格式写的数据
                dataType: 'json', //告诉后端传输什么格式的数据

                //后端给我返回的数据
                success: function(res) {
                    //判断返回的数据，若等于1，则删除成功
                    if (res.status == 1) {

                        //obj是a标签，把a标签上的所有父元素tr标签删掉（即当前行）
                        $(obj).parents("tr").remove();
                        //借用layer插件，紧紧是弹一个提示框
                        layer.msg(res.msg, {
                            icon: 6,
                            time: 1000
                        });
                    } else {
                        //借用layer插件，紧紧是弹一个提示框
                        layer.msg(res.msg, {
                            icon: 5,
                            time: 1000
                        });
                    }
                }
            })
        });
    }
</script>
</body>

</html>