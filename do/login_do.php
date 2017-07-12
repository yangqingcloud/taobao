<?php
	//1 获取用户名密码
	$uname = $_REQUEST['uname'];
	$pwd = $_REQUEST['pwd'];
	
	//1建连接
	include 'db_do.php';
	//2sql
	$sql = "select * from tbl_users where uname = '$uname' and pwd ='$pwd'";
	//3查
	$result = mysqli_query($link, $sql);
	
	var_dump($result);
	if($row = mysqli_fetch_array($result, MYSQL_BOTH)){
		echo "ok";
	}else{
		echo "shibai";
	}
	//5释放
	mysqli_free_result($result);
	mysqli_close($link);
?>