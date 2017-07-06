<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>pathik lok sewa samiti contact</title>
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
 #annual_letters,#reports,#press_rooms,#leaders,#careers{
	 display:none;
	 }
  </style>
 
 <script src="university/jquery.js"></script>
  <script>
				function w3_open() {
					document.getElementById("mySidenav").style.height = "40%";
					document.getElementById("mySidenav").style.display = "block";
				}
				function w3_close() {
					document.getElementById("mySidenav").style.display = "none";
				}
				function change(v){
				  var s=v+"s";
				 document.getElementById("main").innerHTML=document.getElementById(s).innerHTML; 
				}	
				</script>
		
			
  
 </head>
 <body>
	<div class="container-fluid">
		<div class="responsive">
		<br>
		<div class="row" align="center">
			
			<?php
				if(isset($_GET["err"])){
							   echo '<b class="w3-text-red">'."allready liked".'</b>'."<br><br>";
							   
						   }
			?>
		
		</div>
			<div class="row">
				
				<div class="col-sm-2">
					<img src="img/logo.png" class="img-responsive" width="20%">
				</div>
				
				<div class="col-sm-1">
					<a href="index.php" class="w3-small w3-button w3-round-xxlarge w3-text-shadow w3-yellow">HOME</a>
				</div>
				
				<div class="col-sm-3">
					
						<form method="post" action="like.php">
							<input type="email" name="email" placeholder="email address" required="required" class="form-control">
							
							</div>
							<div class="col-sm-2">
							
								<input type="submit" value="Like me" class="button w3-round-xxlarge w3-text-shadow w3-yellow">
						</form>
					
				</div>
				
				<div class="col-sm-4">
					<div class="row" align="center">
	
					<a target="_blank"  href="http://www.facebook.com"><img src="img/facebook40x40.png" border=0></a>
					&nbsp; &nbsp; &nbsp;
					<a target="_blank" href="http://www.youtube.com"><img src="img/youtube40x40.png" border=0></a>
					&nbsp; &nbsp; &nbsp;
					<a target="_blank" href="http://www.instagram.com"><img src="img/instagram40x40.png" border=0></a>
					&nbsp; &nbsp; &nbsp;
					<a target="_blank" href="https://google.com"><img src="img/googleplus40x40.png" border=0></a>
					&nbsp; &nbsp; &nbsp;
					<a target="_blank" href="http://www.twitter.com"><img src="img/twitter40x40.png" border=0></a>
					
					
					
					</div>
				</div>
			</div>
			
			
			<div class="row" align="center">
			<h1><b class="w3-text-shadow w3-text-pink">PATHIK LOK SEWA SAMITI</b></h1>
			</div>
			
			
			<div class="row">
			
				<ul class="w3-navbar w3-card-2 w3-text-white w3-round-jumbo" style="background-color:#00004d; height:43px">
		  
		  <li><a href="index.php" class="w3-text-shadow">Home</a></li>
		   <li class="w3-dropdown-hover">
			<a href="#" class="w3-text-shadow">About Us <i class="fa fa-caret-down"></i></a>
			<div class="w3-dropdown-content w3-cyan w3-animate-zoom w3-card-4">
			  <a href="about.php" class="w3-text-shadow">About of pathik foundation</a>
			  <a href="about.php" class="w3-text-shadow">vission</a>
			  <a href="about.php" class="w3-text-shadow">mission</a>
			  <a href="about.php" class="w3-text-shadow">Our lidership</a>
			  <a href="about.php" class="w3-text-shadow">Award/emplement</a>
			  <a href="about.php" class="w3-text-shadow">Careers</a>
			</div>
		  </li>
		  <li><a href="photo.php" class="w3-text-shadow">Gallary</a></li>
		  
		  <li class="w3-dropdown-hover">
			<a href="#" class="w3-text-shadow">Resource center <i class="fa fa-caret-down"></i></a>
			<div class="w3-dropdown-content w3-cyan w3-animate-zoom w3-card-4">
			  <a href="#" class="w3-text-shadow">Articlas</a>
			  <a href="#" class="w3-text-shadow">News Letter</a>
			  <a href="#" class="w3-text-shadow">Stories of change</a>
			  <a href="#" class="w3-text-shadow">Audio visual</a>
			  <a href="#" class="w3-text-shadow">Annual program</a>
			</div>
		  </li>
		  
		  <li><a href="our_programms.php" class="w3-text-shadow">Our Programm's</a></li>
		  
		  <li class="w3-dropdown-hover">
			<a href="#" class="w3-text-shadow">Media center <i class="fa fa-caret-down"></i></a>
			<div class="w3-dropdown-content w3-cyan w3-animate-zoom w3-card-4">
			  <a href="media.php" class="w3-text-shadow">Annual letter</a>
			  <a href="media.php"  class="w3-text-shadow">Annual Report</a>
			  <a href="media.php" id="press_room" class="w3-text-shadow">Press Room</a>
			</div>
		  </li>
		  
		  <li class="w3-dropdown-hover">
			<a href="#" class="w3-text-shadow">General Information <i class="fa fa-caret-down"></i></a>
			<div class="w3-dropdown-content w3-cyan w3-animate-zoom w3-card-4">
			  <a href="general.php" class="w3-text-shadow">Letter from bill</a>
			  <a hre="general.php" class="w3-text-shadow">Leadership</a>
			  <a href="general.php" class="w3-text-shadow">History</a>
			  <a href="general.php" class="w3-text-shadow">Foundation fact sheet</a>
			  <a href="general.php" class="w3-text-shadow">Regional office</a>
			</div>
		  </li>
		  
		  <li><a href="event.php" class="w3-text-shadow">Event & Awards</a></li>
		  <li>
			<a href="morebranches.php" class="w3-text-shadow">More Branches <i class="fa fa-caret-down"></i></a>
		  </li>
		  <li><a href="contact.php" class="w3-text-shadow">Contact us</a></li>
		</ul>
			
			</div>
			
			
			
	</div>
