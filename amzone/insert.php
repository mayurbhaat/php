<a href="show   .php">show</a>
<?php
$servername="localhost";
$username="root";
$password="";
$datbasname="amzone";

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

                      
    <span>name</span>
    <input type="text" name="name"> <br><br>
    
    
    <span>price</span>
    <input type="number" name="price"> <br><br>

    
    <span>product</span>
    <input type="file" name="product"> <br><br>
    <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>
    
<?php
 if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $price=$_POST['price'];
    $product=$_FILES['product']['name'];

 $sql="INSERT INTO `product`(`pname`, `pprice`, `pphoto`) VALUES ('$name','$price','$product')"; 
 $result=mysqli_query($con,$sql);
 
 if($result){
    echo"<script>alert('success')</script>";
 } 
 else{
    echo"<script>alert('error')</script>";
 }

 $target="img/";
 $fname=$target.basename($_FILES['product']['name']);
 $move=move_uploaded_file($_FILES['product']['tmp_name'],$fṇname);
 }

?>