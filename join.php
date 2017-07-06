
			
				
			
					<?php
					
					include("database.php");
					
						
						$email = $_POST["email"];
						$name = $_POST["name"];
						$mob = $_POST["mob"];
						$address = $_POST["address"];
						$msg = $_POST["msg"];
						
					$sn=0;
					$rs=mysql_query("select max(sn) from allmember");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
					
					$sn=$sn+1;
					$rs = mysql_query("select * from allmember where emailid='$email' ");
					if($r = mysql_fetch_array($rs)){
						header("location:join_member.php?not=1");
					}
					else{
							mysql_query("insert into allmember values ('$sn','$email','$name','$mob','$address','$msg')");
							header("location:join_member.php?succmember=1");
						}

				
				
				
					?>
					
				