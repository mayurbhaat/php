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




<div class="container">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="/jaja" method="post" enctype="multipart/form-data">
    @csrf

  <input type="hidden" name="id" value="{{$row->id}}">  
 <span>img</span>
 <input type="file" class="form-control" name="pimg"  vaule="{{$row->img}}">
 <br>

 <span>name</span>
 <input type="text"  class="form-control" name="pname" value="{{$row->name}}">

 <span>category</span>
  <select id="category" name="pcat" class="form-control" value="{{$row->category}}">
    <option value="AC">AC</option>
    <option value="TV">TV</option>
    <option value="Refrigerator">Refrigerator</option>
    <option value="laptop">laptop</option>
    <option value="game">game</option>
    <option value="phone">phone</option>
  </select>



 <br>
 
 <span>delete price </span>
<input type="number" class="form-control" name="dprice" value="{{$row->deleteprice}}">
<br>

<span>original price</span>
<input type="number" class="form-control" name="oprice" value="{{$row->originalprice}}">
<br>

<button class="btn btn-info">submit</button>


</form>


</div>

</div>
    
</body>
</html>