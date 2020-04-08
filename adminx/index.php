<?php
$ADMINKEY='9CCMS18';
if(isset($_GET['Php'])){	
	$Php = $_GET['Php'];
}else{	
	$Php = NULL;
}
if($Php ==NULL){ 
//登录路由入口
include('../Php/Admin/Login.php'); 
}
if(strpos($Php,'Home') !== false){ 
//后台路由入口
include("../Php/Public/Home.php");
include('../Php/Admin/'.$C_T_0.'.php'); 
}
if(strpos($Php,'Cancellation') !== false){ 
//注销路由入口
include("../Php/Public/Cancellation.php");
include('../Php/Admin/'.$C_T_0.'.php'); 
}
if(strpos($Php,'Plug') !== false){ 
//插件路由入口
include("../Php/Public/Plug.php");  
}

?>