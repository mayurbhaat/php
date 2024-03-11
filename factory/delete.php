<?php
$servername="localhost";
$username="root";
$password="";
$datbasname="factory";

$con=mysqli_connect($servername,$username,$password,$datbasname);
if($con){
    echo"connection sucessfully";
}
else{
    echo"error";
}

$id=$_GET['id'];
$sql="DELETE FROM `cake` WHERE `id`='$id'";
$result=mysqli_query($con,$sql);
if($result){
    echo"<script>alert('datadelete')</script>";
    echo"<script>location. href='show.php'</script>";
}
else{
    echo"error";
}

?>