<?php
	include("database.php");
	if(isset($_GET["name"])){
		$name=$_GET["name"];
	}
	mysql_query("delete from branch where sn='$name' ");
	header("location:allbranch.php?dlt=1");
?>