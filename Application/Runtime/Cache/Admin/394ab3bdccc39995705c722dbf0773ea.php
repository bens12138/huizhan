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
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>站点信息</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="/huizhan/index.php/Admin/Info/edit_info" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">名称</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" value="<?php echo ($info["title"]); ?>" class="form-control" placeholder="请输入您的名称">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">联系方式</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tel" value="<?php echo ($info["tel"]); ?>" class="form-control" placeholder="请输入您的联系方式">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">邮箱</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" value="<?php echo ($info["email"]); ?>" placeholder="请输入您的E-mail" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">地址</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" value="<?php echo ($info["address"]); ?>" class="form-control" placeholder="请输入您的地址">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">关于我们</label>
                                <div class="col-sm-10">
                                    <script type="text/javascript" charset="utf-8" src="/huizhan/Public/ueditor/ueditor.config.js"></script>
                                    <script type="text/javascript" charset="utf-8" src="/huizhan/Public/ueditor/ueditor.all.min.js"></script>
                                    <script type="text/javascript" charset="utf-8" src="/huizhan/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
                                    <textarea id="editor" name="cont" type="text/plain" style="height:400px;"><?php echo ($info["cont"]); ?></textarea>
                                    <script type="text/javascript">
                                      var ue = UE.getEditor('editor');
                                  </script>
                              </div>
                          </div>
                          <div class="hr-line-dashed"></div>
                          <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">保存内容</button>
                                <button class="btn btn-white" type="submit">取消</button>
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

<!-- iCheck -->
<script src="/huizhan/Public/admin/js/plugins/iCheck/icheck.min.js"></script>
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