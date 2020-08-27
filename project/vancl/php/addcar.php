<?php
	header("Content-type:text/html;charset=utf-8");
	
	$img = $_GET["img"];
	$name = $_GET["name"];
	$size = $_GET["size"];
	$score = $_GET["score"];
	$price = $_GET["price"];
	$num = $_GET["num"];
	$total = $_GET["total"];
	
	
	$conn = mysql_connect("localhost","root","root");
	
	mysql_select_db("vancl");
	$result = mysql_query("select * from car",$conn);
	$id = mysql_num_rows($result);
	
	echo $id;
	
	mysql_query("insert into car values ($id+1,'$img','$name','$size','$score',$price,'$num','$price')",$conn);
	mysql_close($conn);
?>