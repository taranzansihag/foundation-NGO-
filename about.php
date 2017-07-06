<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>pathik lok sewa samiti about</title>
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
		
		
			<div class="col-sm-3">
						
					<br><br>	<br>
				 <button class="w3-btn w3-purple" id="annual_letter"  onClick="change('annual_letter')"><b>About of pathik lok sewa</b></button><br><br><br>
				 <button class="w3-btn w3-purple" id="report"  onClick="change('report')"><b>Vision</b></button><br><br><br>
                 <button class="w3-btn w3-purple" id="press_room"  onClick="change('press_room')"><b>Mission</b></button><br><br><br>
				 <button class="w3-btn w3-purple" id="leader"  onClick="change('leader')"><b>Leadership</b></button><br><br><br>
				 <button class="w3-btn w3-purple" id="career"  onClick="change('career')"><b>Career</b></button><br><br><br>
			 
			   <div class="row" style="height:600px"></div>
			   
			   
			   
			</div>
			<div class="col-sm-9">
				<br><br>	<br>
				
				<div id="main">
					<img src="img/w1.jpeg" class="img-responsive w3-border we-padding w3-round-xxlarge">
					<br><br>
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
					<br><br>
				</div>
				
				<div id="annual_letters">
					<img src="img/w1.jpeg" class="img-responsive w3-border we-padding w3-round-xxlarge">
					<br><br>
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
					<br><br>
				</div>
				
				<div id="reports">
					<img src="img/w2.jpg" class="img-responsive w3-border we-padding w3-round-xxlarge">
					<p>	<br><br>
						 Work as a catalyst in bringing sustainable change in the lives of underprivileged children, youth and women,
						 with a life-cycle approach of development.</p><p>
						 Enable the civil society across the world to engage proactively in the change process through 
						 the philosophy of civic driven change.</p><p>
						 Adopt highest standards of governance to emerge as a leading knowledge and technology driven, 
						 innovative and scalable international development organisation.
					</p><br><br>
				</div>
				
				<div id="press_rooms">
				<img src="img/mission.jpg" class="img-responsive w3-border we-padding w3-round-xxlarge">
					<br><br>
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
					<br><br>
					<p>
						Mission Education is a national level programme of Smile Pathik lok sewa samiti, which is committed to providing basic
						education and healthcare to underprivileged children. Pathik lok sewa samiti believes that whether you are addressing 
						healthcare, poverty, population control, unemployment or human rights, there's no better place to start than in
						the corridors of education. </p>
						<p>

						Education is both the means as well as the end to a better life; means, because it empowers an individual
						to earn his/her livelihood and the end because it increases one's awareness on a range of issues –
						from healthcare to appropriate social behavior to understanding one's rights, and in the process evolve as a better citizen.</p> 
						<p>
						Pathik lok sewa samiti educational initiatives include Pre-school [3-6 yrs], Non Formal Education 
						[6-14 yrs non-school going], Remedial Education [6-14 yrs school going] and Bridge Course [14-18 yrs drop-outs].
						It works for education for needy children who are under difficult circumstances, such as child labour, children
						of poorest of the parents, children inflicted and affected with HIV/AIDS, street and runaway children, children 
						with rare disabilities, disaster struck children and slum children. Special emphasis is given on girl education 
						and women education, so that they and their families get empowered. </p>
						<p>
						Since its inception in 2002, more than 200,000 children have directly benefitted from the Mission Education programme
					</p>
				</div>
				
				<div id="leaders">
				<img src="img/pathik_girls1.jpg" class="img-responsive w3-padding w3-border w3-round-xxlarge"><br><br>
				<p>
					pathik lok sewa samiti is managed by a Board of Advisors
					comprising individuals from diverse backgrounds and expertise.
					The board is formed for a period of one year and a few independent 
					members of eminence and reputation are nominated each year. Members
					of this board meet once every quarter.
					</p>
					<br>
					<div class="w3-border w3-border-green w3-round-large">
						<b>Mr. Kamal Kishor Meena</b><br>
						<p>
							Mr. kamal kishor meena Professor of Geogerophy at PG collage Sawai Madhopur and also command of leadership of pathik lok sewa samiti.
							
						</p>
					</div>
					<br><br>
					<div class="w3-border w3-border-green w3-round-large">
						<b>Mr. Mukesh Meena</b><br>
						<p>
							persent time handle of pathik lok sewa samiti mukesh meena sir.mail id: mukeshsiit@yahoo.com and contact info : 9983678080
						</p>
					</div>
				</div>
				
				<div id="careers">
					
				</div>
				
			</div>
			
	 
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
			