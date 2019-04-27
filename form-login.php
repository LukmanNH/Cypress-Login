<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css\style-login.css">
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Sign In</h1>
		<form class="form" method="POST" action="#">
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required>
			<button type="submit" id="login-button">Sign In</button>
		</form>
    </div>
</div>
</body>
</html>

<?php

include './connect.php';

if(isset($_POST['username'])){
  
  $uname=$_POST['username'];
  $password=$_POST['password'];
  
  $sql="select * from user where username='".$uname."'AND password='".$password."' limit 1";
  
  $result=mysql_query($sql);
  
  if(!$result || mysql_num_rows($result) <= 0){
      echo '<script language="javascript">';
      echo 'alert("Error logging in username or password does not match")';
      echo '</script>';
  } else{
	header("location:home.php");
  }
}
?>