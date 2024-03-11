<a href="show.php"><button>insert</button></a>


<?php
$servername="localhost";
$username="root";
$password="";
$datbasname="factory";

$con=mysqli_connect($servername,$username,$password,$datbasname);
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
   <div class="col-md-12">
    <div class="col-md-4"></div>
    <div class="col-md-6">
    <form method="post">

        <span>cakename</span>
        <input type="text" name="cakename" class="form-control"> <br><br>
        <span>cakeprice</span>
        <input type="number" name="cakeprice" class="form-control"> <br><br>
        <span>cakestock</span>
        <input type="number" name="cakestock" class="form-control"> <br><br>
        <span>veg-nonveg</span> <br>
        <span>veg</span>
        <input type="radio" name="veg-nonveg" value="veg">
        <span>nonveg</span>
        <input type="radio" name="veg-nonveg" value="nonveg">
        <br><br>
        <button class="col-md-2 bg-primary"   name="update">update</button>


    </form>
    </div>
   </div>
    
    
</body>
</html>

<?php
if(isset($_POST['update'])){
    $c1=$_POST['cakename'];
    $c2=$_POST['cakeprice'];
    $c3=$_POST['cakestock'];
    $c4=$_POST['veg-nonveg'];

    $sql="INSERT INTO `cake`(`cakename`, `cakeprice`, `cakestock`, `veg-nonveg`) VALUES ('$c1','$c2','$c3','$c4')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"<script>alert('datasubmited')</script>";
    }
    else{
       echo"error";
    }

}



?>
