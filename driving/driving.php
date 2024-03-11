<a href="show.php"><button>show</button></a>
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
        <div class="col-md-12">
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-6 bg-danger"  style="url">
            
            
             <span class="text-light">firstname</span>
             <input type="text" class="form-control" name="firstname" > 
             <br><br>
             <span  class="text-light">lastname</span>
             <input type="text" class="form-control" name="lastname"><br><br>

             <span  class="text-light">fathername</span>
             <input type="text" class="form-control" name="fathername"> <br><br>

             <span  class="text-light">age</span>
             <input type="number" class="form-control" name="age"> <br><br>

             <span  class="text-light">gender</span> <br>
             <span>male</span>
             <input type="radio" value="male" name="gender"> <br> 
             <span>female</span> 
             <input type="radio" value="female" name="gender">  <br><br> 

             <span  class="text-light">mobilenumber</span>
             <input type="text" name="mobilenumber" class="form-control"> <br> <br>

             <span  class="text-light">address</span>
             <input type="text" name="address" class="form-control"> <br><br>

             <span  class="text-light">wheels</span> <br>
             <span>four wheels</span>
             <input type="radio" name="wheels"  value="four wheels"> <br>
             <span>two wheels</span>     
             <input type="radio" name="wheels"  value="two wheels"> <br>
             <span>both</span>
             <input type="radio" name="wheels"  value="both">
             <br><br>
             <button class="col-md-2 bg-black text-white" name="submited">submit</button>      

            </div>
        </div>
        </div>
    </form>
</body>
</html>

<?php

if(isset($_POST['submited'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $fathername=$_POST['fathername'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $mobilenumber=$_POST['mobilenumber'];
    $address=$_POST['address'];
    $wheels=$_POST['wheels'];

    $sql="INSERT INTO `driving`(`firstname`,`lastname`,`fathername`,`age`,`gender`,`mobilenumber`,`address`,`wheel`) VALUES ('$firstname','$lastname','$fathername','$age','$gender','$mobilenumber','$address','$wheels')";
   $result=mysqli_query($con,$sql);

   if($result){
    echo"datasubmited";
   }
   else{
    echo"error";
   }

}

$sql="SELECT * FROM `driving` WHERE 1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){

echo $row['id'];
echo $row['firstname'];
echo $row ['lastname'];
echo $row['fathername'];
echo $row['age'];
echo $row['gender'];
echo $row['mobilenumber'];
echo $row['address'];
echo $row['wheel'];
echo "<br>";

}

?>


