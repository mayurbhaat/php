<?php

$servername="localhost";
$username="root";
$password="";
$databasename="student_card";


$con=mysqli_connect($servername,$username,$password,$databasename);


// if($con){

//     echo "connecion succesfully";
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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <title>Document</title>
</head>
<body>
    <center>
    <h1>student recode system</h1></center>




<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
+New card
  </button>
  
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
<!--         
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
   -->
        <!-- Modal body -->
        <div class="modal-body">
       
        <form method="POST" enctype="multipart/form-data">

        <input type="submit" name="submit">
       <center><h5>Add New Card</h5></center> 
       <div class="col-md-12">

       <div class="col-md-12">
       <div class="row">

       <div class="col-md-6">
        <span>StudentId.</span><br>
        <input type="text" name="studentid"  placeholder="enter 12-digit Student ld." class="col-md-12 form-control">

        <span>First Name</span><br>
        <input type="text" name="firstname"  placeholder="enter first name" class="col-md-12 form-control">

        <span>Father's Name</span><br>
        <input type="text" name="fathername"  placeholder="enter first name" class="col-md-12 form-control"> 

        <span style="color:skyblue">Email Id</span><br>
        <input type="email" name="emailid"  placeholder="enter emailid" class="col-md-12 form-control">

        <span>Gender</span><br>
<select class="col-md-12" name="gender"><option>choose...</option>
<option>male</option>
<option>female</option>
<option>other</option>
</select>

        </div>




        
       <div class="col-md-6">
        <span>Mobile No.</span><br>
        <input type="number" name="mobilenumber"  placeholder="enter 12-digit Mobile No." class="col-md-12 form-control">

        
        <span>Last Name</span><br>
        <input type="text" name="lastname"  placeholder="enter last name" class="col-md-12 form-control">

        <span>Mother's Name</span><br>
        <input type="text" name="mothername"  placeholder="enter last name" class="col-md-12 form-control">

        <span  style="color:skyblue">Aadhar No.</span><br>
        <input type="number" name="adharno"  placeholder="enter 12-digit Adhar No." class="col-md-12 form-control">

        <span>Date of Birth</span><br>
        <input type="date" name="dateofbirth"  placeholder="enter 12-digit Adhar No." class="col-md-12 form-control">

        </div>


<span>Family Member's</span>
<textarea class="form-control" name="familymembers"></textarea>

<span>Village</span>
<input type="text" name="village"  placeholder="1234 main st" class="col-md-12 form-control">


<span>Police Station</span>
<input type="text" name="policestation"  placeholder="enter yout ps" class="col-md-12 form-control">


<div class="row">

<div class="col-md-6">
<span>District</span>
<input type="text" class="form-control" name="district">

</div>

   
<div class="col-md-6">
<span>Zip</span>
<input type="text" class="form-control" name="zip">

</div>

</div>


<span>Staff Id one who Activate this card.</span>
<input type="text" name="staffid"  placeholder="enter 12-digit staff id" class="col-md-12 form-control">


<span>image</span>
<input type="file" name="image"  placeholder="no file choose" class="col-md-12 form-control">


</form>

<?php

if(isset($_POST['submit'])){



    $studentid=$_POST['studentid'];
    $firstname=$_POST['firstname'];
    $mothername=$_POST['mothername'];
    $emailid=$_POST['emailid'];
    $gender=$_POST['gender'];


    
    $mobilenumber=$_POST['mobilenumber'];
    $lastname=$_POST['lastname'];
    $fathername=$_POST['fathername'];
    $adharno=$_POST['adharno'];
    $dateofbirth=$_POST['dateofbirth'];


    $familymembers=$_POST['familymembers'];
    $village=$_POST['village'];
    $policestation=$_POST['policestation'];
    $district=$_POST['district'];
    $zip=$_POST['zip'];
    $staffid=$_POST['staffid'];
    $img=$_FILES['image']['name'];





$sql="INSERT INTO `card_activation`(`u_card`, `u_f_name`, `u_l_name`, `u_father`, `u_aadhar`, `u_birthday`, `u_gender`, `u_email`, `u_phone`, `u_dist`, `u_village`, `u_police`, `u_pincode`,  `u_mother`, `u_family`, `staff_id`, `image`) VALUES ('$studentid','$firstname','$lastname','$fathername','$adharno','$dateofbirth','$gender','$emailid','$mobilenumber','$district','$village','$policestation','$zip','$mothername','$familymembers','$staffid','$img')";
$result=mysqli_query($con,$sql);
if($result){



    echo "<script>alert('data submited')</script>";
    echo "<script>location.href='studentrecode.php'</script>";


}else{
    echo "error";
}

$target="img/";
$fname=$target.basename($_FILES['image']['name']);
$move=move_uploaded_file($_FILES['image']['tmp_name'],$fname);
}

