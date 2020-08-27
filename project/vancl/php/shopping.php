<?php
	header("Content-type:text/html;charset=utf-8");
	
	
	$conn = mysql_connect("localhost","root","root");
	
	mysql_select_db("vancl");
	
	$result = mysql_query("select * from car",$conn);
	
	while($obj = mysql_fetch_assoc($result)){
		echo $obj["carId"].",".$obj["carImg"].",".$obj["carName"].",".$obj["carSize"].",".$obj["carScore"].",".$obj["carPrice"].",".$obj["carNum"].",".$obj["carTotal"]."<br/>";
	}
	mysql_close($conn);
?>