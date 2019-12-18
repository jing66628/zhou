<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:90:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/index\view\order\booking.html";i:1576647010;s:81:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\header2.html";i:1575454218;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\footer.html";i:1575614033;}*/ ?>
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
<div class="main">
    <div class="booking_nav">
        <div class="booking_navheader center">
            <p>
                <a href="<?php echo url('Index/index'); ?>" class="booking_color">首页</a> &nbsp;> &nbsp;
                <a href="<?php echo url('Navigation/tickets'); ?>" class="booking_color">票务政策</a> &nbsp;> &nbsp;
                <a href="" class="booking_color" style="color: #000;">确认订单</a>
            </p>
            <div class="booking_login">
                <p>欢迎您&nbsp;<span></span>&nbsp;<a href="javascript:;" style="color: red;"><?php echo \think\Session::get('user_name'); ?></a>&nbsp;
                    <a href="<?php echo url('Order/bookList'); ?>" class="tickets_color">个人中心</a>&nbsp;
                    <a href="<?php echo url('User/logout'); ?>" class="booking_color">退出</a>&nbsp;|
                    <a href="<?php echo url('User/login'); ?>" class="tickets_color">登录</a>
                </p>
            </div>
        </div>
    </div>
    <div class="booking_xx center">
        <table></table>
        <div class="booking_dplc center">
            <div class="booking_qrdd ">
                <p class="qrdd_p">确认订单信息</p>
            </div>

        </div>
        <div class="booking_dd center" id="price">
            <form id="AddProductPicture" action="<?php echo url('booking'); ?>" method="post">
                <?php foreach($data as $k=>$v): ?>
                <div class="booking_ticket ticket_center">
                    <table></table>
                    <div class="ticket_img">
                        <img src="<?php echo $v['product_url']; ?>" width="130px">
                        <p class="ticketpone"><input type="hidden" name="product_name" value="<?php echo $v['product_name']; ?>"><?php echo $v['product_name']; ?></p>
                        <p class="ticketptwo">游玩日期&nbsp;&nbsp;<input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',minDate:new Date()})" id="time" name="paly_date" autocomplete="off">
                        </p>
                        <span></span>
                    </div>
                    <div class="ticket_number">
                        <p>数量</p>
                        <ul class="number_ipt">
                            <li @click="Reduction">
                                <span></span>
                            </li>
                            <li><input type="text" :value="number" readonly="readonly" id="number" name="tickets_num" v-cloak></li>
                            <li @click="add">
                                <span></span>
                            </li>
                        </ul>
                    </div>
                    <div class="ticket_amount">
                        <p>单价:&nbsp;&nbsp;<span>￥</span>&nbsp;<span v-cloak><input type="hidden"id="unitprice" name="tickets_unit" :value="<?php echo $v['product_price']; ?>"><?php echo $v['product_price']; ?></span></p>
                    </div>
                </div>
                <div class="ticket_information ticket_center">
                    <p>预订人信息</p>
                    <p>预订人姓名<input type="text" id="name" name="user_name" autocomplete="off">&nbsp;<span>*</span></p>
                    <p>预订人手机<input type="text" id="phone" name="user_phone" autocomplete="off">&nbsp;<span>*</span></p>
                    <p>身份证号码<input type="text" id="idcard" name="user_iacard" autocomplete="off">&nbsp;<span>*</span></p>
                    <p>备注</p>
                    <textarea id="note" name="user_note" placeholder="选填 将您的其他需求备注在此，我们会尽力为您提供最优质的服务，但请勿输入特殊字符哦"></textarea>
                </div>
                <div class="ticket_prompt ticket_center">
                    <p>温馨提示：</p>
                    <p>1、门票当日一次有效，不能重复使用；</p>
                    <p>2、如您有相关优惠证件请现场凭证购买（具体请查看门票预订须知）；</p>
                    <p>3、游玩当天凭预订成功短信中的二维码或二代身份证至周庄景区游客服务中心检票口扫码检票入园；</p>
                    <p>4、若您为周庄旅游股份有限公司旗下酒店入住客人，建议在入住当天至景区指定前台购买景区联票（入住期间二日内一次有效）；</p>
                    <p>5、退改规则：如需退票，请于游玩当天22:00前通过官网提交申请, 逾期不接受退票。</p>
                </div>
                <div class="ticket_settlement ticket_center">
                    <div class="copewith">
                        <p>应付总额：<span>￥</span>&nbsp;<span v-cloak><input type="hidden" id="totalprice" name="tickets_total" :value="<?php echo $v['product_price']; ?>*number">{{<?php echo $v['product_price']; ?>*number}}</span></p>
                    </div>
                </div>
                <div class="ticket_tjbnt ticket_center">
                    <div>
                        <a href="javascript:validation();">提交订单</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </form>
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


<script src="/static/index/static/js/vue.js"></script>
<script src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script src="/static/index/static/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script>
    new Vue({
        el: "#price",
        data: {
            number: 1,
        },
        methods: {
            Reduction: function() { //数量减号的处理事件
                if (this.number > 1) {
                    this.number--;
                }
            },
            add: function() { //数量加号的处理事件
                this.number++;
            },
        }
    });

    $(function() {

        $("#AddProductPicture").validate({
            rules: {
                user_name: {
                    required: true,
                    isName: true,
                },
                user_phone: {
                    required: true,
                    isPhone: true,
                },
                user_iacard: {
                    required: true,
                    isIdCardNo: true,
                },
            },
            onkeyup: false,
            focusCleanup: true,
        });
    });

    function validation() {
        var time = document.getElementById("time").value; //获取输入的日期
        var number = document.getElementById("number").value; //获取输入的数量
        var unitprice = document.getElementById("unitprice").value; //获取单价
        var name = document.getElementById("name").value; //获取输入的订票人姓名
        var phone = document.getElementById("phone").value; //获取输入的订票人手机
        var idcard = document.getElementById("idcard").value; //获取输入的订票人身份证号
        var note = document.getElementById("note").value; //获取输入的备注信息
        var totalprice = document.getElementById("totalprice").value; //获取订单应付总额

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

        AddProductPicture.submit(); //执行提交命令
    };
</script>
</body>

</html>