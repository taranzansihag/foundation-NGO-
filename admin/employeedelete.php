<?php
	include("database.php");
	if(isset($_GET["name"])){
		$name=$_GET["name"];
	}
	mysql_query("delete from employee where email='$name' ");
	header("location:allemployee.php?dlt=1");
?>