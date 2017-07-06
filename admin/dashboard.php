<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Dashboard</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/w3.css">
  <link href="layout1.css" rel="stylesheet" type="text/css" media="all">
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
     
      margin: auto;
  }
 
  </style>
 
  
    </head>
    <body class="w3-light-grey w3-content" style="max-width:1600px">
	<?php
		include("database.php");
		
		if(!isset($_COOKIE["user"])){
			header("location:index.php");
		}
		else{
			$dep=$_COOKIE["user"];
	?>
	 <div class="container-fluid">
            <div class="responsive">
			
			<div class="col-sm-12" style="height:25px; background-color:#B0C4DE">
				<div class="col-sm-11" align="center">
					<b>PATHIK LOK SEWA SAMITI</b>
				</div>
				<div class="col-sm-1">
					<a href="logout.php?email=<?=$email?>"><b>Logout</b></a>
				
				</div>
                </div>
				
				
       <div class="col-sm-2" style="background-color:indigo; height:1000px;">
	   
	    <?php
	   include("leftmenu.php");
	   ?>
				
	</div>
			
			<div class="col-sm-10">
			
				<?php
					if(isset($_GET["succphoto"])){
							   echo '<b class="w3-text-red">'."successfully photo added into gallary".'</b>';
				}
					if(isset($_GET["succwork"])){
							   echo '<b class="w3-text-red">'."successfully on going work are added :".'</b>';
				}
					if(isset($_GET["succaward"])){
							   echo '<b class="w3-text-red">'."successfully award added :".'</b>';
				}
					if(isset($_GET["succbranch"])){
							   echo '<b class="w3-text-red">'."successfully branch added :".'</b>';
				}
				
					if(isset($_GET["succnews"])){
							   echo '<b class="w3-text-red">'."successfully news added".'</b>';
				}
					if(isset($_GET["succevent"])){
							   echo '<b class="w3-text-red">'."successfully event news added".'</b>';
				}
					if(isset($_GET["succemployee"])){
							   echo '<b class="w3-text-red">'."successfully employee added".'</b>';
				}
				?>
				
				
			</div>
			
			</div>
	</div>	

			<?php
		}
			?>
		

   </body>
</html>