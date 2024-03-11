
<?php
$servername="localhost";
$username="root";
$password="";
$datbasname="sign up";

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
<form method="post" enctype="multipart/form-data">

                      
<span>full name</span>
<input type="text" name="fullname"> <br><br>


<span>mobilenumber</span>
<input type="number" name="mobilenumber"> <br><br>
    
<span>gender</span>
<span>male</span>
<input type="radio" name="gender" value="male"> <br><br>
<span>female</span>
<input type="radio" name="gender" value="female"> <br><br>

   
<span>age</span>
<input type="number" name="age"> <br><br>


<span>emailid</span>
<input type="email" name="emailid"> <br><br>

<span>password</span>
<input type="password" name="password"> <br><br>



 
<button type="submit" name="submit">submit</button> 
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){

 $f1=$_POST['fullname'];      
 $f2=$_POST['mobilenumber'];      
 $f3=$_POST['gender'];      
 $f4=$_POST['age'];      
 $f5=$_POST['emailid'];      
 $f6=$_POST['password'];      

$sql="INSERT INTO `sign up`(`full name`, `mobile number`, `gender`, `age`, `emailid`,`password`) VALUES ('$f1','$f2','$f3','$f4','$f5','$f6')";
$result=mysqli_query($con,$sql);

if($result){
    echo"<script>alert('success')</script>";
 } 
 else{
    echo"<script>alert('error')</script>";
 }
}
?>