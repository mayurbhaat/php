<?php

$servename="localhost";
$username="root";
$password="";
$datbasname="studentlogin";

$con=mysqli_connect($servename,$username,$password,$datbasname);
session_start();

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

 
<form method="post">
<span>email</span>
<input type="email" name="email" class="form-control"> <br><br>

<span>password</span>
<input type="password" name="password" class="form-control"><br><br>

<button type="submit" name="submit">submit</button>
</form>
<?php

if(isset($_POST['submit'])){


    $email=$_POST['email'];
    $password=$_POST['password'];

   $sql="SELECT * FROM `college` WHERE  `email`='$email' and `password`='$password'";
   $result=mysqli_query($con,$sql);

   $num=mysqli_num_rows($result);
   $_SESSION['login']=true;

   if($num==1)
   {
    echo"<script>alert('donnne')</script>";
    echo"<script>location.href='welcome.php'<script>";
   }
   else{
    echo"<script>alert('error')</script>";
   }
}




?>

    
</body>
</html>