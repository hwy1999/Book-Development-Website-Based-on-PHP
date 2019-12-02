<?php
	if(!session_id())
session_start();
 include_once("conn.php");
 $usernc=$_POST["user"];
 $sql=mysqli_query($conn,"select usernc from user_list where usernc='".$usernc."'");
 $info=mysqli_fetch_array($sql);
 if($info){
   echo "<script>alert('对不起，你的昵称已经被占用！');history.back();</script>";
   exit;
 }
 $ip=$_SERVER["REMOTE_ADDR"];
 if(mysqli_query($conn,"insert into user_list(usernc,user_pwd,email,tel,user_type) values('".$usernc."','".(trim($_POST["pwd"]))."','".$_POST["you"]."','".$_POST["zhuce_tel"]."','".$_POST["user_type"]."')")){

// if($_SESSION["unc"]!=""){
//  session_unset();
// }
   $_SESSION["unc"]=$usernc;   
   echo "<script>alert('注册成功！');window.location.href='log.php';</script>";
   
 }else{
   echo "<script>alert('注册失败！');history.back();</script>";
  }
?>