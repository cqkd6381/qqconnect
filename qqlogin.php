<?php
require_once 'debug.php';
require_once 'Connect2.1/API/qqConnectAPI.php';

//访问QQ登录页面
$oauth = new Oauth();
$oauth->qq_login();