
			
				
			
					<?php
					if(!isset($_COOKIE["user"])){
						header("location:index.php");
					}
					else{
					include("database.php");
			
					
					$sn=0;
				
					
					$rs=mysql_query("select max(sn) from employee");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
					
					$sn=$sn+1;
					
					$email = $_POST["email"];
					$name = $_POST["name"];
					$address = $_POST["address"];
					$mobile = $_POST["mobile"];  // retrieve cookie ( email id)
					//$email=$_POST["email"];
					$img=$email.".jpg";  // teja@tzn.com.jpg
					$target = "employee/";  //  pro/teja@tzn.com.jpg
					$target = $target . $img;  //  pro/teja@tzn.com.jpg
					//$pic=($_FILES['photo']['name']);
					$size=($_FILES['photo']['size']);
					
					$rs1 = mysql_query("select * from employee where email='$email' ");
					if($r1 = mysql_fetch_array($rs1)){
						header("location:add_employee.php?match");
					}
					else{
					if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
					 { 
							mysql_query("insert into employee values ('$sn','$email','$name','$address','$mobile')");
							header("location:dashboard.php?succemployee=1");
						} 
						
					else 
					{ 
						 header("location:add_employee.php?not=1");
					} 
					}

					
					}
				
					?>
					
				