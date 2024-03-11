<a href="driving.php"><button>insert</button></a>


<?php
$servername="localhost";
$username="root";
$password="";
$databasname="mayurphp";

$con=mysqli_connect($servername,$username,$password,$databasname);

// if($con){
//     echo"connection sucessfully";
// }
// else{
//     echo"error";
// }

// $sql="SELECT * FROM `driving` WHERE 1";
// $result=mysqli_query($con,$sql);
// while($row=mysqli_fetch_array($result)){

//     echo $row['id'];
//     echo $row['firstname'];
//     echo $row['lastname'];
//     echo $row['fathername'];
//     echo $row['age'];
//     echo $row['gender'];
//     echo $row['mobilenumber'];
//     echo $row['address'];
//     echo $row['wheel'];
//     echo "<br>";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <tr>
          <th>id</th>
          <th>firstname</th>
          <th>lastname</th>
          <th>fathername</th>
          <th>age</th>
          <th>gender</th>
          <th>mobile number</th> 
          <th>address</th>
          <th>wheel</th> 
         
        </tr>

<?php
$sql="SELECT * FROM `driving` WHERE 1";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))

{
?>

        <tr>
            <th><?php echo $row['id'] ?></th>
            <th><?php echo $row['firstname']?></th>
            <th><?php echo $row['lastname'] ?></th>
            <th><?php echo $row['fathername']?></th>
            <th><?php echo $row['age']?></th>
            <th><?php echo $row['gender']?></th>
            <th><?php echo $row['mobilenumber'] ?></th>
            <th><?php echo $row['address'] ?></th>
            <th><?php echo $row ['wheel']?></th>
            <th><a href="delete.php?id=<?php echo $row['id'] ?>"><button>delete</button></a></th>
        </tr>


<?php
}
?>
    </table>
</body>
</html>