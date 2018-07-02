<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - 管理员列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico"> <link href="/huizhan/Public/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/huizhan/Public/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <!-- Data Tables -->
    <link href="/huizhan/Public/admin/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/huizhan/Public/admin/css/animate.css" rel="stylesheet">
    <link href="/huizhan/Public/admin/css/style.css?v=4.1.0" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>管理员列表</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="">
                            <a href="/huizhan/index.php/Admin/User/addUser" class="btn btn-info">添加</a>
                        </div>

                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>姓名</th>
                                    <th>添加时间</th>
                                    <th>修改时间</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($admin)): $i = 0; $__LIST__ = $admin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="gradeX">
                                    <td class="tdd"><?php echo ($vo["id"]); ?></td>
                                    <td><?php echo ($vo["name"]); ?></td>
                                    <td><?php echo (date("Y-m-d H:i:s",$vo["add_time"])); ?></td>
                                    <td><?php echo (date("Y-m-d H:i:s",$vo["edit_time"])); ?></td>
                                    <td width="4%">
                                        <?php if($vo["status"] == 1): ?><button onclick="editStatus(<?php echo ($vo["id"]); ?>)" class="btn btn-success status">已激活</button><?php endif; ?>
                                        <?php if($vo["status"] == 0): ?><button onclick="editStatus(<?php echo ($vo["id"]); ?>)" class="btn btn-danger status">已停用</button><?php endif; ?> <!-- -->
                                    </td>
                                    <td width="8%">
                                        <a href="/huizhan/index.php/Admin/User/editUser/id/<?php echo ($vo["id"]); ?>" class="btn btn-sm btn-outline btn-warning">修改</a>
                                        <span class="btn btn-sm btn-outline btn-danger" id="del" onclick="del(<?php echo ($vo["id"]); ?>)">删除</span>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 全局js -->
    <script src="/huizhan/Public/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/huizhan/Public/admin/js/bootstrap.min.js?v=3.3.6"></script>



    <script src="/huizhan/Public/admin/js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="/huizhan/Public/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/huizhan/Public/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- 自定义js -->
    <script src="/huizhan/Public/admin/js/content.js?v=1.0.0"></script>


    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function () {
            $('.dataTables-example').dataTable();
            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable('../example_ajax.php', {
                "callback": function (sValue, y) {
                    var aPos = oTable.fnGetPosition(this);
                    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                },
                "submitdata": function (value, settings) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition(this)[2]
                    };
                },
                "width": "90%",
                "height": "100%"
            });
        });
        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData([
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row"]);
        }
        function del(id){ 
            parent.layer.confirm('您确定要删除它吗？', {
                btn: ['是的','算了'], //按钮
                shade: false //不显示遮罩
            }, function(){
                $.ajax({
                    type:'post',
                    url:'/huizhan/index.php/Admin/User/del_user',
                    data:'user_id='+id,
                    success:function(data){
                        if(data == 1){
                            parent.layer.msg('成功删除', {icon: 1});
                            location.href="";
                        }
                        if(data == 2){
                            parent.layer.msg('删除失败', {icon: 6});
                        }
                    }
                });
            }, function(){
                parent.layer.msg('吓死宝宝了!!', {shift: 6});
            });
        }
        function editStatus(id){
            //alert($("id").text())
            $.ajax({
                type:'post',
                url:'/huizhan/index.php/Admin/User/edit_status',
                data:'user_id='+id,
                success:function(data){
                    window.location.reload();
                    // if (data==1) {

                    // } else {

                    // }
                }
            });
        }

    </script>
</body>
</html>