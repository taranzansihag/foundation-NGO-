<?php
	include("database.php");
	if(isset($_GET["name"])){
		$name=$_GET["name"];
	}
	mysql_query("delete from allmember where emailid='$name' ");
	header("location:allmember.php?dlt=1");
?>