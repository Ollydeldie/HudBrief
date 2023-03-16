<?php
$servername = "selene.hud.ac.uk"
  
$conn = new mysqli($servername);

if($conn->connect_error){
  die("Connection failed: ". $conn->connect_error);
}
?>
