<?php
  session_start();
  if($_SESSION['Lemail']==$_POST['email']){
    if($_SESSION['Lpassword']==$_POST['password']){
        header("Location: home.php");
    }
    else{
        header("Location: home.php");
    }
  }
  else{
    header("Location: login.php");
  }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>