
<!-- 
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

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    
<div class="container mt-3">
 
    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
      +new card
    </button>
  </div>
  
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">add new card</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <form method="Post" enctype="multipart/form-data">
         <div class="row"> 
          <div class="col-md-6"> <span><b>studentid</b></span>
        <input type="number" placeholder="enter 12-digit studentid"  name="studentid"></div> 
        <div class="col-md-6">
          <span><b>mobile.no</b></span>
          <input type="number" placeholder="enter 10-digit mobile no." name="mobileno" >
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <span><b>First Name</b></span>
            <input type="text" placeholder="enter first name"  name="firstname">
          </div>
          <div class="col-md-6">
            <span><b>Last Name</b></span>
            <input type="text" placeholder="enter last name"  name="lastname">

          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <span><b>Father's Name</b></span>
            <input type="text" placeholder="enter father name" name="fathername">
          </div>
          <div class="col-md-6">
            <span><b>Mother's Name</b></span>
            <input type="text" placeholder="enter mother's name" name="mothername">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <span><b>Email Id</b></span>
            <input type="email" placeholder="enter email id" name="email">
          </div>
          <div class="col-md-6">
            <span><b>Aadhar No.</b></span>
            <input type="number" placeholder="enter 12-digitAadhar no." name="aadharno">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <span class="col-md-6"><b>Gender</b></span> <br>
            <select name="gender" class="col-md-10">
            <option>male</option>
            <option>female</option>
            <option>other</option></select>
       
          </div>
          <div class="col-md-6">
            <span class="col-md-6"><b>Date of Birth</b></span>
            <input type="date" name="dob" id="" class="col-md-10">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <p  class="m-0"><b>Family Member's </b></p>
            <textarea class="form-control" name="family"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p  class="m-0"><b>Village</b></p>
          <input type="text" placeholder="1234 main st" name="village">
          </div>
        </div>

      
          <div class="col-md-12">
            <p class="m-0"><b>Police Station</b></p>
          <input type="text" placeholder="Enter police Station" class="col-md-12 m-0" name="police">
          </div>
    
         
   
          <div class="row">
          <div class="col-md-6">
            <p  class="m-0"><b>District</b></p>
            <input type="text" name="district">
           </div>
           <div class="col-md-3 ">
            <p class="m-0"><b>zip</b></p>
            <input type="text" name="zip">
          </div>
          </div>

          <span  class="m-0"><b>Staff Id one who Activate this card.</b></span>
          <input type="text" placeholder="enter 12-digit staff id" class="col-md-12 m-0" name="staffid">
         
          <div class="row">
            <div class="col-md-12">
          <span><b>Image</b></span>
          <input type="file" class="form-control" name="img"></div>
        </div>
      
        
        <button class="btn btn-info btn-large col-md-3" name="submit" type="submit" >submit</button>
      </form> 
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">close</button>
        </div>
  
      </div>
    </div>
  </div>
  
  <?php

