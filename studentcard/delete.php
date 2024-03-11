    <?php
$servername="localhost";
$username="root";
$password="";
$datbasname="studentcard";

$con=mysqli_connect($servername,$username,$password,$datbasname);

if($con){

    echo"<script>alert('success')</script>";
}
else{

    echo"<script>alert('error')</script>";
}





$id=$_GET['id'];

$sql="DELETE FROM `studentcard` WHERE `id`='$id'";

$result=mysqli_query($con,$sql);

if($result){
    echo "<script>alert('data deleted')</script>";
    echo "<script>location.href='studentcard.php'</script>";
}
else{
    echo"<script>alert('error')</script>";
}



?>
