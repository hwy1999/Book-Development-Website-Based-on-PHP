<?php
include_once("top.php");
include_once("conn.php");
//header ( "Content-type: text/html; charset=utf-8" );
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet"  href="css/style.css">
	</head>
	<body></body>
</html>
 <script language="javascript">
			   function chkinputlogin(form){
			     if(form.user.value==""){
				   alert("请输入用户昵称！");
				   form.user.focus();
				   return(false);
				 }
				 
				  if(form.pwd.value==""){
				   alert("请输入登录密码！");
				   form.pwd.focus();
				   return(false);
				 }
				 return(true);
			    
			   }
			 </script>
<table class="log" width="500" height="400" align="center" border="0" align="left" cellpadding="0" cellspacing="0">
	<tr height="80">
		<td><img src="images/bottom.png" width="500" height="150"></td>
	</tr>
	<tr class="denglu" align="center"height="200">
		<td>
			<div class="zhanghao">账号：
				<form name="form1" class="form1" method="post" action="login.php" onsubmit="return chkinputlogin(this)">
					<input type="text" name="user" id="user" style="width:230px;height:23px;" >
					<div class="mima">密码：
					<input type="password" name="pwd" id="pwd" style="width:230px;height:23px;" >
			</div>
			<div class="botton1">
					<input type="submit" class="submit" name="submit" id="submit" style="width:50px;height:32px;background:url(images/bottom.png)"value="登录">
					<input type="button" class="button_log" name="button_log"  id="button_log" style="width:50px;height:32px;background:url(images/bottom.png)"value="注册" onclick=javascrtpt:jump()
>
			</div>
				</form>
			</div>
			
		</td>
	</tr>
	<tr>
		<td>
			<img src="images/bottom.png" width="500" height="120">
		</td>
	</tr>
</table>


<script language="javascript">
	
function jump(){
 window.location.href="reg.php";
 }
 
</script>






<?php
include_once("bottom.php");
?>