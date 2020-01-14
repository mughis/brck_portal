<?php
require "db_conn.php"
?>

<!DOCTYPE html>
<html>
<head>
  <title>BRC Portal</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #7f8c8d">
  <div id="login-wrapper">
    <center>
      <h1>BRC Portal</h1>
      <h2>Login Form</h2>
      <img src="images/logo.png" class="avatar">
    </center>
    <form class="myform" action="index.php" method="post">
    <label>Username:</label><br>
    <input type="text" class="inputvalues" placeholder="Username"><br>
    <label>Password:</label><br>
    <input type="password" class="inputvalues" placeholder="Password"><br>
    <input type="submit" id="login_btn" value="Login">
    </form>
  </div>

</body>
</html>