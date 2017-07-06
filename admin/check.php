<?php
	include("database.php");
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	
	$rs=mysql_query("select * from admin where email='$email' AND pass='$pass' ");
	if($r=mysql_fetch_array($rs)){
		setcookie("user",$email,time()+3600);
		header("location:dashboard.php");
	  
	}
	
	else{
			header("location:index.php?err=1");
	}
?>