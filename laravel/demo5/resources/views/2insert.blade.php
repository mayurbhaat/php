<!DOCTYPE html>
<html lang="en">
<head>  <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
     <div class="row">
     
        <form method="POST" action="gogo" enctype="multipart/form-data">

        @csrf

        <span>movieimg</span>
      <input type="file"    name="mimg"     class="form-control">

        <span>moviename</span>
        <input type="text"    name="mname"     class="form-control">

        <span>moviebuget</span>
        <input type="number"    name="mbuget"     class="form-control">



        <br>
        <button class="btn btn-dark">submit </button>
        </form>
  


     </div>   
    </div>
</body>
</html>