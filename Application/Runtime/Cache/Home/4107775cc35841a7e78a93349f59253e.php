<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin Template">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <meta name="csrf-param" content="_csrf-backend">
    <title>发货公司列表</title>

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
            <h2 class="header-title">发货公司列表</h2>
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
                    <li class="">
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
        <div class="content-heading bg-white"> 
            <div class="row"> 
                <div class="col-sm-12"> 
                    <div class="card-footer search_box">
                        <a class="btn  btn-primary btn-lg btn-flat pull-left" href="<?= U('Home/Company/add')?>"><i class="ion-plus mr-sm" style="font-size: 16px;"></i>新增发货公司</a>
                    </div>
                </div> 
            </div> 
        </div>
        <div class="container-fluid">
            <form id="w0" action="<?= U('Home/Company/index')?>" method="get">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-xs-3 column" style="margin-left: -10px;">
                        <div class="form-group field-doctorsearch-mis_code">
                <div class="input-group">
                    <span class="input-group-btn">
                        <p class="btn group_text" type="button">
                            <label class="control-label" for="doctorsearch-mis_code">公司名称</label>
                        </p>
                    </span>
                    <input type="text" class="form-control" name="company_name" placeholder="请输入公司名称" value="<?=$company_name?>">
                    <div class="col-sm-12">
                        <div class="help-block">
                            <div class="help-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mr" id="submitBtn">搜索</button>
    </div>
</form>
    <div id="w1" class="grid-view">
        <table class="table table-striped bg-white">
            <thead>
                <tr class="table_title">
                    <th width="10%">序号</th>
                    <th width="30%">公司名称</th>
                    <th width="20%">状态</th>
                    <th width="20%">创建时间</th>
                    <th class="action-column"  width="20%">操作</th>
                </tr>
            </thead>
            <tbody>
            <?php if(empty($arrCompany)):?>
                <tr>
                    <td colspan="5">暂无数据~~</td>
                </tr>
            <?php endif;?>
            <?php foreach($arrCompany as $key => $value):?>
                <tr>
                    <td><?= $key+1 ?></td>
                    <td><?= $value['company_name'] ?></td>
                    <td><?= $value['state'] == 0 ? '正常':'禁用' ?></td>
                    <td><?= date('Y-m-d H:i',$value['created']) ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="<?=U('Company/update',array('id'=>$value['id']))?>">编辑</a>
                        <a class="btn btn-primary btn-sm" href="<?=U('Company/delete',array('id'=>$value['id']))?>">删除</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </section>
    <footer>
        <span>北京鑫琪晟物流有限公司 © 2017</span>
    </footer>
</main>
</div>  
</body>
</html>