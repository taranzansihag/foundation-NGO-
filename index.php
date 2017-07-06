<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>pathik lok sewa samiti</title>
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
 #notifications,#comings,#students,#clgs{
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
			
			
			
			<div class="row">
				
				<img src="img/img2.jpg" class="img-responsive" height="30%">
				<div class="w3-display-right w3-container">
					<button class="w3-yellow w3-round-xxlarge"><a href="join_member.php" style="text-decoration:none"><h1 class="w3-text-shadow"><b>  &nbsp; JOIN ME .... ! &nbsp;</b></h1></a></button>
				</div>
				
			</div>
			
	
			
		</div>
	</div>		
			
			<br>
			
			
		<div class="container">
			<div class="responsive">
			
			
			<div class="row">
				<div class="col-sm-8">
					
					<h3><b class="w3-text-shadow w3-border-bottom w3-border-color-pink w3-text-blue">Welcome to Pathik Lok Sewa Samiti</b></h3>
					<p>Pathik lok sewa samiti is a non-governmental organization (NGO) working in sawai madhaopur (Raj.), India. 
					The registration number of the organization is: 120/SWM/2004-2005. 
					Established in the year 2004?, pathik lok sewa samiti works in the save girls,
					Animal Husbandry, Dairying & Fisheries, Animal Welfare, Art & Culture, Biotechnology, Children, 
					Civic Issues, Dalit Welfare, Disability, Disaster Management, Education & Literacy, 
					Environment and natural resource management, Food and Agriculture, Health & Nutrition, 
					HIV/AIDS, Housing and shelter, Human Rights, Information & Communication Technology (ICT) , 
					Labour & Employment, Land Resources, Legal Awareness & Aid, Micro Finance (SHGs), 
					Micro Small & Medium Enterprises, Minority Issues, etc. The NGO works towards the promotion of sustainable development.
					</p>
					<p>
						<b>head office : C/o mukesh meena , 5 , new post office colony , behind of police line , Sawai Madhopur (Raj.) 322001</b>
					</p>
					<p>
						<b>Email Id:</b> pathikloksewa@gmail.com , 9983678080 , 9413378080
					</p>
					<br>
					
					<h3><b class="w3-text-shadow w3-border-bottom w3-border-color-pink w3-text-blue">On Going Work</b></h3>
					<?php
					include("database.php");
					$rs=mysql_query("select max(sn) from work");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0];
					}
					$rs1 = mysql_query("select * from work where sn = '$sn' ");
					if($r1=mysql_fetch_array($rs1)){
						
						?>
						
						<p>
							
							<?=$r1[1]?>
						</p>
						
						<?php
					}
					?> 
					<br>
				</div>
				
				<div class="col-sm-4" align="center">
				<br><br>
					<div class="panel panel-body w3-border w3-light-gray">
						<img src="img/m.jpg" class="img-responsive w3-circle"><br>
						<b class="w3-text-shadow">Contact person : Mr. Mukesh Meena</b><br>
						<b class="w3-text-shadow">Mobile No. : 9983678080</b><br>
						<b class="w3-text-shadow">Email Id : mukeshsiit@yahoo.com</b><br>
						<b class="w3-text-shadow">Address : H.No. 5, ward no. 04 , Meena colony , Sawai Madhopur 322001</b>
					</div>
				</div>
			</div>
			
			
			<br>
			<div class="row w3-border-bottom w3-bottombar w3-border-blue">
				
				<h3><b class="w3-text-shadow w3-text-blue">Special thank you</b></h3>
				
			</div>
			
			<div class="row">
				<div class="col-sm-3">
				<br>
					<img src="img/kamel.jpg" class="img-responsive w3-border we-padding w3-round-xxlarge">
				</div>
				<div class="col-sm-9">
				<br>
					<p>
						May God give you the best things that you deserve
						because you have touched our lives so meaningfully.
						Thank you!
					</p>
					<p>
						Special thankyo form <b>Kamal Kishor Meena</b> (Professor of Geogerophy at PG collage Sawai Madhopur)<br>
						
					</p>
					<p>
						Pathik lok sewa samiti ki niv kamal kishor meena ne rakhi.jo aaj is duniya me nhi hai (
						God rest his soul in peace).
					</p>
					<p>
						बहुत ही दुखी मन से ये मुझे यह बताना पर रहा है की Pathik lok sewa samiti के सदस्य और <b> Leader </b>Kamal Kishor Meena जी अब इस दुनिया में नहीं रहे,  

						Kishor g ने is lok sewa samiti पर बहुत ही अच्छा योगदान दिया था. मंच को उनकी कमी हमेशा महसूस होगी. 

						 ईश्वर उनकी आत्मा को शांति दे !
					</p>
				</div>
			
			</div>
			<br>
			
			
			
			
			
			<div claass="row">
				<div class="row w3-border-bottom w3-border-purple">
				
				<div class="col-sm-3" align="center">			
				 <button class="w3-btn w3-light-grey" id="notification"  onClick="change('notification')"><b>NOTIFICATION</b></button>
				</div>
				
				<div class="col-sm-3" align="center">				
				 <button class="w3-btn w3-light-grey" id="coming"  onClick="change('coming')"><b>UPCOMING EVENT</b></button>
				</div>
				
				<div class="col-sm-3" align="center">
                 <button class="w3-btn w3-light-grey" id="student"  onClick="change('student')"><b>Award's</b></button>
			    </div>
			   
			   <div class="col-sm-3" align="center">
                 <button class="w3-btn w3-light-grey" id="clg"  onClick="change('clg')"><b>More Branches</b></button></li>
			   </div>
			
			</div>
			
			</div>
			
		
				<div id="main">
					<div class="row">
					 <?php
					 $sn=0;
					include("database.php");
					$rs = mysql_query("select * from news ");
					while($r=mysql_fetch_array($rs)){
						$sn=$sn+1;
						?>
							<div class="col-sm-6">
								<a href="admin/news/<?=$r[0]?>.pdf"><h4><b class="w3-text-indigo"><?=$sn?>.  <?=$r[1]?></b></h4></a>
							</div>
						<?php
					}
				   ?>
				   </div>
			 </div>	
			 
			 
			  <div id="notifications">
			  <div class="row">
			   <?php
				 $sn=0;
				include("database.php");
				$rs = mysql_query("select * from news ");
				while($r=mysql_fetch_array($rs)){
					$sn=$sn+1;
					?>
						<div class="col-sm-6">
							<a href="admin/news/<?=$r[0]?>.pdf"><h4><b class="w3-text-indigo"><?=$sn?>.  <?=$r[1]?></b></h4></a>
						</div>
					<?php
				}
			   ?>
			   </div>
			 </div>	
			 
			 
				 <div id="comings">
				 <div class="row">
					<?php
					$sn=0;
					include("database.php");
					$rs = mysql_query("select * from event ");
					while($r=mysql_fetch_array($rs)){
						$sn=$sn+1;
						?>
							<div class="col-sm-6">
								<a href="admin/event/<?=$r[0]?>.pdf"><h4><b class="w3-text-indigo"><?=$sn?>.  <?=$r[1]?></b></h4></a>
							</div>
						<?php
					}
				   ?>
				   </div>
				 </div>	
	 
	 
			 <div id="students">
			 <div class="row">
				 <?php
				$sn=0;
				include("database.php");
				$rs = mysql_query("select * from award ");
				while($r=mysql_fetch_array($rs)){
					$sn=$sn+1;
					?>
						<div class="col-sm-6">
							<a href="admin/award/<?=$r[0]?>.jpg"><h4><b class="w3-text-indigo"><?=$sn?>.  <?=$r[1]?></b></h4></a>
						</div>
					<?php
				}
			   ?>
			</div>	
			</div>
			
			
			
			<div id="clgs">
			<div class="row">
					<?php
					$sn=0;
					include("database.php");
					$rs = mysql_query("select * from branch ");
					while($r=mysql_fetch_array($rs)){
						$sn=$sn+1;
						?>
							<div class="col-sm-12">
								<h4><b class="w3-text-indigo"><?=$sn?>.  <?=$r[1]?> (controller: <?=$r[2]?> and Location: <?=$r[3]?>)  Contact No. : <?=$r[4]?> </b></h4>
							</div>
						<?php
					}
				   ?>
				   </div>
				</div>
		








		<br>
			
			<div class="row w3-border-top w3-border-purple">
			<br><br><br><br><br><br><br>
				<div class="col-sm-4">
					<div class="w3-card-4">
					<img src="img/pathik_girls4.jpg" class="img-responsive">
						<div class="panel panel-body">
						<div class="well well-sm" align="center">
							<p>
								save girls ! aaj k time m ladkiyo ka yogdan ldko ki tulna m kafi achha h . ek bar k liye dekha jaye toh phle s ab ldkiye kaafi aage bdh rhi hai.<br>
								please hmare sath ek chain bnaye 
							</p>
							<p>
								<b> Beti ko mt samjo bhar !<br>
								Jivan ka hai aadhar!!</b>
							</p>
						</div>
						</div>
					</div>			
				</div>
				
				<div class="col-sm-4">
					<div class="w3-card-4">
					<img src="img/i2.jpg" class="img-responsive">
						<div class="panel panel-body">
						<div class="well well-sm" align="center">
						<marquee direction="up" onmouseover="stop()" onmouseout="start()">
							<p class="w3-text-blue">	
								beti bchao and beti pdhao  k liye sima meena kl rawal jayenge<br>
								sima meena ne apne pryaso s bal vivah rukvaya hai<br>
								seema meena handball m rajasthan team ka netrtav kr chuki hai and wo khel m aage bdhna chahti hai
							</p>
							</marquee>
						</div>
						</div>
					</div>			
				</div>
				
				<div class="col-sm-4">
					<div class="w3-card-4">
					<img src="img/pathik3.jpg" class="img-responsive">
								
				</div>
				
			</div>	
			
			
			
			
			<div class="row">
			
				
			
			</div>
			
			
			
			
				
			</div>
			
			
			
			
		</div>	
	</div>	
		
		
