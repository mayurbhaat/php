<!-- <?php 
$servername="localhost";
$username="root";
$password="";
$datbasname="studentmail";

$con=mysqli_connect($servername,$username,$password,$datbasname);

if($con){
    echo"<script>alert('success')</script>";
}
else{

    echo"<script>alert('error')</script>";
}



?> -->

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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

 
<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">add new cart</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="Post">
            
        <div class="row">
           
            <div class="col-md-6 m-0">
         <span>studentid</span>
         <input type="number" placeholder="enter 12- digit"  name="studentid">
         
         <span>firstname</span>
         <input type="text" name="firstname">
         
         <span>fathername</span>
         <input type="text" name="fathername">
         
         <span>Email id</span>
         <input type="text" name="email">
         <br>
         <span>gender</span>
         <select name="gender" class="col-md-10">
            <option>male</option>
            <option>female</option>
            <option>other</option>
         </select>



            </div>

        <div class="col-md-6 m-0">
            <span>mobilenumber</span>
            <input type="number" name="mobilenumber">

            <span>lastname</span>
            <input type="text" name="lastname">

            <span>mothername</span>
            <input type="text" name="mothername">

            <span>Aadharno.</span>
            <input type="number" name="aadharno">

            <span>date of birth</span>
            <input type="date" name="dob">
        </div>

      
        <span ><b>family member</b></span> <br>
        <textarea name="family" class="col-md-12" style="height: 80px;"></textarea>

        <span><b>village</b></span>
        <input type="text" name="village" class="col-md-6">
         
        <span><b>police station</b></span>
        <input type="text" name="police">



        
   
            
            
       
        </div>
        <br>
        
        <div class="col-md-12">
        <div class="row">
           
                <div class="col-md-6">
        <span><b>district</b></span>
        <input type="text" name="district" >
    </div>
         <div class="col-md-6">
        <span><b>zip</b></span> <br>
        <input type="number" name="zip">
    </div>
    </div>
    </div>
        
    <div class="row">
      <div class="col-md-12">staff id</div>
      <input type="text" name="staffid">
    </div>

    <div class="row">
      <div class="col-md-12">
        <span><b>image</b></span><br>
        <input type="file" name="image" class="form-control">
      </div>
    </div>
       
    <button class="btn btn-info btn-large col-md-3" name="submit" >submit</button>


        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<?php
