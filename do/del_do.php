<?php
	//非查询
	//1 建连接
	include 'db_do.php';
	$id = $_REQUEST['id'];
	//2 准备sql
	//$sql = "insert into tbl_users values('default',?,?)";
	$sql = "delete from tbl_score where id = ?";
	//3预编译
	$pre = mysqli_prepare($link, $sql);
	//4参数赋值
	//$pre->bind_param("ss",$uname,$pwd);
	$pre->bind_param("i",$id);
	//5执行
	$result = mysqli_execute($pre);
	var_dump($result);
	//6判断
	if($result){
		header("location:../list.html?msg='删除成功'");
	}else{
		header("location:../list.html?msg='删除失败'");
	}
	//7关
	mysqli_close($link);

	
?>