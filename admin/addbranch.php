<?php
					
					
					if(!isset($_COOKIE["user"])){
						header("location:index.php");
					}
					else{
					
					include("database.php");
			
					$sn=0;
					$name=$_POST["name"];
					$controller=$_POST["controller"];
					$address=$_POST["address"];
					$mob=$_POST["mob"];
					$rs=mysql_query("select max(sn) from branch");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
					
					$sn=$sn+1;
				

					mysql_query("insert into branch values ('$sn','$name','$controller','$address','$mob')");
					header("location:dashboard.php?succbranch=1");
					
					}
					
?>
					
				