




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

<table>
    <tr>
        <th>S.L</th>
        <th>name</th>
        <th>student id.</th>
        <th>phone</th>
        <th>staff id</th>
        
    </tr>

<?php

$sql="SELECT `id`, `u_card`, `u_f_name`, `u_l_name`, `u_father`, `u_aadhar`, `u_birthday`, `u_gender`, `u_email`, `u_phone`, `u_dist`, `u_village`, `u_police`, `u_pincode`, `file`, `u_mother`, `u_family`, `staff_id`, `image`, `uploaded` FROM `card_activation` WHERE 1";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>
   
   <tr>
   <td><?php echo $row['id']?></td>
   <td><?php echo $row['u_f_name']?><?php echo $row['u_l_name']?></td>
   <td><?php echo $row['u_card']?></td>
   <td><?php echo $row['u_phone']?></td>
   <td><?php echo $row['staff_id']?></td>


   </tr>





<?php

}


?>


</table>


    
</body>
</html>

