<?php

include 'coon.php';

if(!isset($_SESSION['signin'])){
    echo "<script>location.href='signin.php'</script>";
}



$id=$_GET['id'];

$sql="DELETE FROM `product` WHERE `id`='$id'";

$result=mysqli_query($con,$sql);

if($result){
    echo "<script>alert('data deleted')</script>";
    echo "<script>location.href='showproduct.php'</script>";
}
else{
    echo"<script>alert('error')</script>";
}



?>