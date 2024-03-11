<?php
session_start();

if(!isset($_SESSION['login']) or $_SESSION['login']!=true ) 
{
 echo"<script>location.href='login.php'</script>";


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
    <h1>welcome</h1>

    <a href="logout.php">logout</a>
</body>
</html>