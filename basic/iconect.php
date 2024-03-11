<?php
$servername="localhost";
$username="root";
$password="";
$databasename="mayurphp";

$con=mysqli_connect($servername,$username,$password,$databasename);

if($con){
    echo"contection sucessful";
}
else{
    echo"error";
}
?>