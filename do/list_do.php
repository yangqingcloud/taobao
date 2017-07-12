<?php
	//查询所有学生列表
	//1建连接
	include 'db_do.php';
	//2准备sql
	$sql = "select chengji.id,chengji.score,stu.sname, cou.cname from tbl_score chengji join tbl_student stu on stu.id = chengji.sid join tbl_course cou on cou.id= chengji.cid where cname = 'html'";
	//3查询
	$result= mysqli_query($link, $sql);
	
	
	$list;//总数组
	while ($row = mysqli_fetch_array($result, MYSQL_BOTH)) {
		$stu['id'] = $row['id'];
		$stu['sname'] = $row['sname'];
		$stu['cname'] = $row['cname'];
		$stu['score'] = $row['score'];
		
		$list[] = $stu;
	}
	echo json_encode($list);
	//5释放
	mysqli_free_result($result);
	mysqli_close($link);
?>