<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/admin\view\admin\lst.html";i:1576128169;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\admin\view\layout\header.html";i:1575552661;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\admin\view\layout\footer.html";i:1574939202;}*/ ?>
﻿<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/static/admin/favicon.png">
    <link rel="Shortcut Icon" href="/static/admin/favicon.png" />
    <!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
    <link href="/static/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />



    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/bootstrap.css.map" />
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/bootstrap.min.css.map" />
    <!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->


    <title>周庄旅游管理后台系统</title>

</head>

<body>
    <!--header 作为公共模版分离出去-->
    <header class="navbar-wrapper">
        <div class="navbar navbar-fixed-top">
            <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="<?php echo url('Admin/lst'); ?>">周庄旅游官方管理后台</a>
                <span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.0</span>
                <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                    <ul class="cl">
                        <li>欢迎您~</li>
                        <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo \think\Session::get('admin_name'); ?><i class="Hui-iconfont">&#xe6d5;</i></a>
                            <ul class="dropDown-menu menu radius box-shadow">
                                <li><a href="<?php echo url('Login/logout'); ?>">退出</a></li>
                            </ul>
                        </li>
                        <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                            <ul class="dropDown-menu menu radius box-shadow">
                                <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                                <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                                <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                                <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                                <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                                <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <?php $menu_data=model('Auth')->menu(); ?>
    <!--_menu 作为公共模版-->
    <aside class="Hui-aside">

        <div class="menu_dropdown bk_2">
            <?php foreach($menu_data as $k => $v): ?>
            <dl id="menu-article">
                <dt><i class="Hui-iconfont">&#xe616;</i> <?php echo $v['auth_name']; ?><i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <?php foreach($v['child'] as $k1 => $v1):  $path = $v1['auth_c'].'/'.$v1['auth_f'];  ?>
                        <li><a href="<?php echo url($path); ?>" title="<?php echo $v1['auth_name']; ?>"><?php echo $v1['auth_name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </dd>
            </dl>
            <?php endforeach; ?>
            <!-- <dl id="menu-product">
                <dt><i class="Hui-iconfont">&#xe620;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a href="<?php echo url('Product/lst'); ?>" title="门票管理">门票管理</a></li>
                        <li><a href="<?php echo url('Order/lst'); ?>" title="订单列表">订单列表</a></li>
                    </ul>
                </dd>
            </dl>

            <dl id="menu-member">
                <dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a href="<?php echo url('User/lst'); ?>" title="会员列表">会员列表</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-admin">
                <dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a href="<?php echo url('Role/lst'); ?>" title="角色管理">角色管理</a></li>
                        <li><a href="<?php echo url('Auth/lst'); ?>" title="权限管理">权限管理</a></li>
                        <li><a href="<?php echo url('Admin/lst'); ?>" title="管理员列表">管理员列表</a></li>
                    </ul>
                </dd>
            </dl> -->
        </div>
    </aside>
    <div class="dislpayArrow hidden-xs">
        <a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a>
    </div>

<section class="Hui-article-box">
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span> 管理员管理
        <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a> </nav>
    <div class="Hui-article">
        <article class="cl pd-20">
            <form action="<?php echo url('Admin/lst'); ?>" method="get">
                <div class="text-c"> 登录日期范围：
                    <input type="text" onfocus="selecttime(1)" name="start_time" value="<?php echo \think\Request::instance()->get('start_time'); ?>" id="datemin" class="input-text Wdate" style="width:120px;" autocomplete="off"> -
                    <input type="text" onfocus="selecttime(2)" name="end_time" value="<?php echo \think\Request::instance()->get('end_time'); ?>" id="datemax" class="input-text Wdate" style="width:120px;" autocomplete="off">
                    <input type="text" class="input-text" style="width:250px" value="<?php echo \think\Request::instance()->get('admin_name'); ?>" placeholder="输入管理员名称" id="" name="admin_name">
                    <button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
                </div>
            </form>
            <div class="cl pd-5 bg-1 bk-gray mt-20">
                <span class="l">  <a href="<?php echo url('Admin/add'); ?>"  class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a> </span>
            </div>
            <table class="table table-border table-bordered table-bg">
                <thead>
                    <tr>
                        <th scope="col" colspan="9">员工列表</th>
                    </tr>
                    <tr class="text-c">
                        <th width="100">ID</th>
                        <th width="250">登录名</th>
                        <th width="220">登录时间</th>
                        <th width="180">登录IP</th>
                        <th>角色</th>
                        <th width="170">创建时间</th>
                        <th width="150">状态</th>
                        <th width="100">操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $k=>$v): ?>
                    <tr class="text-c">
                        <td><?php echo $v['id']; ?></td>
                        <td><?php echo $v['admin_name']; ?></td>
                        <td><?php echo date('Y-m-d H:i:s',$v['login_time']); ?></td>
                        <td><?php echo $v['login_ip']; ?></td>
                        <td><?php echo $v['role_names']; ?></td>
                        <td><?php echo date('Y-m-d H:i:s',$v['add_time']); ?></td>
                        <td class="td-status"><span class="label <?php if($v['status'] == 1): ?>label-success<?php endif; ?> radius"><?php if($v['status'] == 1): ?>已启用<?php else: ?>已停用<?php endif; ?></span></td>
                        <td class="td-manage">
                            <!--第一步-->
                            <?php if($v['status'] == 1): ?>
                            <a style="text-decoration:none" onClick="admin_stop(this,<?php echo $v['id']; ?>)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> <?php else: ?>
                            <a style="text-decoration:none" onClick="admin_start(this,<?php echo $v['id']; ?>)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe615;</i></a> <?php endif; ?>
                            <a title="编辑" href="<?php echo url('Admin/edit',['id'=>$v['id']]); ?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                            <a title="删除" href="javascript:;" onclick="admin_del(this,<?php echo $v['id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div style="position: absolute;right: 5%">
                <?php echo $data->render(); ?>
            </div>
        </article>
    </div>
</section>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>

<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.page.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
    /*管理员-删除*/
    function admin_del(obj, id) {
        layer.confirm('确认要删除吗？', function(index) {
            //此处请求后台程序，下方是成功后的前台处理……

            $.ajax({
                type: 'post',
                url: "<?php echo url('Admin/del'); ?>",
                data: {
                    'id': id
                },
                dataType: "json",
                success: function(res) {
                    if (res.status == 1) {
                        $(obj).parents("tr").remove();
                        layer.msg(res.msg, {
                            icon: 1,
                            time: 1000
                        });
                    } else {
                        layer.msg(res.msg, {
                            icon: 5,
                            time: 1000
                        });
                    }
                }
            });

        });
    }

    /*管理员-停用*/
    function admin_stop(obj, id) {
        layer.confirm('确认要停用吗？', function(index) {
            //此处请求后台程序，下方是成功后的前台处理……
            // <!--第二步-->    //第三步，取实现后台逻辑
            //ajax实现
            $.ajax({
                type: 'post',
                url: "<?php echo url('Admin/stop'); ?>",
                data: {
                    "id": id
                },
                dataType: "json",
                success: function(res) {
                    if (res.status == 1) {
                        $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,' + id + ')" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
                        $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
                        $(obj).remove();
                        layer.msg(res.msg, {
                            icon: 5,
                            time: 1000
                        });
                    } else {
                        layer.msg(res.msg, {
                            icon: 5,
                            time: 1000
                        });
                    }
                }
            });

        });
    }

    /*管理员-启用*/
    function admin_start(obj, id) {
        layer.confirm('确认要启用吗？', function(index) {
            //此处请求后台程序，下方是成功后的前台处理……

            $.ajax({
                type: 'post',
                url: "<?php echo url('Admin/start'); ?>",
                data: {
                    "id": id
                },
                dataType: "json",
                success: function(res) {
                    if (res.status == 1) {
                        $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,' + id + ')" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
                        $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
                        $(obj).remove();
                        layer.msg(res.msg, {
                            icon: 6,
                            time: 1000
                        });
                    } else {
                        layer.msg(res.msg, {
                            icon: 5,
                            time: 1000
                        });
                    }
                }
            });


        });
    }
    //时间插件
    function selecttime(flag) {
        if (flag == 2) {
            var endTime = $("#countTimeend").val();
            if (endTime != "") {
                WdatePicker({
                    dateFmt: 'yyyy-MM-dd',
                    maxDate: endTime
                })
            } else {
                WdatePicker({
                    dateFmt: 'yyyy-MM-dd',
                })
            }
        } else {
            var startTime = $("#countTimestart").val();
            if (startTime != "") {
                WdatePicker({
                    dateFmt: 'yyyy-MM-dd',
                    minDate: startTime
                })
            } else {
                WdatePicker({
                    dateFmt: 'yyyy-MM-dd',
                })
            }
        }
    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>

</html>