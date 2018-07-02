<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 修改参展指引</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/huizhan/Public/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/huizhan/Public/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/huizhan/Public/admin/css/animate.css" rel="stylesheet">
    <link href="/huizhan/Public/admin/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>修改参展指引</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="/huizhan/index.php/Admin/Zhoubian/edit_zhou" class="form-horizontal m-t" id="commentForm">
                            <input type="hidden" name="id" value="<?php echo ($cld["id"]); ?>">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">标题：</label>
                                <div class="col-sm-8">
                                    <input id="title" name="title" minlength="2" type="text" class="form-control" required="" aria-required="true" value="<?php echo ($cld["title"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-3">
                                    <button class="btn btn-info" type="submit">提交</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 全局js -->
    <script src="/huizhan/Public/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/huizhan/Public/admin/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- 自定义js -->
    <script src="/huizhan/Public/admin/js/content.js?v=1.0.0"></script>
    <!-- jQuery Validation plugin javascript-->
    <script src="/huizhan/Public/admin/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="/huizhan/Public/admin/js/plugins/validate/messages_zh.min.js"></script>
    <script src="/huizhan/Public/admin/js/demo/form-validate-demo.js"></script>
</body>
</html>