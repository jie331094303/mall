<?php
	header("Content-type:text/html;charset=utf-8");
	if (null !== ($_POST["submit"] == "登陆")) {
		$account = $_POST["rootName"];
		$password = $_POST["password"];
		@mysql_connect("localhost","root","");
		$link = mysql_select_db("mall");
		mysql_query("set name 'gbk'");
		if (!$link) {
			echo "<script>alert('连接数据库失败');</script>";
		}
		$sql = "select accountid from admin where account = $account and password = $password";
		$result = mysql_query($sql);
		$num = mysql_num_rows($result);
		if ($num) {
			echo "<script>alert('登陆成功');</script>";
		} else {
			echo "<script>alert('账号或者密码错误');</script>";
		}
 	} else {
		echo "<script>alert('提交失败请重新提交');</script>";
	}
?>