<div class="container-fluid">
		<div class="responsive">
		
			<div class="row" style="background-image:url(img/blur.jpg)" align="center" >
			<br>
				<div class="col-sm-3">
					<b>ABOUT US</b><br>
					<p>
						to know more about pathik lok sewa samiti<br>
						search in pathik lok sewa samiti in facebook page
					</p>
				</div>
				
				<div class="col-sm-3">
					<b class="w3-text-shadow">FOCOUS AREA</b><br><br>
					<a href="rural_transformation.php"><b>Rural Transformation</b></a><br>
					<a href="health.php"><b>Health</b></a><br>
					<a href="education.php"><b>Education</b></a><br>
					<a href="sport.php"><b>Sport for development</b></a><br>
				
	
				</div>
				
				<div class="col-sm-3">
					<b>CONTACT</b><br>
					<p>
						<b>head office : C/o mukesh meena , 5 , new post office colony , behind of police line , Sawai Madhopur (Raj.) 322001</b>
					</p>
					
						<b>Email Id:</b> pathikloksewa@gmail.com , 9983678080 , 9413378080 <br>
						<a href="contact.php" class="w3-text-blue">view More.............</a>
					
					</p>
				</div>
				
				<div class="col-sm-3">
				<br><br>
					<button class="w3-blue w3-round-xxlarge"><a href="join_member.php" style="text-decoration:none"><h1 class="w3-text-shadow"><b>  &nbsp; JOIN ME .... ! &nbsp;</b></h1></a></button>
					<br><br>

				</div>
			</div>
		
		</div>
</div>		

	
<br>		
		
		
<div class="container">
		<div class="responsive">
						<div class="row" align="center">
				<?php
					include("database.php");
					$sn=0;
					$rs = mysql_query("select  max(sn) from allmember");
					while($r=mysql_fetch_array($rs)){
						$sn=$r[0]+1000;
					}
					
					$sn1=0;
					$rs1 = mysql_query("select  max(sn) from likes");
					while($r1=mysql_fetch_array($rs1)){
						$sn1=$r1[0]+1000;
					}
				?>
				<marquee direction="left">
				<h2><b class="w3-text-indigo w3-text-shadow">Total <?=$sn?> people are join and <?=$sn1?> Like pathik lok sewa samiti foundation</b></h2>
				</marquee>
			</div>
		</div>

</div>		
		
	<br>	
		
		
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