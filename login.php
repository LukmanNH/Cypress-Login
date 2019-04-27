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
      header("location:form-login.php");
  } else{
    echo '<script language="javascript">';
    echo 'alert("Loggin Success")';
    echo '</script>';
  }
}
?>