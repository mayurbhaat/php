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

 
<span>emailid</span>
<input type="email" name="emailid" class="form-control"> <br><br>

                      
<span>password</span>
<input type="password" name="password" class="form-control"> <br><br>
 
<button type="submit" name="submit">submit</button> 
    </form>




<?php

if(isset($_POST['submit'])){

$email=$_POST['emilid'];
$password=$_POST['password'];

$sql="SELECT * FROM `newlogin` WHERE  `emailid`='$email' and `password`= '$password'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);

if($num==1){
    echo"<script>alert('success')</script>";
    echo"<script>location.href='welcome.php'</script>";
}
else{
    echo"<script>alert('error')</script>"; 
}
}
?>

    
</body>
</html>