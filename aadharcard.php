<?php
$servername="localhost";
$username="root";
$password="";
$databasename="mayurphp";

$con=mysqli_connect($servername,$username,$password,$databasename);

 if($con){
   echo"connection sucessfully";
}
 else{
    echo"error";
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
        <div class="col-md-4">
            <div class="row">
        <span>name</span>
       <input type="text" name="name" class="form-control">
       <br>
       <span>gender</span>
       <input type="text" name="gender" class="form-control">
       <br>
       <br>
       <span>data of birth</span>
       <input type="text" name="dataofbirth" class="form-control">
       <br>
       <span>address</span>
       <input type="text" name="address" class="form-control">
       <br>
       <span>aadharid</span>
       <input type="text" name="aadharid" class="form-control">
       <br>
       <span>mobilenumber</span>
       <input type="number" name="mobilenumber" class="form-control">
       <br>
       <button class="col-md-2 bg-black text-light" name="submit">submit</button>

    </div>
   </div> 
    </form>
     <?php

     if(isset($_POST['submit'])){

        $fn=$_POST['name'];
        $i=$_POST['gender'];
        $j=$_POST['dataofbirth'];
        $m=$_POST['address'];
        $l=$_POST['aadharid'];
        $o=$_POST['mobilenumber'];
        $sql="INSERT INTO `aadharcard`(`name`, `xnder`, `date of birth`, `address`, `aadharid`, `mobile number`) VALUES ('$fn','$i','$j','$m','$l','$o')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo"datasubmited";
        }
        else{
            echo"error";
        }
     }

     $sql="SELECT * FROM `aadharcard` WHERE 1";
     $result=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($result)){

     echo $row['name'];
     echo $row['xnder'];
     echo $row['date of birth'];
     echo $row['address'];
     echo $row['aadharid'];
     echo $row['mobile number'];
     echo "<br>";



     }
     ?> 

    
</body>
</html>