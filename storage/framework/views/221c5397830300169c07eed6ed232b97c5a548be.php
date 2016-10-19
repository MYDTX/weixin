<head>
    <meta charset="utf-8">
    <title>微信管理</title>
    <base href="<?php echo e(URL::asset('/')); ?>">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/layer/skin/layer.css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="css/layer/layer.js"></script>
    <style type="text/css">
        body{
            opacity:0.9;
        }
    </style>
</head>
<body  style="margin: 0px 200px;background-image: url('1.jpg');background-size:100% 100%;background-repeat:no-repeat; background-attachment: fixed;">
<nav class="navbar " role="navigation"  style="background-color: white">
    <div class="navbar-header ">
        <a class="navbar-brand" href="index.php?r=index/main"><font face="Matura MT Script Capitals" color="black">WeiXinGuanLi</font></a>
    </div>
    <div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?r=index/main">首页</a></li>
        </ul>
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    公众号管理 <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="weiXin">添加公众号</a></li>
                    <li class="divider"></li>
                    <li><a href="weiXin/create">管理公众号</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    自定义回复 <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?r=hui/huifu">回复规则添加</a></li>
                    <li class="divider"></li>
                    <li><a href="index.php?r=hui/show">回复规则管理</a></li>
                </ul>
            </li>
        </ul>

        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    自定义菜单 <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="menu">定义菜单结构</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-right: 5px">
            <li class="dropdown ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <font face="Algerian" color="black">welcome <?php echo e(session('u_name')); ?> login</font>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="admin/create">退出</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<div class="well">
