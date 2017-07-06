<?php
	include("database.php");
	
	$email=$_POST["email"];
					$sn=0;
					$rs = mysql_query("select  max(sn) from likes");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
					$sn=$sn+1;
	$rs=mysql_query("select * from likes where email='$email' ");
		if($r=mysql_fetch_array($rs)){
				
				header("location:index.php?err=1");
			}
			else{
				mysql_query("insert into likes values ('$sn','$email')");
				header("location:index.php");
			
		}
?>