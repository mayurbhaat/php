<?php
$server="localhost";
$user="root";
$pass="";
$dbname="db1";

$con=mysqli_connect($server,$user,$pass,$dbname);
session_start();

// if($con){
//     echo "<script>alert('connected')</script>";
// }
// else{
//     echo "<script>alert('error')</script>";

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
                <form method="POST">

                <span>email</span>
                <input type="text" name="email" class="form-control">

                <span>password</span>
                <input type="password" name="password" class="form-control">

                <button class="btn btn-primary" name="sub">SUBMIT</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>



<?php
if(isset($_POST['sub'])){
    
    $em=$_POST['email'];
    $pass=$_POST['password'];

    $sql="SELECT * FROM `data` WHERE `email`='$em' and `password`='$pass'";   
    $result=mysqli_query($con,$sql);

    $num=mysqli_num_rows($result);
    $_SESSION['login']=true;

    if($num==1)
    {
         echo "<script>alert('donnneee')</script>";
         echo "<script>location.href='welcome.php'</script>";

        
    }
    else{
            echo "<script>alert('error')</script>";

    }
}


?>