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
			header("location:login.php");
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
				if(isset($_GET["dlt"])){
				
				echo "<br>".'<b class="w3-text-red" style="text-decoration:underline">'."Successfully Deleted".'</b><br>';
				
				}
			?>
				<br>
				<table class="table">
							<thead>
							  <tr>
								<th>SN</th>
								<th>Related news</th>
								<th>Event</th>
								<th>DELETE</th>
							  </tr>
							</thead>
						<tbody>
				<?php
					include("database.php");
					$sn=0;
					$rs = mysql_query("select * from event");
					while($r = mysql_fetch_array($rs)){
						$sn+=1;
					
				?>
				 <tr class="success">
								<td><?=$sn?></td>
								<td><?=$r[1]?></td>
								<td><a href="event/<?=$r[0]?>.jpg" width="100">download</a></td>
								<td><a href="eventdelete.php?name=<?=$r[1]?>"><img src="img/delete.png" width="20" height="20"></a></td>
							</tr>	
					<?php
					
					}
				?>
				</tbody>
						  </table>
						<button class="btn btn-success"><a href="addeventform.php">Add new event</a></button>
						
				
				
			</div>
			
			</div>
	</div>	

			<?php
		}
			?>
		

   </body>
</html>