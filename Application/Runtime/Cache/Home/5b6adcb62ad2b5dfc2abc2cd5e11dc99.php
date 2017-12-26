<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>物流管理系统</title>
    <link href="/Public/css/bootstrap.css" rel="stylesheet">
    <link href="/Public/css/animate.css" rel="stylesheet">
    <link href="/Public/css/ionicons.css" rel="stylesheet">
    <link href="/Public/css/app.css" rel="stylesheet">
    <link href="/Public/css/common.css" rel="stylesheet">
    <link href="/Public/css/admin_style.css" rel="stylesheet">
    <style type="text/css">
        .mda-form-control > input, .mda-form-control > textarea, .mda-form-control > select {
            background-color: transparent !important;
            border: 0 !important;
        }
        .help-block-error {
            color: #F44336 !important;
            font-weight: 700 !important;
        }
        .has-error .mda-form-control .form-control:focus ~ label,
        .has-error .mda-form-control .form-control.focus ~ label,
        .has-error .mda-form-control .form-control ~ .mda-form-msg {
            color: #F44336 !important;
        }
        .has-error .mda-form-control input ~ .mda-form-control-line {
            background-color: #F44336 !important;
        }
    </style>
</head>
<body>
    <div class="layout-container bg_img">
        <div class="page-container">
            <div class="container-full">
                <div class="container container-xs" style="margin-top: 8%;">
                    <p class="mv-lg block-center img-responsive pt-lg pb-lg" style="font-size: 28px; color: #fff; text-align: center; width: 100%; ">物流管理系统</p>
                    <form id="form" class="card b0 form-validate" action="<?= U('Home/Login/login')?>" method="post">
                        <div class="card-heading">
                            <div class="card-title text-center">欢迎登录管理端</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group field-loginform-username required has-error">
                                <div class="mda-form-group float-label mda-input-group">
                                    <div class="mda-form-control">
                                        <input type="text"  class="form-control" name="username" autofocus="" placeholder="">
                                        <div class="mda-form-control-line"></div>
                                        <label class="label" for="loginform-username">账号</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group field-loginform-password required">
                                <div class="mda-form-group float-label mda-input-group">
                                    <div class="mda-form-control">
                                        <input type="text" id="loginform-password" class="form-control" name="password" onfocus="javascript:this.type=&#39;password&#39;" placeholder="">
                                        <div class="mda-form-control-line"></div>
                                        <label class="label" for="loginform-password">密码</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat" name="login-button">登录</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/yii.js"></script>
    <script src="/Public/js/jquery.browser.js"></script>
    <script src="/Public/js/app.js"></script>
    <script src="/Public/js/yii.validation.js"></script>
    <script src="/Public/js/yii.activeForm.js"></script>
</body>
</html>