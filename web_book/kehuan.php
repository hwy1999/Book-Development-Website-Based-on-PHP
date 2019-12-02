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
<table class="table_one" width="800" height="20" border="0" align="left" cellpadding="0" cellspacing="0" style="text-align:top">
	<tr>
		<td class="td2" height="20" align="left" ><span class="span1">科幻悬疑</span><hr class="hr_one" style="height:1px;border:none;border-top:1px dashed #CCCCCC;" /></td>
	</tr>
	
</table>
<div>
<table class="table_two" width="1100" height="1000"  border="0"  cellpadding="0" cellspacing="0" style="text-align:top">
	<?php
			 $sql=mysqli_query($conn,"select count(*) as total from book_list  where book_type like('%科幻悬疑%')");
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
			   
			   $pagesize=4;
			   if($total%$pagesize==0){
			      $pagecount=intval($total/$pagesize);
			   }else{
			      $pagecount=ceil($total/$pagesize);
			   }
			   $sql=mysqli_query($conn,"select * from book_list  where book_type like('%科幻悬疑%')  limit ".($page-1)*$pagesize.",$pagesize  ");
			
	     ?>
	     <?php while($info=mysqli_fetch_array($sql)){?>
	<tr >
		<td width="200" height="50">
			<img class="img1" src="<?php echo $info["book_pic"]?>" width="150" height="210">
		</td>
		<td width="2"><div style="float:left;width: 1px;height: 130px; background: #CCCCCC ;dashed;"></div> </td>
		<td width="598">
			<div class="div_top"></div>
			<div class="bname">《<?php echo $info["book_name"]?>》</div>
			<div class="anthor"><?php echo $info["author"]?>(作者)</div>
			<div class="form"><?php echo $info["book_form"]?></div>
			</div>
			<div class="upload"><?php echo $info["upload_time"]?></div>
			<div class="type">类别：<?php echo $info["book_type"]?></div>
			<div class="content">内容简介：<?php echo $info["book_content"]?></div>
			<div class="a_content"><a href="" style="color:#696969;font-size: 12px;text-decoration: none;">阅读全文...</a></div>
		</td>
		<td width="5"><div style="float:left;width: 1px;height: 130px; background: #CCCCCC ;dashed;"></div></td>
		<td width="295">
			
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
</div>
<?php
include_once("bottom.php");
?>
