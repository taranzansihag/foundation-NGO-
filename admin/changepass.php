<?php
	if(!isset($_COOKIE["user"])){
		header("location:index.php?err=1");
	}
	else{
		$cookie = $_COOKIE["user"];
	$cpass = $_POST["cpass"];
	$npass = $_POST["npass"];
	$rpass = $_POST["rpass"];
	include("database.php");
	$rs = mysql_query("select * from admin where email='$cookie' ");
	if($r = mysql_fetch_array($rs)){
		
		$pass = $r[1];
		
	}
	if($pass==$cpass){
		
		if($npass==$rpass){
			mysql_query("update admin set pass='$npass' ");
			header("location:profile.php?succ=1");	
		}
		else{
			header("location:changepassform.php?notmatch=1");	
		}
		
	}
	else{
			header("location:changepassform.php?currentwrong=1");
	}
	
	}
?>