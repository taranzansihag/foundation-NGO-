<?php
	include("database.php");
	if(isset($_GET["name"])){
		$name=$_GET["name"];
	}
	mysql_query("delete from event where news='$name' ");
	header("location:allevent.php?dlt=1");
?>