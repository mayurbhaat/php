<a href="insert.php">insert</a>
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

    <table>
        <tr>
            <th>name</th>
            <th>price</th>
            <th>product</th>
            <th>delete</th>

        </tr>
<?php

 $sql="SELECT `id`, `pname`, `pprice`, `pphoto` FROM `product` WHERE 1";
 $result=mysqli_query($con,$sql); 

 while($row=mysqli_fetch_array($result)){
?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['pname']?></td>
            <td><?php echo $row['pprice']?></td>
            <td><?php echo $row['product']?></td>
            <td> <img src="img/<?php echo $row['pphoto']?>" alt="" style="height:100px;width: 100%;"></td>
            <td><a href="delete.php?id=<?php  echo $row['id']?>"><button>delete</button></a></td>
            <td><a href="update.php?id=<?php  echo $row['id']?>"><button>update</button></a></td>
        </tr>

 <?php
 }
 ?>       
    </table>
    
</body>
</html>