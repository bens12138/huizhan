<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="renderer" content="webkit">
	<title> - 主页</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!--[if lt IE 9]>
	<meta http-equiv="refresh" content="0;ie.html" />
	<![endif]-->
	<link rel="shortcut icon" href="favicon.ico"> <link href="/huizhan/Public/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
	<link href="/huizhan/Public/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
	<link href="/huizhan/Public/admin/css/animate.css" rel="stylesheet">
	<link href="/huizhan/Public/admin/css/style.css?v=4.1.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
	<div id="wrapper">
		<!--左侧导航开始-->
		<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="nav-close"><i class="fa fa-times-circle"></i>
			</div>
			<div class="sidebar-collapse">
				<ul class="nav" id="side-menu">
					<li class="nav-header">
						<div class="dropdown profile-element">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<span class="clear">
									<span class="block m-t-xs" style="font-size:20px;">
										<i class="fa fa-area-chart"></i>
										<strong class="font-bold">会展中心</strong>
									</span>
								</span>
							</a>
						</div>
						<div class="logo-element">会展中心</div>
					</li>
					<li>
						<a class="J_menuItem" href="/huizhan/index.php/Admin/Info/index">
							<i class="fa fa-info-circle"></i>
							<span class="nav-label">站点管理</span>
						</a>
					</li>
					<li>
						<a class="J_menuItem" href="/huizhan/index.php/Admin/User/index">
							<i class="fa fa-user"></i>
							<span class="nav-label">管理员列表</span>
						</a>
					</li>
					<li>
						<a class="J_menuItem" href="/huizhan/index.php/Admin/Nav/index">
							<i class="fa fa-bars"></i>
							<span class="nav-label">导航列表</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-home"></i>
							<span class="nav-label">首页模块管理</span>
							<span class="fa arrow"></span>
						</a>
						<ul class="nav nav-second-level">
							<li>
								<a class="J_menuItem" href="/huizhan/index.php/Admin/Banner/index">轮播图</a>
							</li>
							<li>
								<a class="J_menuItem" href="/huizhan/index.php/Admin/Zhiyin/index">参展指引</a>
							</li>
							<li>
								<a class="J_menuItem" href="/huizhan/index.php/Admin/Guanggao/index">广告服务</a>
							</li>
							<li>
								<a class="J_menuItem" href="/huizhan/index.php/Admin/Zhinan/index">主办方指南</a>
							</li>
							<li>
								<a class="J_menuItem" href="/huizhan/index.php/Admin/Zhoubian/index">周边服务</a>
							</li>
							<li>
								<a class="J_menuItem" href="/huizhan/index.php/Admin/Zhanshi/index">展会展示</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<!--左侧导航结束-->
		<!--右侧部分开始-->
		<div id="page-wrapper" class="gray-bg dashbard-1">
			<div class="row J_mainContent" id="content-main">
				<iframe id="J_iframe" width="100%" height="100%" src="/huizhan/index.php/Admin/Info/index" frameborder="0" seamless></iframe>
			</div>
		</div>
		<!--右侧部分结束-->
	</div>

	<!-- 全局js -->
	<script src="/huizhan/Public/admin/js/jquery.min.js?v=2.1.4"></script>
	<script src="/huizhan/Public/admin/js/bootstrap.min.js?v=3.3.6"></script>
	<script src="/huizhan/Public/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="/huizhan/Public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/huizhan/Public/admin/js/plugins/layer/layer.min.js"></script>

	<!-- 自定义js -->
	<script src="/huizhan/Public/admin/js/hAdmin.js?v=4.1.0"></script>
	<script type="text/javascript" src="/huizhan/Public/admin/js/index.js"></script>

	<!-- 第三方插件 -->
	<script src="/huizhan/Public/admin/js/plugins/pace/pace.min.js"></script>

</body>

</html>