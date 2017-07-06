<?php
	include("database.php");
	if(isset($_GET["name"])){
		$name=$_GET["name"];
	}
	mysql_query("delete from award where sn='$name' ");
	header("location:allaward.php?dlt=1");
?>