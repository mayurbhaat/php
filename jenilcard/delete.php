<?php

$servername="localhost";
$username="root";
$password="";
$databasename="student_card";


$con=mysqli_connect($servername,$username,$password,$databasename);


if($con){

    echo "connecion succesfully";
}
else{

    echo "error";
}  

$id=$_GET['id'];

$sql="DELETE FROM `card_activation` WHERE `id`='$id'";

$result=mysqli_query($con,$sql);

if($result){

    echo  "<script>alert('data deleted')</script>";
    echo "<script>location.href='studentrecode.php'</script>";
}
else{

    echo  "<script>alert('error')</script>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
   

<!-- The Modal -->
<div class="modal" id="delete<?php echo $row['id']?>">
  <div class="modal-dialog">
    <div class="modal-content">

     
      <!-- Modal body -->
      <div class="modal-body">

      <center><h5>Are you want to sure??</h5></center> 
h
<button class="btn btn-danger">Delete</button>

      </div>

    </div>
  </div>
</div>

</body>
</html>