<?php
include_once("top.php");
include_once("conn.php");
header ( "Content-type: text/html; charset=utf-8" );
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet"  href="css/style.css">
	</head>
	<body></body>
</html>
<script language="JavaScript">
	function chkinput(form){
		if(form.bookname.value==""){
			alert("请输入书名！");
			form.bookname.focus();
			return(false);
		}
		if(form.author.value==""){
			alert("请输入作者！");
			form.author.focus();
			return(false);
		}
		if(form.book_form.value==""){
			alert("请输入书籍格式！");
			form.book_form.focus();
			return(false);
		}
		if(form.booktype.value==""){
			alert("请选择书籍类别！");
			form.booktype.focus();
			return(false);
		}
		if(form.content.value==""){
			alert("请输入书籍内容！");
			form.content.focus();
			return(false);
		}
		if(form.pic.value==""){
			alert("请输入图片地址！");
			form.pic.focus();
			return(false);
		}
	}
</script>

<table class="table_upload" width="500" height="600" align="center" border="1" align="left" cellpadding="0" cellspacing="0">
	<tr height="100">
		<td><img src="images/bottom.png" width="500" height="150"></td>
	</tr>
	<tr class="td_upload" align="center"height="440">
		<td>
			<div class="div_upload">
			<form name="upload_form" class="upload_form" method="post" action="save_upload.php" onsubmit="return chkinput(this)">
				<div class=div_upload1">书&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：
					<input type="text" name="bookname" id="bookname" style="width:230px;height:25px;color:gray;font-size:11px"value="例如:哈利波特与凤凰社" onfocus="if(this.value=='例如:哈利波特与凤凰社'){this.value=''};this.style.color='black';" onblur="if(this.value==''||this.value=='例如:哈利波特与凤凰社'){this.value='例如:哈利波特与凤凰社';this.style.color='gray';}"></div>
					<div class="div_upload1">作&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;者：
						
						
					<input type="text" name="author" id="author" style="width:230px;height:25px;color:gray;font-size:11px" value="例如：英·JK罗琳" onfocus="if(this.value=='例如：英·JK罗琳'){this.value=''};this.style.color='black';" onblur="if(this.value==''||this.value=='例如：英·JK罗琳'){this.value='例如：英·JK罗琳';this.style.color='gray';}">
			</div>
			
			
			<div class="div_upload1">书籍格式：
					<input type="text" name="book_form" id="book_form" style="width:230px;height:25px;color:gray;font-size:11px" value="例如:epub+mobi+azw3" onfocus="if(this.value=='例如:epub+mobi+azw3'){this.value=''};this.style.color='black';" onblur="if(this.value==''||this.value=='例如:epub+mobi+azw3'){this.value='例如:epub+mobi+azw3';this.style.color='gray';}">
			</div>
			<div class="div_upload1">书籍类别：
				<select class="select" name="booktype" id="booktype" style="width:230px;height:25px;color:gray;font-size:11px">
     				<option value ="经典名著">经典名著</option>
 				 	<option value ="科幻悬疑">科幻悬疑</option>
 				 	<option value="军事科学">军事科学</option>
				</select>
			</div>
			<div class="div_upload1">书籍内容：
					<textarea name="content" id="content" rows=2 cols=34 style="color:gray;font-size:11px" onfocus="if(this.value=='请不要超过30个字！'){this.value=''};this.style.color='black';" onblur="if(this.value==''||this.value=='请不要超过30个字！'){this.value='请不要超过30个字！';this.style.color='gray';}"> 请不要超过30个字！</textarea>
					<input type="hidden" name="user_type" value="0">
			</div>
			<div class="div_upload1">下载网址：
					<input type="text" name="book_web" id="book_web" style="width:230px;height:25px;color:gray;font-size:11px" value="例如:http:..." onfocus="if(this.value=='例如:http:...'){this.value=''};this.style.color='black';" onblur="if(this.value==''||this.value=='例如:http:...'){this.value='例如:http:...';this.style.color='gray';}">
			</div>
			<div class="div_upload1">图片地址：
					<input type="text" name="pic" id="pic" style="width:230px;height:25px;color:gray;font-size:11px" value="例如:http:..." onfocus="if(this.value=='例如:http:...'){this.value=''};this.style.color='black';" onblur="if(this.value==''||this.value=='例如:http:...'){this.value='例如:http:...';this.style.color='gray';}">
					<input type="hidden" name="upload_time" id="upload_time" value="<?php echo date('Y-m-d h:i:s', time()); ?>">
			</div>
			<div class="upload_botton">
					<input type="submit" class="upload_submit" name="upload_submit" id="upload_submit" style="width:50px;height:32px;background:url(images/bottom.png);color:#FFFFFF"value="上传">
					<input type="reset" class="button_upload" name="button_upload"  id="button_upload" style="width:50px;height:32px;background:url(images/bottom.png);color:#FFFFFF"value="取消"
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