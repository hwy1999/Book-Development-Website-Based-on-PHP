<?php
	if(!session_id())
session_start();	
include_once("conn.php");	
//md5($_POST["pwd"]);
$sql=mysqli_query($conn,"select user_type from user_list where usernc='".$_POST["user"]."' and user_pwd='".trim($_POST["pwd"])."'");
$info=mysqli_fetch_array($sql);

if($info!=false){
	$_SESSION["unc"]=$_POST["user"];
	$_SESSION["usertype"]=$info[0];
//	echo $_SESSION["usertype"];
	echo "<script>alert('登录成功！');window.location.href='index.php';</script>";
}else{
  	echo "<script>alert('登录失败！');history.back();</script>";
}	

	
?>
