<?php
include 'admin/coon.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-white navbar-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="logo@2x-free-img-120x40.png" alt="" style="background-color: white;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#" style="font-size: 20px;">evreything</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="font-size: 20px;">women</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="font-size: 20px;">men</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="font-size: 20px;">accessories</a>
        </li>

         
        <div class="col-md-10"></div>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="font-size: 20px;">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="font-size: 20px;">contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="font-size: 20px;"> <b> $0.00</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="font-size: 20px;"> <i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="font-size: 20px;"> <i class="fa fa-user" aria-hidden="true"></i></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">

  <div class="row">


  <?php
                
                $sql="SELECT `id`, `image`, `pname`, `pcat`, `dprice`, `price` FROM `product` WHERE 1";

                $result=mysqli_query($con,$sql);

                while($row=mysqli_fetch_array($result)){
                    ?>

    <div class="col-md-4">
     
      <img src="admin/img/<?php echo $row['image']?>" alt="" style="height: 300px;width:80%;">
      <h5><?php echo $row['pname']?></h5>
      <h6><?php echo $row['pcat']?></h6>
      <p>$<?php echo $row['dprice']?>.00-$<?php echo $row['price']?>.00</p>
    </div>


<?php
                }
?>
   
  </div>
</div>
    
</body>
</html>