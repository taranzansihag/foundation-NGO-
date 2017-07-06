<?php
	include("database.php");
	if(isset($_GET["name"])){
		$name=$_GET["name"];
	}
	mysql_query("delete from news where news='$name' ");
	header("location:allnews.php?dlt=1");
?>