if(isset($_POST['submit'])){

$studentid=$_POST['studentid'];
$firstname=$_POST['firstname'];
$fathername=$_POST['fathername'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$mobilenumber=$_POST['mobilenumber'];
$lastname=$_POST['lastname'];
$mothername=$_POST['mothername'];
$aadharno=$_POST['aadharno'];
$dob=$_POST['dob'];
$family=$_POST['family'];
$village=$_POST['village'];
$police=$_POST['police'];
$district=$_POST['district'];
$zip=$_POST['zip'];
$staffid=$_POST['staffid'];
$image=$_FILES['img']['name'];

$sql="INSERT INTO `studentmail`(`studentid`, `mobilenumber`, `firstname`, `lastname`, `fathername`, `mothrename`, `email`, `aadharno`, `gender`, `dob`, `family`, `village`, `police`, `district`, `zip`, `staffid`, `image`) VALUES ('$studentid','$mobilenumber','$firstname','$lastname','$fathername','$mothername','$email','$aadharno','$gender','$dob','$family','$village','$police','$district','$zip','$staffid','$image')";

$result=mysqli_query($con,$sql);

if($result){
  echo"<script>alert('data submit')</script>";
  echo"<script>location.href='insert.php'</script>";
}
else{
  echo"<script>alert('error')<script>";
}

$target="img/";
$fname=$target.basename($_FILES['img']['name']);
$move=move_uploaded_file($_FILES['img']['tmp_name'],$fname);




}
?>




<!-- show page -->

<table class="table">

<tr>
   <th>S.L</th>
   <th>name</th>
   <th>studentid</th>
   <th>phone</th>
   <th>staffid</th>
   <th>view</th>
   <th>edit</th>
   <th>delete</th>

</tr>

<?php

$sql="SELECT `id`, `studentid`, `mobilenumber`, `firstname`, `lastname`, `fathername`, `mothrename`, `email`, `aadharno`, `gender`, `dob`, `family`, `village`, `police`, `district`, `zip`, `staffid`, `image` FROM `studentmail` WHERE 1";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){
  ?>
  <tr>
  <td><?php echo $row['id']?></td>
  <td><?php echo $row['firstname']?>  <?php echo $row['lastname']?></td>
  <td><?php echo $row['studentid']?></td>
  <td><?php echo $row['mobilenumber']?></td>
  <td><?php echo $row['staffid']?></td>

  <td><button style="background-color:green;color:white;border:none;font-size:20px" data-bs-toggle="modal" data-bs-target="#view<?php echo $row['id']?>"><i class="fa fa-id-card" aria-hidden="true"></i></button></td>

  <td><button style="background-color:gold;color:white;border:none;font-size:20px"
    data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>

    <td>
    <a href="delete.php?id=<?php echo $row['id']?>"><button style="background-color:red;color:white;border:none;font-size:20px;"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
    
    
  
  
  </tr>





<!--------view page start  ------>


<!-- The Modal -->
<div class="modal" id="view<?php echo $row['id']?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
     


      <!-- Modal body -->
      <div class="modal-body">
    
      <h5><i class="fa fa-user-circle" aria-hidden="true">profile</i></h5>
         
      <hr>

      <div class="row">
        <div class="col-md-6">
            <img src="img/<?php echo $row['image']?>" style="height: 150px;width:100%;background-color:grey;" >

        <p><i class="fa fa-id-card" aria-hidden="true"></i><?php echo $row['studentid']?></p>
        <p><i class="fa fa-mobile" aria-hidden="true"></i><?php echo $row['mobilenumber']?></p>
        <p>issue date:<?php echo $row['dob']?></p>
        </div>

        <div class="col-md-6">
            <h4 style="color:blue";><?php echo $row['firstname']?><?php echo $row['lastname']?></h4>
            <br>
            <h6>S/O:<?php echo $row['fathername']?></h6>
            <h6>M/O:<?php echo $row['mothrename']?></h6>
            <h6>aadhar:<?php echo $row['aadharno']?></h6>
            <p><i class="fa fa-venus-mars" aria-hidden="true"></i><?php echo $row['gender']?></p>
            <p><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $row['email']?></p>

        </div>
      </div>

        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<!------------- edit page start ---------->



<!-- The Modal -->
<div class="modal" id="edit<?php echo $row['id']?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
          <h4 class="modal-title">add new card</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="Post" action="insert.php?id=<?php echo $row['id']?>" enctype="multipart/form-data">
            
        <div class="row">
           
            <div class="col-md-6 m-0">
         <span>studentid</span>
         <input type="number" placeholder="enter 12- digit"  name="studentid" value="<?php echo $row['studentid']?>">
         
         <span>firstname</span>
         <input type="text" name="firstname" value="<?php echo $row['firstname']?>">
         
         <span>fathername</span>
         <input type="text" name="fathername" value="<?php echo $row['fathername']?>">
         
         <span>Email id</span>
         <input type="text" name="email" value="<?php echo $row['email']?>">
         <br>
         <span>gender</span>
         <select name="gender" class="col-md-10" value="<?php echo $row['gender']?>">
            <option>male</option>
            <option>female</option>
            <option>other</option>
         </select>



            </div>

        <div class="col-md-6 m-0">
            <span>mobilenumber</span>
            <input type="number" name="mobilenumber" value="<?php echo $row['mobilenumber']?>">

            <span>lastname</span>
            <input type="text" name="lastname" value="<?php echo $row['lastname']?>">

            <span>mothername</span>
            <input type="text" name="mothername" value="<?php echo $row['mothrename']?>">

            <span>Aadharno.</span>
            <input type="number" name="aadharno"  value="<?php echo $row['aadharno']?>">

            <span>date of birth</span>
            <input type="date" name="dob"  value="<?php echo $row['dob']?>" >
        </div>

      
        <span ><b>family member</b></span> <br>
        <textarea name="family" class="col-md-12" style="height: 80px;" value="<?php echo $row['family']?>" ></textarea>

        <span><b>village</b></span>
        <input type="text" name="village" class="col-md-6" value="<?php echo $row['village']?>">
         
        <span><b>police station</b></span>
        <input type="text" name="police" value="<?php echo $row['police']?>" >



        
   
            
            
       
        </div>
        <br>
        
        <div class="col-md-12">
        <div class="row">
           
                <div class="col-md-6">
        <span><b>district</b></span>
        <input type="text" name="district"  value="<?php echo $row['district']?>">
    </div>
         <div class="col-md-6">
        <span><b>zip</b></span> <br>
        <input type="number" name="zip"  value="<?php echo $row['zip']?>">
    </div>
    </div>
    </div>
        
    <div class="row">
      <div class="col-md-12">staff id</div>
      <input type="text" name="staffid"  value="<?php echo $row['staffid']?>">
    </div>

    <div class="row">
      <div class="col-md-12">
        <span><b>image</b></span><br>
        <input type="file" name="img" class="form-control" value="<?php echo $row['image']?>">
      </div>
    </div>
       
    <button class="btn btn-info btn-large col-md-3" name="up1">submit</button>


        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
    


<?php
if(isset($_POST['up1'])){

  $studentid=$_POST['studentid'];
  $firstname=$_POST['firstname'];
  $fathername=$_POST['fathername'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $mobilenumber=$_POST['mobilenumber'];
  $lastname=$_POST['lastname'];
  $mothername=$_POST['mothername'];
  $aadharno=$_POST['aadharno'];
  $dob=$_POST['dob'];
  $family=$_POST['family'];
  $village=$_POST['village'];
  $police=$_POST['police'];
  $district=$_POST['district'];
  $zip=$_POST['zip'];
  $staffid=$_POST['staffid'];
  $image=$_FILES['img']['name']; 

 
  $id=$_GET['id'];

  $sql="UPDATE `studentmail` SET `studentid`='$studentid',`mobilenumber`='$mobilenumber',`firstname`='$firstname',`lastname`='$lastname',`fathername`='$fathername',`mothrename`='$fathername',`email`='$email',`aadharno`='$aadharno',`gender`='$gender',`dob`='$dob',`family`='$family',`village`='$village',`police`='$police',`district`='$district',`zip`='$zip',`staffid`='$staffid',`image`='$image' WHERE 1";

  $result=mysqli_query($con,$sql);

  if($result){
    echo "<script>alert('data submit')</script>";
    echo "<script>location.href='insert.php'</script>";
  }
  else{
    echo "<script>alert('error')</script>";
  }

  $target="img/";
  $fname=$target.basename($_FILES['img']['name']);
  $move=move_uploaded_file($_FILES['img']['tmp_name'],$fname);
}







?>




<?php  
}
?>

</table>

</body>
</html>