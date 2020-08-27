<?php
	header("Content-type:text/html;charset=utf-8");
	
	$conn = mysql_connect("localhost","root","root");
	
	mysql_select_db("vancl");
	
	$result = mysql_query("select * from goods",$conn);
	
	while($obj = mysql_fetch_assoc($result)){
		echo $obj["goodsId"].",".$obj["goodsImg"].",".$obj["goodsName"].",".$obj["goodsStyle"].",".$obj["goodsColor"].",".$obj["goodsPrice"].",".$obj["goodsDisPrice"]."<br/>";
	}
	// $i = mysql_num_rows($result);
	// ech1o $i;
	mysql_close($conn);
?>