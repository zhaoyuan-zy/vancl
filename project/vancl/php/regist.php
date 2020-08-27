<?php
	header("Content-type:text/html;charset=utf-8");
	$phone = $_GET["userphone"];
	$pwd = $_GET["userpwd"];
	
	$conn = mysql_connect("localhost","root","root");
	
	mysql_select_db("vancl");
	
	$result = mysql_query("select * from user where userPhone = '$phone'",$conn);
	$result1 = mysql_query("select * from user",$conn);
	
	$num = mysql_num_rows($result1);
	
	if(mysql_num_rows($result) == 1){
		echo "0";
	}else{
		echo "1";
		mysql_query("insert into user values($num+1,'$phone','$pwd')",$conn);
	}
	
	mysql_close($conn);
?>