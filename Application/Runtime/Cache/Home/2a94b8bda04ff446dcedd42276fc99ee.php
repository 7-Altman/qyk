<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin Template">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <meta name="csrf-param" content="_csrf-backend">
    <title>发货详情列表</title>

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
            <h2 class="header-title">发货详情列表</h2>
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
                    <li class="active">
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
        <div class="content-heading"> 
            <div class="row" style="width: auto;"> 
                <div class="col-sm-12"> 
                    <div class="card-footer search_box">
                        <a class="btn  btn-primary btn-lg btn-flat pull-left" href="<?= U('Home/Index/add')?>"><i class="ion-plus mr-sm" style="font-size: 16px;"></i>新增发货详情</a>
                    </div>
                </div> 
            </div>
        </div>
        <div class="container-fluid">
            <form id="w0" action="<?= U('Home/Index/index')?>" method="get">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-xs-3 column" style="margin-left: -10px;">
                        <div class="form-group field-doctorsearch-mis_code">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <p class="btn group_text" type="button">
                                        <label class="control-label" for="doctorsearch-mis_code">发货人 : </label>
                                    </p>
                                </span>
                                <input type="text" class="form-control" name="consignor" placeholder="请输入发货人姓名" value="<?=$arrWhere['consignor']?>">
                                <div class="col-sm-12">
                                    <div class="help-block">
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-3 column" style="margin-left: -10px;">
                    <div class="form-group field-doctorsearch-mis_code">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <p class="btn group_text" type="button">
                                    <label class="control-label" for="doctorsearch-mis_code">收货人 : </label>
                                </p>
                            </span>
                            <input type="text" class="form-control" name="receiver" placeholder="请输入收货人姓名" value="<?=$arrWhere['receiver']?>">
                            <div class="col-sm-12">
                                <div class="help-block">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 column" style="margin-left: -10px;">
                    <div class="form-group field-doctorsearch-mis_code">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <p class="btn group_text" type="button">
                                    <label class="control-label" for="doctorsearch-mis_code">发货人单位 : </label>
                                </p>
                            </span>
                            <input type="text" class="form-control" name="department" placeholder="请输入发货人单位" value="<?=$arrWhere['department']?>">
                            <div class="col-sm-12">
                                <div class="help-block">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr" id="submitBtn">搜索</button>
                <a class="btn btn-primary mr" id="export" href="<?= U('Home/Index/export',['strWhere'=>$strWhere])?>">导出</a>
            </form>
        </div>
<div class="">
    <div id="w1" class="grid-view">
        <table class="table table-striped bg-white" style="border: 1px solid #ccc;">
            <thead>
                <tr class="table_title">
                    <th style="min-width: 120px;">发货公司</th>
                    <th style="min-width: 120px;">发货时间</th>
                    <th style="min-width: 120px;">托运单号</th>
                    <th style="min-width: 200px;">托运单位及电话</th>
                    <th style="min-width: 80px;">货物名称</th>
                    <th style="min-width: 60px;">数量</th>
                    <th style="min-width: 100px;">目的地</th>
                    <th style="min-width: 100px;">发货人</th>
                    <th style="min-width: 100px;">收货人及电话</th>
                    <th style="min-width: 100px;">收货人单位</th>
                    <th style="min-width: 100px;">费用总计</th>
                    <th style="min-width: 100px;">备注</th>
                    <th class="action-column" style="min-width: 120px;">操作</th>
                </tr>
            </thead>
            <tbody>
            <?php if(empty($arrDispatchingList)):?>
                <tr>
                    <td colspan="13">暂无数据~~</td>
                </tr>
            <?php endif;?>
            <?php foreach($arrDispatchingList as $key => $value):?>
                <tr>
                    <td><?=$arrCompany[$value['company_id']]['company_name']?></td>
                    <td><?= $value['dispatching_time'] ?></td>
                    <td><?= $value['check_number'] ?></td>
                    <td><?= $value['check'] ?></td>
                    <td><?= $value['goods_name'] ?></td>
                    <td><?= $value['goods_number'].$arrUnit[$value['unit_id']]['unit_name'] ?></td>
                    <td><?= $value['destination'] ?></td>
                    <td><?= $value['consignor'] ?></td>
                    <td><?= $value['receiver'] ?></td>
                    <td><?= $value['department'] ?></td>
                    <td><?= $value['freight_total'].'元' ?></td>
                    <td><?= $value['remark'] ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="<?=U('Index/update',array('id'=>$value['id']))?>">编辑</a>
                        <a class="btn btn-primary btn-sm" href="<?=U('Index/delete',array('id'=>$value['id']))?>">删除</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </section>
    <footer>
        <span>北京鑫琪晟物流有限公司 © 2017</span>
    </footer>
    <script type="text/javascript">
        $(function(){
            
        });
    </script>
</main>
</div>  
</body>
</html>