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
				<b class="w3-text-red">Award of pathik lok sewa samiti</b>
			</div>
			<?php
					if(isset($_GET["not"])){
							   echo '<b class="w3-text-red">'."sorry ! not added".'</b>';
				}
				?>
			
				<form enctype="multipart/form-data" action="addaward.php" method="POST">
				
				<br>
			<label class="w3-text-green">Choose photo:</label>
			
			<input class="form-control" type="file" name="photo">
			
			
			
			<br>
				<label class="w3-text-green">award related news : </label><textarea name="news" row="10" placeholder="this means on going work " coloum="150" required="required" class="form-control"></textarea><br>
				<button class="btn btn-primary">Add Award</button>
				</form>
				<br><br><br>
			<button class="btn btn-primary"><a href="allaward.php">All Award</a></button>
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