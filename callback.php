<?php
require_once 'debug.php';
require_once 'Connect2.1/API/qqConnectAPI.php';

// echo $_GET['code'];

//使用code请求accessToken

$oauth = new Oauth();
$accesstoken = $oauth->qq_callback();
$openid = $oauth->get_openid();
setcookie('qq_accesstoken',$accesstoken,time()+86400);
setcookie('qq_openid',$openid,time()+86400);
// debug($accesstoken);

header('Location:index.php');