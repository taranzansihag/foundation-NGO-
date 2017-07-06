
			
				
			
					<?php
					
					include("database.php");
					$news = $_POST["news"];
					$sn=0;
					$rs=mysql_query("select max(sn) from work");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
					
					$sn=$sn+1;
						if($news!=""){
							mysql_query("insert into work values ('$sn','$news')");
							header("location:dashboard.php?succwork=1");
						}
						else{
							
							header("location:workform.php?not=1");
						}
				
				
					?>
					
				