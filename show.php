<?php
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="movie";

    $con=mysqli_connect($servername,$username,$password,$databasename);
    // if($con)
    // {
    //     echo "connection succesfully";
    // }
    // else{
    //     echo "error";
    // }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<table class="table">
    
      <tr>
        <th>id</th>
        <th>movie_name</th>
        <th>hero_name</th>
        <th>heroin_name</th>
        <th>budget</th>
        <th>rating</th>
      </tr>
    <?php
      $sql="SELECT `id`, `m_name`, `hero`, `heroin`, `budget`, `rating` FROM `information` WHERE 1";
    $result=mysqli_query($con,$sql);

    while($row=mysqli_fetch_array($result))
    {   

 ?>
        

    
    
      <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['m_name']?></td>
        <td><?php echo $row['hero']?></td>
        <td><?php echo $row['heroin']?></td>
        <td><?php echo $row['budget']?></td>
        <td><?php echo $row['rating']?></td>
        <td><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">delete</a></td>


      </tr>
      <?php
      }
      ?>
      
      
    
  </table>
  <button class="btn btn-light"><a href="movie.php">INSERT</a></button>
    
</body>
</html>