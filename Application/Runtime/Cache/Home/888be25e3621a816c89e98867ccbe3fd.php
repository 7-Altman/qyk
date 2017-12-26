<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin Template">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <meta name="csrf-param" content="_csrf-backend">
    <title>编辑发货详情</title>

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
    <link rel="stylesheet" type="text/css" href="/Public/css/jquery.datetimepicker.css"/>

    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/yii.js"></script>
    <script src="/Public/js/yii.validation.js"></script>
    <script src="/Public/js/yii.activeForm.js"></script>
    <script src="/Public/js/jquery.browser.js"></script>
    <script src="/Public/js/app.js"></script>
    <script src="/Public/js/jquery.datetimepicker.full.js"></script>
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
        .custom-date-style {
            background-color: red !important;
        }
        .input-wide{
            width: 500px;
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
            <h2 class="header-title">编辑发货详情</h2>
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
                        <a href="<?= U('Home/Unit/index')?>" class="ripple">
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
        <form id="w0" class="form-horizontal" action="<?= U('Home/Index/update')?>" method="post" enctype="multipart/form-data" style="margin: 100px 0 0 0">
            <input type="hidden" name="index_id" value="<?=$arrDispatchingList['id']?>">
            <div class="form-group field-doctor-role_id required">
                <label class="col-sm-4 control-label">发货公司:</label>
                <div class="col-sm-4">
                    <select class="form-control" name="company_id">
                        <?php foreach($arrCompany as $value):?>
                        <option value="<?=$value['id']?>" <?= $arrDispatchingList['company_id'] == $value['id'] ? 'selected' : ''?>><?=$value['company_name']?></option>
                        <?php endforeach;?>
                    </select>
                    <div class="help-block"></div>
                </div>
            </div>

            <div class="form-group field-doctor-password required">
                <label class="col-sm-4 control-label" for="doctor-mis_code">发货时间:</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" value="<?=$arrDispatchingList['dispatching_time']?>" id="datetimepicker" placeholder="请选择发货时间" name="dispatching_time" />
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="form-group field-doctor-password required">
                <label class="col-sm-4 control-label" for="doctor-mis_code">托运单号:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="check_number"  placeholder="请输入托运单号" value="<?=$arrDispatchingList['check_number']?>">
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="form-group field-doctor-password required">
                <label class="col-sm-4 control-label" for="doctor-mis_code">托运单位及电话:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="check"  placeholder="请输入托运单位及电话" value="<?=$arrDispatchingList['check']?>">
                    <div class="help-block"></div>
                </div>
            </div>

            <div class="form-group field-doctor-password required">
                <label class="col-sm-4 control-label" for="doctor-mis_code">货物名称:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="goods_name"  placeholder="请输入货物名称" value="<?=$arrDispatchingList['goods_name']?>">
                    <div class="help-block"></div>
                </div>
            </div>

            <div class="form-group field-doctor-password required">
                <label class="col-sm-4 control-label" for="doctor-mis_code">数量:</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="goods_number"  placeholder="请输入数量" value="<?=$arrDispatchingList['goods_number']?>">
                    <div class="help-block"></div>
                </div>
                <div class="col-sm-2">
                    <select class="form-control" name="unit_id">
                        <?php foreach($arrUnit as $value):?>
                        <option value="<?=$value['id']?>" <?= $value['id'] == $arrDispatchingList['unit_id']?'selected':''?>><?=$value['unit_name']?></option>
                        <?php endforeach;?>
                    </select>
                    <div class="help-block"></div>
                </div>
            </div>

            <div class="form-group field-doctor-password required">
                <label class="col-sm-4 control-label" for="doctor-mis_code">目的地:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="destination"  placeholder="请输入目的地" value="<?=$arrDispatchingList['destination']?>">
                    <div class="help-block"></div>
                </div>
            </div>

            <div class="form-group field-doctor-password required">
                <label class="col-sm-4 control-label" for="doctor-mis_code">发货人:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="consignor"  placeholder="请输入发货人姓名" value="<?=$arrDispatchingList['consignor']?>">
                    <div class="help-block"></div>
                </div>
            </div>

            <div class="form-group field-doctor-password required">
                <label class="col-sm-4 control-label" for="doctor-mis_code">收货人及电话:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="receiver"  placeholder="请输入收货人及电话" value="<?=$arrDispatchingList['receiver']?>">
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="form-group field-doctor-password required">
                <label class="col-sm-4 control-label" for="doctor-mis_code">收货人单位:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="department"  placeholder="请输入收货人单位" value="<?=$arrDispatchingList['department']?>">
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="form-group field-doctor-password required">
                <label class="col-sm-4 control-label" for="doctor-mis_code">费用总计(元):</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="freight_total"  placeholder="请输入费用总计" value="<?=$arrDispatchingList['freight_total']?>">
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="form-group field-doctor-password required">
                <label class="col-sm-4 control-label" for="doctor-mis_code">其它备注:</label>
                <div class="col-sm-4">
                    <textarea class="form-control" name="remark"  placeholder="请输入备注内容" value="<?=$arrDispatchingList['remark']?>"><?=$arrDispatchingList['remark']?>
                    </textarea>
                    <div class="help-block"></div>
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
    <script type="text/javascript">
        $(function(){
            $.datetimepicker.setLocale('ch');
            $('#datetimepicker').datetimepicker({
                lang : 'ch',
                timepicker : false,
                format:'Y-m-d',
                formatDate:'Y-m-d',
            });
        });
    </script>
</main>
</div>  
</body>
</html>