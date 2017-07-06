
<?php
if(!isset($_COOKIE["user"])){
	header("location:index.php?err=1");
}
else{
  $emailid = $_COOKIE["user"];
  $email=$_POST["email"];
  $name=$_POST["name"];
  $mobile=$_POST["mobile"];
  $address=$_POST["address"];
  $gender=$_POST["gender"];
  $country=$_POST["country"];
  $dob=$_POST["dob"];
    include("database.php");	
   mysql_query("update admin set email='$email',name='$name',mobile='$mobile',address='$address',gender='$gender',country='$country',dob='$dob' where email='$emailid'") or die(mysql_error());
      header("location:profile.php?succp=1");
} 
 ?>
