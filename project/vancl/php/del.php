<?php
	header("Content-type:text/html;charset=utf-8");
	
	$name = $_GET["name"];
	$size = $_GET["size"];
	
	$conn = mysql_connect("localhost","root","root");
	
	mysql_select_db("vancl");
	
	mysql_query("delete from car where carName = '$name' and carSize='$size'",$conn);

	mysql_close($conn);
?>