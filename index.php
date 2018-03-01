<?php
require_once 'debug.php';
require_once 'Connect2.1/API/qqConnectAPI.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>QQ PHP 登录</title>
</head>
<body>
	<!-- 如果cookie中没有qq_accesstoken或者没有qq_openid，都重新登录一次 -->
	<?php if(!isset($_COOKIE['qq_accesstoken']) || !isset($_COOKIE['qq_openid'])){ ?>
		<a href="qqlogin.php"><img src="images/bt_white_76X24.png"></a>
		<!--<a href="#" onclick='toLogin()'><img src="images/bt_white_76X24.png"></a>
		 <script>
		 	function toLogin()
		 	{
		   		//以下为按钮点击事件的逻辑。注意这里要重新打开窗口
		   		//否则后面跳转到QQ登录，授权页面时会直接缩小当前浏览器的窗口，而不是打开新窗口
		   		var A=window.open("qqlogin.php","TencentLogin","width=450,height=320,menubar=0,scrollbars=1,resizable=1,status=1,titlebar=0,toolbar=0,location=1");
		   		console.log(A);
		 	} 
		</script> -->
	<?php }else{ ?>
		<a href="qqlogout.php">退出QQ</a>
	<?php 
		$qc = new QC($_COOKIE['qq_accesstoken'],$_COOKIE['qq_openid']);
		$userinfo = $qc->get_user_info();
		debug($userinfo);
	} ?>
</body>
</html>