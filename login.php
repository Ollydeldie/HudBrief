<?php
session_start();

if (!empty($_SESSION["username"])) {
   header("location: index.html");
  die();
}

if($count == 1) {
   $_SESSION["username"] = $username;
   
   header("location: index.html")
   die();
   
} else {
    $error = "Invalid username or password!";
}

if (!empty($_POST['username'] && !empty($_POST['password'])) {}
?>
<html>
  <head>
    <body class="login">
      <form class="login_form action="login.php" method="POST">
          <label for="username">Username:</label><br/>
          <input type="text" name="username" required/><br/><br/>
          <label for="password">Password:</label><br/>
          <input type="password" name="password" required/><br/><br/>
          <?php
          if (!empty($error)) {
              ?>
              <p id="login_form_error"><?php echo $error ?></p><br>
              <?php 
          }
          ?>
          <input type="submit" value="Login"/>
      </form>
    </body>
  </head>
</html>
