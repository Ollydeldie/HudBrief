<?php
if(empty($_SESSION["username"])){
   echo $_SESSION["username"];
   header("location: login.php");
   die();
}
?>