if(isset($_POST['submit'])){

$studentid=$_POST['studentid'];
$mobile=$_POST['mobileno'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$email=$_POST['email'];
$aadharno=$_POST['aadharno'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$family=$_POST['family'];
$village=$_POST['village'];
$police=$_POST['police'];
$district=$_POST['district'];
$zip=$_POST['zip'];
$staffid=$_POST['staffid'];
$img=$_FILES['img']['name'];

$sql="INSERT INTO `studentcard`(`studentid`, `mobileno`, `firstname`, `lastname`, `fathername`, `mothername`, `email`, `aadharno`, `gender`, `dob`, `family`, `village`, `police`, `district`, `zip`, `staffid`, `Image`) VALUES ('$studentid','$mobile','$firstname','$lastname','$fathername','$mothername','$email','$aadharno','$gender','$dob','$family','$village','$police','$district','$zip','$staffid','$img')";

$result=mysqli_query($con,$sql);

if($result){
  echo"<script>alert('data submit')</script>";
  echo"<script>location.href='studentcard.php'</script>";

}
else{
  echo"<script>alert('error')</script>";
}



$target="img/";
$fname=$target.basename($_FILES['img']['name']);
$move=move_uploaded_file($_FILES['img']['tmp_name'],$fname);

}

?>
   
   
   <table class="table">
    <tr>
        <th>S.L</th>
        <th>name</th>
        <th>student id.</th>
        <th>phone</th>
        <th>staff id</th>
        <th>view</th>
        <th>edit</th>
        <th>delete</th>
    </tr>

<?php

$sql="SELECT `id`, `studentid`, `mobileno`, `firstname`, `lastname`, `fathername`, `mothername`, `email`, `aadharno`, `gender`, `dob`, `family`, `village`, `police`, `district`, `zip`, `staffid`, `Image` FROM `studentcard` WHERE 1";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>
   
   <tr>
   <td><?php echo $row['id']?></td>
   <td><?php echo $row['firstname']?><?php echo $row['lastname']?></td>
   <td><?php echo $row['studentid']?></td>
   <td><?php echo $row['mobileno']?></td>
   <td><?php echo $row['staffid']?></td>

   <td><button style="background-color: green;color: white;border:none;font-size: 20px;border-radius: 5px;" data-bs-toggle="modal" data-bs-target="#view<?php echo $row['id']?>"> <i class="fa fa-id-card-o" aria-hidden="true" ></i></button></td>
   
   <td><button style="background-color:gold;color: black;border:none;font-size: 20px;border-radius: 5px;" 
   data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id']?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td> 

   <td><a href="delete.php?id=<?php echo $row['id']?>"><button  style="background-color: rgb(207, 31, 45);color: white;border:none;font-size: 20px;border-radius: 5px;"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>


   </tr>





<!-- The Modal -->
<div class="modal" id="view<?php echo $row['id']?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      

      <!-- Modal body -->
      <div class="modal-body">
        <h5>profile <i class="fa fa-user-circle-o" aria-hidden="true"></i></h5>
        
        <hr>
      
      <div class="row">
        <div class="col-md-6">
       <h1><img src="img/<?php echo $row['Image']?>"  style="height: 150px;width: 100%;background-color: gray;"></h1>
        <p><i class="fa fa-id-card" aria-hidden="true"></i><?php echo $row['studentid']?></p>
        <p><i class="fa fa-phone" aria-hidden="true"></i><?php echo $row['mobileno']?></p>
        <p>issue date:<?php echo $row['dob']?></p>
        </div>
        <div class="col-md-6">
          <h4 style="color: rgb(12, 84, 192);"><?php echo $row['firstname']?><?php echo $row['lastname']?></h4>
          <h6>S/O:<?php echo $row['fathername']?></h6>
          <h6>M/O:<?php echo $row['mothername']?></h6>
          <h6>Aadhar<?php echo $row['aadharno']?></h6>
          <p><i class="fa fa-venus-mars" aria-hidden="true"></i><?php echo $row['gender']?></p>
          <p><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $row['email']?></p>
          <p><i class="fa fa-users" aria-hidden="true"></i><?php echo $row['family']?></p>
          <p><i class="fa fa-home" aria-hidden="true"> address:</i><?php echo $row['village']?>,<?php echo $row['district']?>,<?php echo $row['zip']?></p>
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



          <form method="Post"action="studentcard.php?id=<?php echo $row['id']?>" enctype="multipart/form-data">
         <div class="row"> 
          <div class="col-md-6"> <span><b>studentid</b></span>
        <input type="number" placeholder="enter 12-digit studentid" type="studentid" name="studentid" value="<?php echo $row['studentid']?>" ></div> 
        <div class="col-md-6">
          <span><b>mobile.no</b></span>
          <input type="number" placeholder="enter 10-digit mobile no." name="mobileno" value="<?php echo $row['mobileno']?>">
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <span><b>First Name</b></span>
            <input type="text" placeholder="enter first name"  name="firstname" value="<?php echo $row['firstname']?>">
          </div>
          <div class="col-md-6">
            <span><b>Last Name</b></span>
            <input type="text" placeholder="enter last name"  name="lastname" value="<?php echo $row['lastname']?>">

          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <span><b>Father's Name</b></span>
            <input type="text" placeholder="enter father name" name="fathername" value="<?php echo $row['fathername']?>"  >
          </div>
          <div class="col-md-6">
            <span><b>Mother's Name</b></span>
            <input type="text" placeholder="enter mother's name" name="mothername" value="<?php echo $row['mothername']?>" >
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <span><b>Email Id</b></span>
            <input type="email" placeholder="enter email id" name="email" value="<?php echo $row['email']?>">
          </div>
          <div class="col-md-6">
            <span><b>Aadhar No.</b></span>
            <input type="number" placeholder="enter 12-digitAadhar no." name="aadharno" value="<?php echo $row['aadharno']?>" >
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <span class="col-md-6"><b>Gender</b></span> <br>
            <select name="gender" class="col-md-10" value="<?php echo $row['gender']?>">
            <option>male</option>
            <option>female</option>
            <option>other</option></select>
       
          </div>
          <div class="col-md-6">
            <span class="col-md-6"><b>Date of Birth</b></span>
            <input type="date" name="dob" id="" class="col-md-10" value="<?php echo $row['dob']?>">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <p  class="m-0"><b>Family Member's </b></p>
            <textarea class="form-control" name="family" value="<?php echo $row['family']?>" ></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p  class="m-0"><b>Village</b></p>
          <input type="text" placeholder="1234 main st" name="village" value="<?php echo $row['village']?>">
          </div>
        </div>

      
          <div class="col-md-12">
            <p class="m-0"><b>Police Station</b></p>
          <input type="text" placeholder="Enter police Station" class="col-md-12 m-0" name="police" value="<?php echo $row['police']?>">
          </div>
    
         
   
          <div class="row">
          <div class="col-md-6">
            <p  class="m-0"><b>District</b></p>
            <input type="text" name="district" value="<?php echo $row['district']?>">
           </div>
           <div class="col-md-3 ">
            <p class="m-0"><b>zip</b></p>
            <input type="text" name="zip" value="<?php echo $row['zip']?>">
          </div>
          </div>

          <span  class="m-0"><b>Staff Id one who Activate this card.</b></span>
          <input type="text" placeholder="enter 12-digit staff id" class="col-md-12 m-0" name="staffid" value="<?php echo $row['staffid']?>">
         
          <div class="row">
            <div class="col-md-12">
          <span><b>Image</b></span>
          <input type="file" class="form-control" name="img" value="<?php echo $row['Image']?>"></div>
        </div>
      
        
        <button class="btn btn-info btn-large col-md-3" name="up" type="submit" >submit</button>
      </form> 
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">close</button>
        </div>
  
      </div>
    </div>
  </div>
  
  <?php

if(isset($_POST['up'])){

$studentid=$_POST['studentid'];
$mobile=$_POST['mobileno'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$email=$_POST['email'];
$aadharno=$_POST['aadharno'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$family=$_POST['family'];
$village=$_POST['village'];
$police=$_POST['police'];
$district=$_POST['district'];
$zip=$_POST['zip'];
$staffid=$_POST['staffid'];
$img=$_FILES['img']['name'];

$id=$_GET['id'];

$sql="UPDATE `studentcard` SET `studentid`='$studentid',`mobileno`='$mobile',`firstname`='$firstname',`lastname`='$lastname',`fathername`='$fathername',`mothername`='$mothername',`email`='$email',`aadharno`='$aadharno',`gender`='$gender',`dob`='$dob',`family`='$family',`village`='$village',`police`='$police',`district`='$district',`zip`='$zip',`staffid`='$staffid',`image`='$img' WHERE `id`='$id'";

$result=mysqli_query($con,$sql);

if($result){
  echo"<script>alert('data submit')</script>";
  echo"<script>location.href='studentcard.php'</script>";

}
else{
  echo"<script>alert('error')</script>";
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





    
<div class="container mt-3">
 
    
 
  </div>
  
  























</body>
</html>



