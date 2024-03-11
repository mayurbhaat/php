<?php
$servername="localhost";
$username="root";
$password="";
$databasename="mayurphp";

$con=mysqli_connect($servername,$username,$password,$databasename);

// if($con){
//     echo"connection sucessfully;"
// }
// else{
//     echo"error";
// }

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
       <div class="col-md-12">
        <div class="row">
            
            <span >full name</span>
            <input type="text" placeholder="full name" class="form-control" name="fullname">

            <span>mobile number</span>
            <input type="number" placeholder="mobile" class="form-control" name="mobilenumber">

            <span>email id</span>
            <input type="text" placeholder="email id" class="form-control" name="emailid">

            <span>password</span>
            <input type="password" placeholder="password" class="form-control" name="password">
            <br><br>

            <button class="col-md-2 bg-black text-light" name="submit">submit</button>
        </div>
       </div> 
    </form>
    
</body>
</html>