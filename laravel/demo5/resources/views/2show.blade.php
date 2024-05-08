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
   <table class="table table-bordered">
    
    <tr>
        <th>id</th>
        <th>movieimg</th>
        <th>moviename</th>
        <th>movieibuget</th>
      


    </tr>
 
    @foreach ($tony as $row)

       <tr>
        <td>{{$row->id}}</td>
         <td><img src="images/{{$row->movieimg}}" style="height: 100px;width: 50px;"></td>
        <td>{{$row->moviename}}</td>
        <td>{{$row->movieibuget}}</td>
        <td><a href="2delete/{{$row->id}}"><button>delete</button></a></td>
        <td><a href="2update/{{$row->id}}"><button>update</button></a></td>
       

       </tr>
     @endforeach  

   </table>
    
</body>
</html>