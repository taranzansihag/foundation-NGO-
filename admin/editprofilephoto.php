
			
				
			
					<?php
					if(!isset($_COOKIE["user"])){
						header("location:index.php");
					}
					else{
					
					
					
					$sn=$_COOKIE["user"];
				

					//$news=$_POST["news"];  // retrieve cookie ( email id)
					//$email=$_POST["email"];
					$img=$sn.".jpg";  // teja@tzn.com.jpg
					$target = "profile/";  //  pro/teja@tzn.com.jpg
					$target = $target . $img;  //  pro/teja@tzn.com.jpg
					//$pic=($_FILES['photo']['name']);
					$size=($_FILES['photo']['size']);
					
					if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
					 { 
					header("location:profile.php?succpic=1");
						} 
					else 
					{ 
						 header("location:profile.php?not=1");
					} 

					}
				
				
					?>
					
				