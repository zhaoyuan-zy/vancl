<?php
	header("Content-type:text/html;charset=utf-8");
	
	$conn = mysql_connect("localhost","root","root");
	
	mysql_select_db("vancl");
	$result = mysql_query("select * from detail",$conn);

	
	while($obj = mysql_fetch_assoc($result)){
		echo $obj["skirtId"].",".$obj["skirtName"].",".$obj["skirtPrice"].",".$obj["skirtDisPrice"].",".$obj["skirtImg"].",".$obj["skirtColor"]."<br/>";
	}
	
	mysql_close($conn);
?>