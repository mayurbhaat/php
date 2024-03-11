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
<?php
 $sql="SELECT `id`, `pname`, `pprice`, `pphoto` FROM `product` `id`='$id'";
 $result=mysqli_query($con,$sql); 

 $row=mysqli_fetch_array($result)   
?>    

<form method="post" enctype="multipart/form-data">

                      
<span>name</span>
<input type="text" name="name" value="<?php echo $row['pname']?>"> <br><br>


<span>price</span>
<input type="number" name="price" value="<?php echo $row['pprice']?>" > <br><br>


<span>product</span>
<input type="file" name="product" value=""> <br><br>
<button type="submit" name="submit">submit</button>

<?php
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $price=$_POST['price'];
    $product=$_FILES['product']['name'];
    $id=$_GET['id'];

 $sql="UPDATE `product` SET `pname`='[$name]',`pprice`='[$price]',`pphoto`='[$product]' WHERE `id`='$id'"; 
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);  
 
 if($result){
    echo"<script>alert('success')</script>";
    echo"<script>location.href='show.php'</script>";
 } 
 else{
    echo"<script>alert('error')</script>";
    echo"<script>location.href='show.php'</script>";
 }

 $target="img/";
 $fname=$target.basename($_FILES['product']['name']);
 $move=move_uploaded_file($_FILES['product']['tmp_name'],$fname);
 
}
?>
</form>


</body>
</html>