
			
				
			
					<?php
					if(!isset($_COOKIE["user"])){
						header("location:index.php");
					}
					else{
					
					include("database.php");
			
					
					$sn=0;
				
					
					$rs=mysql_query("select max(sn) from event");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
					
					$sn=$sn+1;
				

					$news=$_POST["news"];  // retrieve cookie ( email id)
					//$email=$_POST["email"];
					$img=$sn.".jpg";  // teja@tzn.com.jpg
					$target = "event/";  //  pro/teja@tzn.com.jpg
					$target = $target . $img;  //  pro/teja@tzn.com.jpg
					//$pic=($_FILES['photo']['name']);
					$size=($_FILES['photo']['size']);
					if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
					 { 
							mysql_query("insert into event values ('$sn','$news')");
					header("location:dashboard.php?succevent=1");
						} 
					else 
					{ 
						 header("location:addeventform.php?not=1");
					} 

					}
				
				
					?>
					
				