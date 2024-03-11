<a href="cake.php"><button>show</button></a>


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

<table class="table">
    <tr>
        <th>id</th>
        <th>cakename</th>
        <th>cakeprice</th>
        <th>cakestock</th>
        <th>veg-nonveg</th>
    </tr>

    <?php

$sql="SELECT `id`, `cakename`, `cakeprice`, `cakestock`, `veg-nonveg` FROM `cake` WHERE 1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){

?>

    <tr>
        <th><?php echo $row['id']  ?></th>
        <th><?php echo $row['cakename']?></th>
        <th><?php echo $row['cakeprice']?></th>
        <th><?php echo $row['cakestock']?></th>
        <th><?php echo $row['veg-nonveg']?></th>
        <th><a href="delete.php?id=<?php echo $row['id']  ?>"><button>delete</button></a></th>
    </tr>


    <?php
}
    ?>
</table>
    
</body>
</html>