<?php
	header("Content-type:text/html;charset=utf-8");
	// var_dump($_POST);die();
	if ( null !== ($_POST["submit"] == "注册") ) {
		$account = $_POST["register_account"];
		$password = $_POST["register_password"];
		$confirm = $_POST["confirm"];
		if ($account == "" || $password == "" || $confirm == "") {
			echo "<script>alert('请重新填写完整的信息');</script>";
		} else {
			if ($password == $confirm) {
				@mysql_connect('localhost','root','');
				$link = mysql_select_db("mall");
				mysql_query("set name 'utf8'");
				if (!$link) {
					echo "<script>alert('数据库连接失败');</script>";
				} 
				$sql = "select accountid from user where account=$account";
				$result = mysql_query($sql);
				$num = mysql_num_rows($result);
				if ($num) { 
					echo "<script>alert('账号已经存在，请重新输入');history.go(-1);</script>";
				} else {
					$sql_insert = "insert into user (account, password) values($account, $password)";
					$result_insert = mysql_query($sql_insert); //插入成功返回true
					// $num_insert = mysql_num_rows($result_insert);
					//注册不需要这行因为会返回null无法判断
			    	if ($result_insert) {
						echo "<script>alert('注册成功');</script>";
					} else {
						echo "<script>alert('注册失败，请重新输入');</script>";
					}
				}
			} else {
				echo "<script>alert('密码不一致，请重新输入');</script>";
			} 
		}
	} else {	
		echo "<script>alert('提交未成功');</script>";
	}
?>