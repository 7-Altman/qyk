<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin Template">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <meta name="csrf-param" content="_csrf-backend">
    <title>新增计量单位</title>

    <link href="/Public/fonts/ionicons.eot" rel="stylesheet">
    <link href="/Public/fonts/ionicons.svg" rel="stylesheet">
    <link href="/Public/fonts/ionicons.ttf" rel="stylesheet">
    <link href="/Public/fonts/ionicons.woff" rel="stylesheet">
    <link href="/Public/fonts/summernote.eot" rel="stylesheet">
    <link href="/Public/fonts/summernote.ttf" rel="stylesheet">
    <link href="/Public/fonts/summernote.woff" rel="stylesheet">

    <link href="/Public/css/bootstrap.css" rel="stylesheet">
    <link href="/Public/css/animate.css" rel="stylesheet">
    <link href="/Public/css/ionicons.css" rel="stylesheet">
    <link href="/Public/css/app.css" rel="stylesheet">
    <link href="/Public/css/common.css" rel="stylesheet">
    <link href="/Public/css/admin_style.css" rel="stylesheet">

    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/yii.js"></script>
    <script src="/Public/js/yii.validation.js"></script>
    <script src="/Public/js/yii.activeForm.js"></script>
    <script src="/Public/js/jquery.browser.js"></script>
    <script src="/Public/js/app.js"></script>   
    <style>
        .sidebar-container {
            position: fixed;
        }
        .sidebar-nav ul li a span {
            font-size: 14px;
        }
        .sidebar-nav ul li a .nav-icon em {
            font-size: 20px;
        }
    </style>
</head>
<body class="theme-1">
<div class="layout-container">
    <header class="header-container">
        <nav>
            <ul class="visible-xs visible-sm">
                <li><a id="sidebar-toggler" href="#" class="menu-link menu-link-slide"><span><em></em></span></a>
                </li>
            </ul>
            <ul class="hidden-xs">
                <li><a id="offcanvas-toggler" href="#" class="menu-link menu-link-slide"><span><em></em></span></a>
                </li>
            </ul>
            <h2 class="header-title">新增计量单位</h2>
            <ul class="pull-right">
                <li><a href="/logout.html"><em class="ion-log-out icon-fw"></em>退出</a></li>
            </ul>
        </nav>
    </header>
    <aside class="sidebar-container">
        <div class="sidebar-header">
                <div class="pull-right pt-lg text-muted hidden">
                    <em class="ion-close-round"></em>
                </div>
                <a href="#" class="sidebar-header-logo">
                    <span class="sidebar-header-logo-text">北京鑫琪晟物流有限公司</span>
                </a>
            </div>
        <div class="sidebar-content">
            <div class="sidebar-toolbar text-center">
                <a href="javascript:;"><img src="/Public/img/01.jpg" alt="Profile" class="img-circle thumb64"></a>
                <div class="mt">
                    
                </div>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <!--发货公司管理-->
                    <li class="">
                        <a href="<?= U('Home/Company/index')?>" class="ripple">
                            <span class="pull-right nav-caret">
                                <em class="ion-ios-arrow-right"></em>
                            </span>
                            <span class="pull-right nav-label"></span>
                            <span class="nav-icon">
                             <em class="ion-ios-keypad" style="color: #999;"></em>
                            </span>
                            <span>发货公司管理</span>
                        <span class="md-ripple"></span></a>
                    </li>
                    <!--发货公司管理-->

                    <!--计量单位管理-->
                    <li class="active">
                        <a href="<?= U('Home/Unit/index')?>" class="ripple">
                            <span class="pull-right nav-caret">
                                <em class="ion-ios-arrow-right"></em>
                            </span>
                            <span class="pull-right nav-label"></span>
                            <span class="nav-icon">
                             <em class="ion-ios-medkit" style="color: #999;"></em>
                            </span>
                            <span>计量单位管理</span>
                        <span class="md-ripple"></span></a>
                    </li>
                    <!--计量单位管理-->

                    <!--发货详情管理-->
                    <li class="">
                        <a href="<?= U('Home/Index/index')?>" class="ripple">
                            <span class="pull-right nav-caret">
                                <em class="ion-ios-arrow-right"></em>
                            </span>
                            <span class="pull-right nav-label"></span>
                            <span class="nav-icon">
                             <em class="ion-shuffle" style="color: #999;"></em>
                            </span>
                            <span>发货详情管理</span>
                        <span class="md-ripple"></span></a>
                    </li>
                    <!--发货详情管理-->
                </ul>
            </nav>
        </div>
    </aside>
    <div class="sidebar-layout-obfuscator"></div>
        <main class="main-container">
            <section>
    <div class="container-fluid bg-white">
        <form id="w0" class="form-horizontal" action="<?= U('Home/Unit/add')?>" method="post" enctype="multipart/form-data" style="margin: 100px 0 0 0">
            <div class="form-group field-doctor-password required">
                <label class="col-sm-4 control-label" for="doctor-mis_code">计量单位名称:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="unit_name"  placeholder="请输入计量单位名称">
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="form-group field-doctor-state required">
                <label class="col-sm-4 control-label">状态:</label>
                <div class="col-sm-4">
                    <div id="doctor-state">
                        <label class="radio-inline c-radio">
                            <input type="radio" name="state" value="0" checked="">
                            <span class="ion-checkmark-round"></span>正常
                        </label>
                        <label class="radio-inline c-radio">
                            <input type="radio" name="state" value="1">
                            <span class="ion-checkmark-round"></span>停用
                        </label>
                    </div>
                </div>
            </div>
            <div class="btnbox col-sm-offset-4" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary mr-lg ml-lg" style="margin-left:40px;margin-right: 50px;">保存</button>
                <button type="button" class="btn btn-default ml-lg mr-lg" onclick="javascript:history.go(-1);">返回</button>
            </div>
        </form>
    </div>
    </section>
    <footer>
        <span>北京鑫琪晟物流有限公司 © 2017</span>
    </footer>
</main>
</div>  
</body>
</html>