<?php
	header("Content-type:text/html;charset=utf-8");
	$phone = $_GET["userphone"];
	$pwd = $_GET["userpwd"];
	
	$conn = mysql_connect("localhost","root","root");
	
	mysql_select_db("vancl");
	
	$result = mysql_query("select * from user where userPhone = '$phone' and userPwd = '$pwd'",$conn);
	
	if(mysql_num_rows($result) == 1){
		echo "1";
	}else{
		echo "0";
	}
		
	mysql_close($conn);
?>