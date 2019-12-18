<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/index\view\zixun\hotpot.html";i:1575255991;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--适应手机窗口大小-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=0.5, maximum-scale=2.0, use-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>周庄旅游官方网站</title>
    <link rel="shortcut icon" href="/static/index/static/images/favicon.png">
</head>

<body>
    <?php foreach($data as $k=>$v): ?>
    <div style="width: 700px;height:100%;margin:0 auto;">
        <h2 style="font-size: 28px;line-height: 60px; font-weight: 400;"><?php echo $v['title']; ?></h2>
        <p style="text-align: right;"><span style="margin-right: 20px;">更新日期：<?php echo date("Y-m-d",$v['update_time']); ?></span><span>作者：<?php echo $v['author']; ?></span></p>
        <?php echo $v['content']; ?>
    </div>
    <?php endforeach; ?>
</body>

</html>