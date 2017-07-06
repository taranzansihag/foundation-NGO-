<?php
	include("database.php");
	if(isset($_GET["name"])){
		$name=$_GET["name"];
	}
	mysql_query("delete from gallary where sn='$name' ");
	header("location:allphoto.php?dlt=1");
?>