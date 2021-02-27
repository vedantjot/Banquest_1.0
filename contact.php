<?php

$txtname =$_POST['txtname'];
$txtemail =$_POST['txtemail'];
$txtsubject =$_POST['txtsubject'];
$txtmessage =$_POST['txtmessage'];



$servername = "localhost";
$username = "id15041344_banquest";
$password = "-WzEleCXu\PKsO2[";
$dbname = "id15041344_contactus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  
 
}

$sql = "INSERT INTO details (name, email, subject,message)
VALUES ('$txtname', '$txtemail', '$txtsubject','$txtmessage')";

if ($conn->query($sql) === TRUE) {
 
   // echo "<h2>New record created successfully<h2>";
 // sleep(1);
  header('Location: index.html');
 
exit;
} else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>