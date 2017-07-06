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
			<br>
					<div class="w3-card-4">
			<div class="panel panel-body">
			<div class="well well-sm" align="center">
				<b class="w3-text-red">Add your new Branch</b>
			</div>
			<?php
					if(isset($_GET["not"])){
							   echo '<b class="w3-text-red">'."sorry ! photo not added".'</b>';
				}
				?>
			
				<form enctype="multipart/form-data" action="addbranch.php" method="POST">
				
				<br>
			<label class="w3-text-green">Branch Name:</label>
			<input class="form-control" type="text" name="name">
			<br>
			
			<label class="w3-text-green">controller name:</label>
			<input class="form-control" type="text" name="controller">
			<br>
			
			<label class="w3-text-green">Address(city name):</label>
			<input class="form-control" type="text" name="address">
			<br>
			
			<label class="w3-text-green">Controller Mobile No:</label>
			<input class="form-control" type="text" name="mob">
			<br>
			
				<button class="btn btn-primary">Add Branch</button>
				</form>
			</div>
			</div>
			
			
			</div>
			
			</div>
	</div>	

			<?php
		}
			?>
		

   </body>
</html>