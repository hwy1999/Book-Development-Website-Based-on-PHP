<?php
//sesstion_start();
include_once("conn.php");
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>小书屋</title>
		<link rel="stylesheet"  href="css/style.css">
	</head>
	<body topmargin="0" leftmargin="10" bottommargin="0">
		<table width="1100" height="150" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td height="145" background="images/top1.PNG" 
					<div class="reglog">
					<a href="reg.php" class="top_reg" style="color: #FFFFFF;font-size:18px;text-decoration: none;">注册</a>
					<a href="log.php" class="top_log" style="color: #FFFFFF;font-size:18px;text-decoration: none;">登录</a>
					</div>
					<div class="search">
						<form name="search" name="search" method="post" action="search.php" onsubmit="return chkinput(this)">
							<input type="text" name="search_book" id="search_book" style="width:130px;height:23px">
							<input type="submit" class="submit_search" name="submit_search" id="submit_search"style="width:45px;height:24px;background-color: #FFFFFF" value="搜索" >
						</form>
					</div>
					
				</td>
			</tr>
			<tr>
				<td class="td1">
					<div class="column"  >|&nbsp;
					<a href="index.php" class="a1"style="color: #FFFFFF;font-size:18px;text-decoration: none;">首&nbsp;页</a>&nbsp;|&nbsp;
					<a href="<?php
		                 if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		                  echo "jingdian.php";
		                 }else{
		                  echo "javascript:alert('要先登录才能进行此操作！')";
		                  }
		                   ?> "
						
		                  
		     
		             class="a1" style="color: #FFFFFF;font-size:18px;text-decoration: none;">经典名著</a>&nbsp;|&nbsp;
					<a href="<?php
		                 if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		                  echo "kehuan.php";
		                 }else{
		                  echo "javascript:alert('要先登录才能进行此操作！')";
		                  }
		                   ?>" 
						class="a1"style="color: #FFFFFF;font-size:18px;text-decoration: none;">科幻悬疑</a>&nbsp;|&nbsp;
					<a href="<?php
		                 if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		                  echo "junshi.php";
		                 }else{
		                  echo "javascript:alert('要先登录才能进行此操作！')";
		                  }
		                   ?>"
						 class="a1"style="color: #FFFFFF;font-size:18px;text-decoration: none;">军事科学</a>&nbsp;|&nbsp;
					<a href="<?php
		                 if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		                  echo "index.php";
		                 }else{
		                  echo "javascript:alert('要先登录才能进行此操作！')";
		                  }
		                   ?> " 
						class="a1"style="color: #FFFFFF;font-size:18px;text-decoration: none;">多看专区</a>&nbsp;|&nbsp;
					<a href="<?php
		                 if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		                  echo "index.php";
		                 }else{
		                  echo "javascript:alert('要先登录才能进行此操作！')";
		                  }
		                   ?> "
						 class="a1"style="color: #FFFFFF;font-size:18px;text-decoration: none;">杂志期刊</a>&nbsp;|&nbsp;
					<a href="<?php
		                 if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		                  echo "index.php";
		                 }else{
		                  echo "javascript:alert('要先登录才能进行此操作！')";
		                  }
		                   ?> " 
						class="a1"style="color: #FFFFFF;font-size:18px;text-decoration: none;">漫画</a>&nbsp;|&nbsp;
					
					<a href="<?php
		                 if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		                 	//isset先判断是否有该变量，再判断是否为“管理员”权限
		                 	if(isset($_SESSION["usertype"]) && $_SESSION["usertype"]=="2"){
                            echo "upload.php";
                      
		                    }else{
		                  	echo "javascript:alert('你无权限进行此操作！')";
		                    }
		                   }else{
		                   echo "javascript:alert('要先登录才能进行此操作！')";
		                   }
		                   ?> " 
						class="a1"style="color: #FFFFFF;font-size:18px;text-decoration: none;">上传书籍</a>&nbsp;|&nbsp;
					<a href="<?php
		                 if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		                 	if(isset($_SESSION["usertype"]) &&$_SESSION["usertype"]=="2"){
                            echo "manage.php";
                             
		                    }else{
		                  	echo "javascript:alert('你无权限进行此操作！')";
		                    }
		                   }else{
		                   echo "javascript:alert('要先登录才能进行此操作！')";
		                   }
		                   ?> "
						class="a1" style="color: #FFFFFF;font-size:18px;text-decoration: none;">管理书籍</a>&nbsp;|&nbsp;
					<span class="span_denglu" style="color:#FFFFFF ;">
					<?php
		             if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		                 echo "欢迎您登录：".$_SESSION["unc"];
		               }
		             ?>
		             </span>
		             <a href="logout.php" class="logout"style="color: #FFFFFF;font-size:12px;text-decoration: none;">退出登录</a>&nbsp;|&nbsp;
					</div> 
				</td>
			</tr>
			
		</table>
	</body>
	<script language="JavaScript">
		function chkinput(form){
			if(form.search_book.value==""){
				alert("请输入搜索内容！");
				form.search_book.focus();
				return(false);
			}
			return(true);
		}
	</script>
</html>