</div>	










	<div class="container">
			<div class="responsive">
			<br>
				
			<div class="panel panel-body w3-border w3-light-gray">
			<div class="col-sm-4">
			<?php
			
			?>
						<img src="img/m.jpg" class="img-responsive w3-circle"><br>
						</div>
						<div class="col-sm-8">
						<br><br>
						<b class="w3-text-shadow">Contact person : Mr. Mukesh Meena</b><br>
						<b class="w3-text-shadow">Mobile No. : 9983678080</b><br>
						<b class="w3-text-shadow">Email Id : mukeshsiit@yahoo.com</b><br>
						<b class="w3-text-shadow">Address : H.No. 5, ward no. 04 , Meena colony , Sawai Madhopur 322001</b>
						
						<br><br><br>
						
						<b class="w3-text-shadow">head office : C/o mukesh meena , 5 , new post office colony , behind of police line , Sawai Madhopur (Raj.) 322001</b>
						<br>
						<b class="w3-text-shadow">Email Id: pathikloksewa@gmail.com , 9983678080 , 9413378080</b>
						
						
						</div>
					</div>
					<br>
					<br>
					<div class="row" align="center">
						<h2><b class="w3-text-shadow w3-text-indigo">Also We are available for help you</b></h2>
					<?php
						include("database.php");
						$rs = mysql_query("select * from employee");
						while($r = mysql_fetch_array($rs)){
					?>
					<div class="col-sm-6">
					<div class="panel panel-body w3-border w3-light-gray">
						<div class="col-sm-5">
						<img src="admin/employee/<?=$r[1]?>.jpg" class="img-responsive w3-circle" width="55%"><br>
						</div>
						<div class="col-sm-7">
							<br>
							<b class="w3-text-shadow">Email Id : <?=$r[1]?></b><br>
							<b class="w3-text-shadow">Name : <?=$r[2]?></b><br>
							<b class="w3-text-shadow">Address : <?=$r[3]?></b><br>
							<b class="w3-text-shadow">Mobile Number : <?=$r[4]?></b><br>
						</div>
						</div>
						</div>
						<?php
						}
						?>
						</div>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
			</div>
	</div>		












	<div class="container-fluid">
			<div class="responsive">
			
				<div class="row" style="background-color:cyan;" align="center">
					<div class="col-sm-4">
					<br><br><br><br>
					<b class="w3-text-shadow">Design and developer by : Taranzan Sihag</b><br>
					<b class="w3-text-shadow">Contact no :9636631400</b><br>
					<b class="w3-text-shadow">Email id : taranzansihag1400@gmail.com</b>
					</div>
					<div class="col-sm-4">
					<img src="img/t.png" class="img-responsive" width="50%"><br>
					
					</div>
					<div class="col-sm-4">
						<h4><br><b class="w3-text-shadow">
							जवानी हैं मेंरी, कोई मन्दिर का प्रसाद नहीं 
							जो भीख मांगों में बांट दूंगी 
							नजर उठा के देखा दुबारा तो यहीं पे काट दुंगी............।
							<br><br>
							जिन्दा रहती ताे क्या पता शायद दुनिया बचा लेती कभी।
							पर गर्भ में मर के घरवालों का दहेज के सिवा कुछ ना बचा सकी।।<br><br>
							#बेटी_बचाओ_बेटी_पढ़ाओ
							</b>
						</h4>
					</div>
					
					
				</div>
			</div>
		</div>	

</body>
</html>
			