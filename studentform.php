    <? php
$servername="localhost";
$username="root";
$password="";
$databasename="mayurphp";

$con=mysqli_connect($servername,$username,$password,$databasename);

if($con){
    echo"contection sucessful";
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
    <form method="post">
        <div class="col-md-4">
            <div class="row">
            <span>firstname</span>
            <input type="text" name="firstname" class="form-control">
            <br>   
            <span>lastname</span>
            <input type="text" name="lastname" class="form-control">
            <br> 
            <span>rollnumber</span>
            <input type="text" name="rollnumber" class="form-control">
            <br>
            <span>gender</span>
            <input type="text" name="gender" class="form-control">
            <br>      
            <span>fees</span>
            <input type="text" name="fees" class="form-control">
            <br>
            <span>schoolname</span>
            <input type="text" name="schoolname" class="form-control">
            <br>        
            <span>joindate</span>
            <input type="text" name="joindate" class="form-control">
            <br>   
            <button class="col-md-2 bg-black text-light" name="submit">submit</button>

            </div>
        </div>
    </form>

    <?php
    if(isset($_POST['submit'])){
    
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $rollnumber=$_POST['rollnumber'];
        $gender=$_POST['gender'];
        $fees=$_POST['fees'];
        $schoolname=$_POST['schoolname'];
        $joindate=$_POST['joindate'];
        $sql="INSERT INTO `studentform`(`firstname`, `lastname`, `rollnumber`, `gender`, `fess`, `schoolname`, `joindate`) VALUES ('$firstname','$lastname','$rollnumber','$gender','$fees','$schoolname','$joindate')";

        $result=mysqli_query($con,$sql);
        if($result){
            echo"data submited";  
       }
       else{
        echo"error";
       } 
    }


    ?>
    
</body>
</html>