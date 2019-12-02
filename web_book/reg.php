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
			 
			   function chkinput(form){
			    
				 if(form.user.value==""){
				   alert("请输入用户昵称！");   
				   form.user.focus();
				   return(false);
				 }
				 
				 if(form.pwd.value==""){
				   alert("请输入注册密码！");   
				   form.pwd.focus();
				   return(false);
				 }
				 
				 if(form.you.value==""){
	               alert("请输入E-mail地址!");
	               form.you.focus();
	               return(false);
	             }
				
	             var i=form.you.value.indexOf("@");
	             var j=form.you.value.indexOf(".");
	             if((i<0)||(i-j>0)||(j<0)){
                   alert("请输入正确的E-mail地址!");
	               form.you.select();
	               return(false);
	             }
				 
				 if(form.zhuce_tel.value==""){
				   alert("请输入手机号！");
				   form.zhuce_tel.focus();
				   return(false);
				 } 
				 
				 if(isNaN(form.zhuce_tel.value)){
				   alert("联系电话只能为数字！");
				   form.zhuce_tel.focus();
				   return(false);
				 }
								
			    return(true); 
			   }
			  
			  </script>


<table class="log" width="500" height="600" align="center" border="1" align="left" cellpadding="0" cellspacing="0">
	<tr height="100">
		<td><img src="images/bottom.png" width="500" height="150"></td>
	</tr>
	<tr class="zhuce" align="center"height="440">
		<td>
			<div class="zhuce">
			<form name="zhuce_form" class="zhuce_form" method="post" action="savereg.php" onsubmit="return chkinput(this)">
				<div class="zhuce_zhanghao">账&nbsp;&nbsp;&nbsp;&nbsp;号：
					<input type="text" name="user" id="user" style="width:230px;height:23px;" ></div>
					<div class="zhuce_mima">密&nbsp;&nbsp;&nbsp;&nbsp;码：
					<input type="password" name="pwd" id="pwd" style="width:230px;height:23px;" >
			</div>
			<div class="zhuce_div2">手机号：
					<input type="text" name="zhuce_tel" id="zhuce_tel" style="width:230px;height:23px;" >
			</div>
			<div class="zhuce_div2">邮&nbsp;&nbsp;&nbsp;&nbsp;箱：
					<input type="text" name="you" id="you" style="width:230px;height:23px;" >
					<input type="hidden" name="user_type" value="0">
			</div>
			<div class="zhuce_botton">
					<input type="submit" class="zhuce_submit" name="zhuce_submit" id="zhuce_submit" style="width:50px;height:32px;background:url(images/bottom.png)"value="注册">
					<input type="reset" class="button_log" name="button_log"  id="button_log" style="width:50px;height:32px;background:url(images/bottom.png)"value="取消" >
>
			</div>
				</form>
	       </div>
			
		</td>
	</tr>
	<tr height="60">
		<td>
			<img src="images/bottom.png" width="500" height="120">
		</td>
	</tr>
</table>







<?php
include_once("bottom.php");
?>