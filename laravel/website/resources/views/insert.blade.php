<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <button class=" btn btn-info"><a href="show">show</a></button> 

<div class="container">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="gogo" method="post" enctype="multipart/form-data">
    @csrf

 <span>img</span>
 <input type="file" class="form-control" name="pimg">
 <br>

 <span>name</span>
 <input type="text"  class="form-control" name="pname" >

 <span>category</span>
  <select id="category" name="pcat" class="form-control">
    <option value="AC">AC</option>
    <option value="TV">TV</option>
    <option value="Refrigerator">Refrigerator</option>
    <option value="laptop">laptop</option>
    <option value="game">game</option>
    <option value="phone">phone</option>
  </select>



 <br>
 
 <span>delete price</span>
<input type="number" class="form-control" name="dprice">
<br>

<span>original price</span>
<input type="number" class="form-control" name="oprice">
<br>

<button class="btn btn-info">submit</button>


</form>


</div>

</div>
    
</body>
</html>