<?php
	header("Content-type:text/html;charset=utf-8");
	// var_dump($_POST);die();
	// $_SESSION["username"] = null;
	if ( null !== ($_POST["submit"] == "登陆") ) {
		$account = $_POST["name"];
		$password = $_POST["password"];
		if ($account == "" || $password == "") {
			echo "<script>alert('请输入账号或密码');</script>";
		} else {
			@mysql_connect("localhost","root","");
			$link = mysql_select_db("mall");
			mysql_query("set names 'utf8'");
			if (!$link) {
				echo "<script>alert('连接数据库错误');</script>";
			}
			$sql = "select account,password from user where account = $account and password = $password";
			$result = mysql_query($sql); //找到
			$num = mysql_num_rows($result);	//找到一条记录
			if ($num) {
				// $row = mysql_fetch_array($num);
				// echo "$row['account']";
				echo "<script>alert('登陆成功');</script>";
			} else {
				echo "<script>alert('用户或者密码错误');</script>";
			}
		} 
	}else {
		echo "<script>alert('提交未成功');</script>";
	}	
?>