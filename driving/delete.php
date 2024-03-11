<?php

$servername="localhost";
$username="root";
$password="";
$databasname="mayurphp";

$con=mysqli_connect($servername,$username,$password,$databasname);

if($con){
    echo"connection sucessfully";
}
else{
    echo"error";
}

$id=$_GET['id'];

$sql="DELETE FROM `driving` WHERE `id`='$id'";
$result=mysqli_query($con,$sql);

if($result){
    echo"<script>alert('data deleted')</script>";
    echo"<script>location.href='show.php'</script>";
}
else{
    echo"error";
}

?>