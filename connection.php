<?php
$servername = "selene.hud.ac.uk"
$username = "hudbrief"; 
$password = "HB16mar23hb";
$dname = "hudbreif";
  
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
  die("Connection failed: ". $conn->connect_error);
}
?>
