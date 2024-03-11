<?php

$servername="localhost";
$username="root";
$password="";
$datbasname="newlogin";

$con=mysqli_connect($servername,$username,$password,$datbasname);

if($con){
    echo"<script>alert('success')</script>";
} 
else{
    echo"<script>alert('error')</script>";
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

<form method="post">
  <span>fullname</span>
  <input type="text" class="form-control" name="fullname"> <br> <br>

  <span>age</span>
  <input type="number" class="form-control" name="age"> <br> <br>

  
  <span>emailid</span>
  <input type="email" class="form-control" name="emailid"> <br> <br>

  
  <span>password</span>
  <input type="password" class="form-control" name="password"> <br> <br>

  
  <span>mobilenumber</span>
  <input type="number" class="form-control" name="mobilenumber"> <br> <br>

  <button type="submit" class="submit">submit</button>

</form>
    
</body>
</html>

<?php
if(isset($_POST['submit'])){
    
    $f1=$_POST['fullname'];
    $f2=$_POST['age'];
    $f3=$_POST['emilid'];
    $f4=$_POST['password'];
    $f5=$_POST['mobilenumber'];


  
 

    $sql="INSERT INTO `newlogin`(`fullname`, `age`, `emailid`, `password`, `mobilenumber`) VALUES ('$f1','$f2','$f3','$f4','$f5')"; 
    $result=mysqli_query($con,$sql);
    
    if($result){
        echo"<script>alert('success')</script>";
     } 
     else{
        echo"<script>alert('error')</script>";
     }
}



?>