?>

        </div>
        </div>
        </div>
        </div>




      </div>
    </div>
  </div>





  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <title>Document</title>
</head>
<body>
  

<div class="container mt-3">
  
<table id="table_id" class="table table-striped table-bordered" style="width:100%">
<thead>
      <tr>
        
        <th>id</th>

        <th>name</th>
        <th>student id</th>
        <th>phone</th>
        <th>staff id</th>
        <th>view</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
</thead>
 <?php


$sql="SELECT * FROM `card_activation` WHERE 1";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){




 ?>


<tbody>
<tr>

<td><?php echo $row['id'] ?></td>
<td><?php echo $row['u_f_name'] ?><?php echo $row['u_l_name']?></td>
<td><?php echo $row['u_card'] ?></td>
<td><?php echo $row['u_phone'] ?></td>
<td><?php echo $row['staff_id'] ?></td>

<td><button data-bs-toggle="modal" data-bs-target="#show<?php echo $row['id']?>" class="btn btn-success"><i class="fa fa-id-card" aria-hidden="true" ></i></button></td>


<td><button data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id']?>" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>


<td>
  
<a href="delete.php?id=<?php echo $row['id'] ?>">
<button data-bs-toggle="modal" data-bs-target="#delete<?php echo $row['id']?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></button></td>


</tr>
</tbody>
<div class="modal" id="delete<?php echo $row['id']?>">
  <div class="modal-dialog">
    <div class="modal-content">

     
      <!-- Modal body -->
      <div class="modal-body">

      <center><h5>Are you want to sure??</h5></center> 
h
<button class="btn btn-danger">Delete</button>

      </div>

    </div>
  </div>
</div>



<!-- The Modal -->
<div class="modal" id="show<?php echo $row['id']?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
    

      <!-- Modal body -->
      <div class="modal-body">
<p>profile<i class="fa fa-user-circle-o" aria-hidden="true"></i></p>

      <hr>
<div class="col-md-12">
<div class=row>
<div class=col-md-5>

<h1><img src="img/<?php echo $row['image']?>" style="height:100px;width:100%"></h1>
<p><i class="fa fa-id-card" aria-hidden="true" ></i><?php echo $row['u_card'] ?></p>
<p><i class="fa fa-phone" aria-hidden="true"></i><?php echo $row['u_phone'] ?></p>
<p>issue date:<?php echo $row['u_birthday'] ?></p>
</div>

<div class="col-md-7">


<h2 style="color:skyblue"><?php echo $row['u_f_name'] ?><?php echo $row['u_f_name']?></h2>
<h6>S/O:<?php echo $row['u_father'] ?></h6>
<h6>M/O:<?php echo $row['u_mother'] ?></h6>
<h6>Adhar:<?php echo $row['u_aadhar'] ?></h6>

<h6><i class="fa fa-venus-mars" aria-hidden="true"></i><?php echo $row['u_gender'] ?></h6>
<h6><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $row['u_email'] ?></h6>
<h6><i class="fa fa-users" aria-hidden="true"></i>family:<?php echo $row['u_family'] ?></h6>
<h6>
<i class="fa fa-home" aria-hidden="true"></i>address:<?php echo $row['u_dist'] ?>,
<?php echo $row['u_village'] ?>,
<?php echo $row['u_pincode'] ?>

</h6>
</div>


</div>    
</div>








      </div>


    </div>
  </div>
</div>





  
  <!-- The Modal -->
  <div class="modal" id="edit<?php echo $row['id']?>">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
<!--         
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
   -->
        <!-- Modal body -->
        <div class="modal-body">



       
        <form method="POST" enctype="multipart/form-data">

        <input type="submit" name="submit">
       <center><h5>Add New Card</h5></center> 
       <div class="col-md-12">

       <div class="col-md-12">
       <div class="row">

       <div class="col-md-6">
        <span>StudentId.</span><br>
        <input type="text" name="studentid"  placeholder="enter 12-digit Student ld." class="col-md-12 form-control" value="<?php echo $row['u_card']?>">

        <span>First Name</span><br>
        <input type="text" name="firstname"  placeholder="enter first name" class="col-md-12 form-control" value="<?php echo $row['u_f_name']?>">

        <span>Father's Name</span><br>
        <input type="text" name="fathername"  placeholder="enter first name" class="col-md-12 form-control" value="<?php echo $row['u_father']?>"> 

        <span style="color:skyblue">Email Id</span><br>
        <input type="email" name="emailid"  placeholder="enter emailid" class="col-md-12 form-control" value="<?php echo $row['u_email']?>">

        <span>Gender</span><br>
<select class="col-md-12" name="gender" value="<?php echo $row['u_gender']?>"><option>choose...</option>
<option>male</option>
<option>female</option>
<option>other</option>
</select>

        </div>




        
       <div class="col-md-6">
        <span>Mobile No.</span><br>
        <input type="number" name="mobilenumber"  placeholder="enter 12-digit Mobile No." class="col-md-12 form-control" value="<?php echo $row['u_phone']?>">

        
        <span>Last Name</span><br>
        <input type="text" name="lastname"  placeholder="enter last name" class="col-md-12 form-control" value="<?php echo $row['u_l_name']?>">

        <span>Mother's Name</span><br>
        <input type="text" name="mothername"  placeholder="enter last name" class="col-md-12 form-control" value="<?php echo $row['u_mother']?>">

        <span  style="color:skyblue">Aadhar No.</span><br>
        <input type="number" name="adharno"  placeholder="enter 12-digit Adhar No." class="col-md-12 form-control" value="<?php echo $row['u_aadhar']?>">

        <span>Date of Birth</span><br>
        <input type="date" name="dateofbirth"  placeholder="enter 12-digit Adhar No." class="col-md-12 form-control"  value="<?php echo $row['u_birthday']?>">

        </div>


<span>Family Member's</span>
<textarea class="form-control" name="familymembers"  value="<?php echo $row['u_family']?>"></textarea>

<span>Village</span>
<input type="text" name="village"  placeholder="1234 main st" class="col-md-12 form-control"  value="<?php echo $row['u_village']?>">


<span>Police Station</span>
<input type="text" name="policestation"  placeholder="enter yout ps" class="col-md-12 form-control" value="<?php echo $row['u_police']?>">


<div class="row">

<div class="col-md-6">
<span>District</span>
<input type="text" class="form-control" name="district" value="<?php echo $row['u_dist']?>">

</div>

   
<div class="col-md-6">
<span>Zip</span>
<input type="text" class="form-control" name="zip" value="<?php echo $row['u_pincode']?>">

</div>

</div>


<span>Staff Id one who Activate this card.</span>
<input type="text" name="staffid"  placeholder="enter 12-digit staff id" class="col-md-12 form-control" value="<?php echo $row['staff_id']?>">


<span>image</span>
<input type="file" name="image"  placeholder="no file choose" class="col-md-12 form-control" value="<?php echo $row['image']?>">


</form>

<?php

if(isset($_POST['submit'])){



    $studentid=$_POST['studentid'];
    $firstname=$_POST['firstname'];
    $mothername=$_POST['mothername'];
    $emailid=$_POST['emailid'];
    $gender=$_POST['gender'];


    
    $mobilenumber=$_POST['mobilenumber'];
    $lastname=$_POST['lastname'];
    $fathername=$_POST['fathername'];
    $adharno=$_POST['adharno'];
    $dateofbirth=$_POST['dateofbirth'];


    $familymembers=$_POST['familymembers'];
    $village=$_POST['village'];
    $policestation=$_POST['policestation'];
    $district=$_POST['district'];
    $zip=$_POST['zip'];
    $staffid=$_POST['staffid'];
    $img=$_FILES['image']['name'];



$id=$_GET['id'];

$sql="UPDATE `card_activation` SET `u_card`='$studentid',`u_f_name`='$firstname',`u_l_name`='$lastname',`u_father`='$fathername',`u_aadhar`='$adharno',`u_birthday`='$dateofbirth',`u_gender`='$gender',`u_email`='$emailid',`u_phone`='$mobilenumber',`u_dist`='$district',`u_village`='$village',`u_police`='$policestation',`u_pincode`='$zip',`u_mother`='$mothername',`u_family`='$familymembers',`staff_id`='$staffid',`image`='$img' WHERE `id`='$id'";
$result=mysqli_query($con,$sql);
if($result){



    echo "<script>alert('data submited')</script>";


}else{
    echo "error";
}

$target="img/";
$fname=$target.basename($_FILES['image']['name']);
$move=move_uploaded_file($_FILES['image']['tmp_name'],$fname);
}

?>

        </div>
        </div>
        </div>
        </div>



<?php
}
?>


</table>







      </div>
    </div>
  </div>


</div>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script>$(document).ready( function () {
    $('#table_id').DataTable();
} );</script>

</body>
</html>













