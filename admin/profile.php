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
 
  <script src="jquery.js"></script>
	<script type="text/javascript">

	
	</script>
    </head>
    <body class="w3-light-grey w3-content" style="max-width:1600px">
	<?php
		include("database.php");
		
		if(!isset($_COOKIE["user"])){
			header("location:index.php");
		}
		else{
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
			<div class="row">
			<br>
			<?php
				 if(isset($_GET["succ"])){
							   echo '<b class="w3-text-red">'."successfully change password".'</b>';
				 }   
				 if(isset($_GET["succp"])){
							   echo '<b class="w3-text-red">'."successfully profile update".'</b>';
							   
						   		   }
								    if(isset($_GET["succpic"])){
							   echo '<b class="w3-text-red">'."successfully profile photo update".'</b>';
							   
						   		   }
								    if(isset($_GET["not"])){
							   echo '<b class="w3-text-red">'."profile photo is not update".'</b>';
							   
						   		   }
				
							   		  
			?>
				<div class="col-sm-3">	
			<?php
				
				$cook = $_COOKIE["user"];
				
			?>
				<br>
				<img src="profile/<?=$cook?>.jpg" class="img-responsive w3-border w3-padding w3-round-xxlarge"><br>
					<form enctype="multipart/form-data" method="post" action="editprofilephoto.php">
						<label class="w3-text-green">Edit Your Profile Picture :</label>
			
						<input class="form-control" type="file" name="photo"><br>
						<input class="form-control btn btn-success" type="submit" value="Update">
			
					</form>
				</div>
				<div class="col-sm-3">
				<br><br>
					<a href="changepassform.php" class="w3-small w3-button w3-round-xxlarge w3-text-shadow w3-green">Change Password</a><br><br>
					<a href="updateform.php" class="w3-small w3-button w3-round-xxlarge w3-text-shadow w3-green"> Edit Profile</a>
				</div>
				
				<div class="col-sm-6">
				
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