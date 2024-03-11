<?php

$servename="localhost";
$username="root";
$password="";
$datbasname="studentlogin";

$con=mysqli_connect($servename,$username,$password,$datbasname);

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
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
<form method="post">

<span>fullname</span>
<input type="text" class="form-control" name="fullname";> 


<span>address</span>
<input type="text" class="form-control" name="address";> 


<span>mobilenumber</span>
<input type="text" class="form-control" name="mobilenumber";> 


<span>email</span>
<input type="email" class="form-control" name="email";>


<span>password</span>
<input type="password" class="form-control" name="password";> 

<button type="submit" name="submit">submit</button>
</form>

</body>
</html>

<?php
if(isset($_POST['submit'])){

    $fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $mobilenumber=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO `college`(`fullname`, `address`, `mobilenumber`, `email`, `password`) VALUES ('$fullname','$address','$mobilenumber','$email','$password')";  
    $result=mysqli_query($con,$sql);
    
   if($result){

    echo"<script>alert('data insert')</script>";
   
   } 
   else{
    echo"<script>alert('error')</script>";
   }




}




?>