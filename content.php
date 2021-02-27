<?php 
$host = "localhost";
$user = "id15041344_admin";
$pass = "nB4A^SK98R7hMAgC";
$db = "id15041344_banquet";
 
 
 $q = $_GET['q'];
 
$conn = mysqli_connect($host,$user,$pass, $db);

if (!$conn) {
  die('Could not connect: ' . mysqli_error($con));
}
 
    
    $sql = "SELECT * FROM `banquet` WHERE city=".$q."";
    
   $result = mysqli_query($conn,$sql);
   
	if ($result->num_rows > 0) {
 	 
 	 while($row = mysqli_fetch_array($result)) 
 	 {
 	      echo "<div>";
                      echo'<a href="https://www.google.com" style="text-decoration: none;">';
                      echo '<img src="http://www.banquest.tk/image/'.$row["id"].'.jpg"  alt="gtu" id="img">';
                      echo ' <p  style="font-size: 30px;text-align: start;margin-top: -100px;margin-left: 10px;font-family: Arabic Typesetting;font-weight: bold;color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $row["name"].', '. $row["city"].'</p>';
                       
                        /*echo '<p  style="font-size: 25px;text-align: start;margin-top: -200px;margin-left: 10px;font-family: Arabic Typesetting;font-weight: bold;color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; City:- '. $row["city"].'</p>';*/
                     
                     echo '<p  style="font-size: 20px;text-align: start;margin-top: -225px;margin-left: 10px;font-family: Arabic Typesetting;font-weight: bold;color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row["tagline"].' <span style="color: coral;font-weight: bold;">Select Me</span></p>';
                     
                     
                     
                     echo ' </a> ';
                     echo '</div>';
 	     
 	 }
	}
                    	  
 
?>