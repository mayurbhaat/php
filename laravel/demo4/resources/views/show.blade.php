<!DOCTYPE html>
<html lang="en">
<head>
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
    <div class="row">
    <div class="col-md-4"></div> 
    <div class="col-md-6">
       <table class="table table-bordered">
        <tr>
          <td>id</td>
          <td>employename</td>
          <td>employepost</td>
          <td>employesalary</td>
          <td>employetime</td>
 

        </tr>

     @foreach ($jarvis as $row) 
     
        <tr>

          <td>{{$row ->id}}</td>
          <td>{{$row ->employename}}</td>
          <td>{{$row ->employepost}}</td>
          <td>{{$row ->employesalary}}</td>
          <td>{{$row ->employetime}}</td>
          <td><a href="delete/{{$row -> id}}">delete</a></td>

          <td><a href="update/{{$row -> id}}">update</a></td>

         

        </tr>

      @endforeach  
    </table>
    </div> 
    </div>
    </div>




</body>
</html>