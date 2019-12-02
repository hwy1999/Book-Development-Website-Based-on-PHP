<?php
include_once("conn.php");

if(mysqli_query($conn,"delete from book_list where book_name='".$_POST["manage_hidden"]."'")){
	echo"<script>alert('删除成功！');history.back();</script>";
//echo $_POST["manage_hidden"];
}else{
	echo"<script>alert('删除失败！');history.back();</script>";
//echo $_POST["manage_hidden"];
}
?>