<?php

$servername="localhost";
$username="root";
$password="";
$datdbasname="mayurphp/";

$con=mysqli_connect($servername,$username,$password,$datdbasname);

if($con){
    echo"connection sucessfully";
}
else{
    echo"error";
}
?>