<?php
$servername="localhost";
$username="root";
$password="";
$datbasname="amzone";

$con=mysqli_connect($servername,$username,$password,$datbasname);

if($con){
    echo"<script>alert('success')</script>";
} 
else{
    echo"<script>alert('error')</script>";
}
?>

<?php

$id=$_GET['id'];
$sql="DELETE FROM `product` WHERE `id`='$id'";
$result=mysqli_query($con,$sql);

if($result){
    echo"<script>alert('data delete')</script>";
    echo"<script>location.href='show.php'</script>";
}
else{
    echo"<script>alert('error')</script>";
}




?>