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

 <div class="div_b">
 <table class="table_two" width="1100" height="250"   border="0"  cellpadding="0" cellspacing="0">  
	<?php
			 $sql=mysqli_query($conn,"select * from book_list where book_name like'%".$_POST["search_book"]."%'");
			 $info=mysqli_fetch_array($sql);
			 if($info==false){
			 	echo "<script>alert('没搜索到您想要的内容!');window.location.href='index.php';</script>";
			 }else{
//			 	while($info=mysqli_fetch_array($sql)){
	    ?>
	    
	<tr width="800" height="50"  >
		<td width="200" height="50" >
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
<?php
}

?>	
</table>
</div>
<?php
include_once("bottom.php");
?>

