<?php
$servername="localhost";
$username="root";
$password="";
$datbasname="studentmail";

$con=mysqli_connect($servername,$username,$password,$datbasname);

if($con){

    echo"<script>alert('success')</script>";
}
else{

    echo"<script>alert('error')</script>";
}


$id=$_GET['id'];

$sql="DELETE FROM `studentmail` WHERE `id`='$id'";

$result=mysqli_query($con,$sql);

if($result){

   echo"<script>alert('data deleted')</script>";
   echo"<script>location.href='insert.php'</script>";

}
else{
    echo"<script>alert('error')</script>";
}
?>