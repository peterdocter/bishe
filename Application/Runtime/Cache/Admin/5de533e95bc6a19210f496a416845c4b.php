<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>后台</title>
		<link rel="stylesheet" type="text/css" href="/Public/admin/css/public.css" />
		<script type="text/javascript" src="/Public/admin//js/jquery.min.js"></script>
		<script type="text/javascript" src="/Public/admin//js/public.js"></script>
	</head>

	<body>
		<!-- 头部 -->
		<div class="head">
			<div class="headL">
				<p class="p1">
					后台管理系统
				</p>
			</div>
			<div class="headR">
				<p class="p1">
					欢迎，admin
				</p>
				<p class="p2">
					<a href="<?php echo U('Index/logout');?>"  class="goOut"  >关闭</a>
				</p>
			</div>
	</body>

</html>