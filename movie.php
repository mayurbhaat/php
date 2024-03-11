<button class="btn btn-light"><a href="show.php">SHOW</a></button>


<?php
$servername="localhost";
$username="root";
$password="";
$databasename="movie";

$con=mysqli_connect($servername,$username,$password,$databasename);
// if($con)
// {
//     echo "connection succesfylly";
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
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form method="post">
                    <span>movie_name</span>
                    <input type="text" class="form-control" name="mn">
                    <span>hero_name</span>
                    <input type="text" class="form-control" name="he">
                    <span>heroin_name</span>
                    <input type="text" class="form-control" name="she">
                    <span>budget</span>
                    <input type="number" class="form-control" name="budget">
                    <span>rating</span><br>
                    <input type="radio"name="rating" value="1">1
                    <input type="radio"name="rating" value="2">2
                    <input type="radio"name="rating" value="3">3
                    <input type="radio"name="rating" value="4">4
                    <input type="radio"name="rating" value="5">5 
                    <br> 
                    <button class="btn btn-info" name="submit" type="submit">submit</button>
                </form>
              
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <?php
        if(isset($_POST['submit']))
        {
            $mn=$_POST['mn'];
            $hm=$_POST['he'];
            $he=$_POST['she'];
            $bgt=$_POST['budget'];
            $rt=$_POST['rating'];
            

        $sql="INSERT INTO `information`(`m_name`, `hero`, `heroin`, `budget`, `rating`) VALUES ('$mn','$hm','$he','$bgt','$rt')";
        $result=mysqli_query($con,$sql);

        if($result)
        {
            echo "data submitted";
        }
        else{
            echo "error";
        }

        }
    ?>

</body>
</html>