<?php
include_once("top.php");
header ( "Content-type: text/html; charset=utf-8" );
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet"  href="css/style.css">
	</head>
	<body></body>
</html>
<table class="table_manage" width="1100" height="500" border="1" align="center" cellpadding="1" cellspacing="1">
	<tr>
		<td width="100" height="4" align="center">
			<span class="span_manage">书名</span>
		</td>
		<td width="70" height="5" align="center">
			<span class="span_manage">作者</span>
		</td>
		<td width="60" height="5" align="center">
			<span class="span_manage">类别</span>
		</td>
		<td width="120" height="5" align="center">
			<span class="span_manage">内容</span>
		</td>
		<td width="80" height="5" align="center">
			<span class="span_manage">格式</span>
		</td>
		<td width="80" height="5" align="center">
			<span class="span_manage">上传时间</span>
		</td>
		<td width="60" height="5" align="center">
			<span class="span_manage">操作</span>
		</td>
	</tr>
	<?php
			 $sql=mysqli_query($conn,"select count(*) as total from book_list ");
			 $info=mysqli_fetch_array($sql);
			 $total=$info['total'];
			 if($total==0){
			  echo "<div align=center>对不起！暂无书籍！</div>";
			 }else{
			   if(!isset($_GET["page"]) || !is_numeric($_GET["page"])){
			      $page=1; 
			   }else{
			      $page=intval($_GET["page"]);
			   }
			   
			   $pagesize=15;
			   if($total%$pagesize==0){
			      $pagecount=intval($total/$pagesize);
			   }else{
			      $pagecount=ceil($total/$pagesize);
			   }
			   $sql=mysqli_query($conn,"select * from book_list order by upload_time desc limit ".($page-1)*$pagesize.",$pagesize  ");
			
	     ?>
	     <?php while($info=mysqli_fetch_array($sql)){?>
	<tr>
		<td>《<?php echo $info["book_name"]?>》</td>
		<td><?php echo $info["author"]?></td>
		<td><?php echo $info["book_type"]?></td>
		<td><?php echo $info["book_content"]?></td>
		<td><?php echo $info["book_form"]?></td>
		<td><?php echo $info["upload_time"]?></td>
		<td>
			
			<!--<a href="javascript:if(window.confirm('确定删除此书籍吗？')==true){
				window.location.href='delete.php';
			}">删除</a>-->
			<!--<a href="delete.php">删除</a>-->
		<form class="manage_form" name="manage_form" method="post" action="delete.php">
			<input type="submit" name="manage_button" id="manage_button" value="删除">
			<input type="hidden" name="manage_hidden" value="<?php echo $info["book_name"]?>">
		</form>
		
		
		</td>
	</tr>
	<?php }  ?>
</table>
<?php
  }
?>
<table width="800" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td width="400" >
			<div class="left">共有书籍&nbsp;<?php echo $total;?>&nbsp;本&nbsp;&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;本&nbsp;&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount;?>&nbsp;页</div>
		</td>
		<td width="400">
			<div class="right">
				<a href="<?php echo $_SERVER['PHP_SELF']?>?page=1" class="a1" >首页</a>&nbsp;
				<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
			if($page>1) 
		  
		   echo $page-1;
		  else
		   echo 1;  
		   ?>" class="a1" >上一页</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
		 if($page<$pagecount) 
		  
		   echo $page+1;
		  else
		   echo $pagecount;  
		   ?>" class="a1" >下一页</a>&nbsp;<a href="<?php echo $_SERVER['PHP_SELF'];?>?page=<?php echo $pagecount;?>" class="a1">尾页</a></div>	
		</td>
	</tr>
	
</table>
	































<?php
	include_once("bottom.php");
?>