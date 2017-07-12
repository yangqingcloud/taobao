
<?php
	//建连接
	$link = mysqli_connect("localhost", "root", "root", "zzy", 3306);
	 mysqli_query($link, "set names utf8");
	/*if(mysqli_error($link)){
		echo "shibai:".mysqli_errno($link);
	}else{
		echo "ok";
	}*/
?>