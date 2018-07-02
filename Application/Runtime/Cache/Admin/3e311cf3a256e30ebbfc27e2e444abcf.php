<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 基本表单</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/huizhan/Public/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/huizhan/Public/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/huizhan/Public/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/huizhan/Public/admin/css/animate.css" rel="stylesheet">
    <link href="/huizhan/Public/admin/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>添加导航</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="/huizhan/index.php/Admin/Nav/add_nav" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">父级导航</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="pid">
                                        <option value="">--请选择导航所属位置--</option>
                                        <option value="0">顶级导航</option>
                                        <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$no): $mod = ($i % 2 );++$i;?><option value="<?php echo ($no["id"]); ?>"><?php echo ($no["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">导航名称</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">添加</button>
                                    <button class="btn btn-white" type="submit">重置</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 全局js -->
    <script src="/huizhan/Public/admin//huizhan/Public/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/huizhan/Public/admin//huizhan/Public/admin/js/bootstrap.min.js?v=3.3.6"></script>

    <!-- 自定义js -->
    <script src="/huizhan/Public/admin//huizhan/Public/admin/js/content.js?v=1.0.0"></script>

    <!-- iCheck -->
    <script src="/huizhan/Public/admin//huizhan/Public/admin/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    
    

</body>

</html>