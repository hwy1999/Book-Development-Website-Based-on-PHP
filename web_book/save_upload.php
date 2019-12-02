<?php
session_start();					//初始化SESSTION变量
include_once("conn.php");			
//$sql=mysqli_query($conn,"select usernc from user_list where usernc='".$_SESSION["unc"]."'");
//$info=mysqli_fetch_array($sql);			
//$userid=$info['id'];						
//$createtime=date("Y-m-d H:i:s");		

if(mysqli_query($conn,"insert into book_list(book_name,author,book_form,upload_time,book_content,book_type,book_pic,download)
values('".$_POST['bookname']."','".$_POST['author']."','".$_POST['book_form']."','".$_POST['upload_time']."',
'".$_POST['content']."','".$_POST['booktype']."','".$_POST['pic']."','".$_POST['book_web']."')")){
	echo "<script>alert('上传成功！');window.location.href='index.php';</script>";
}else{
  	echo "<script>alert('上传失败！');history.back();</script>";
}
?>