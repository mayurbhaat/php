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

    <button class="btn btn-info"><a href="/">insert page</a></button> 

   <div class="container">
    <div class="row">
       
     
     <table class="table table-bordered">

        <tr>
            <th>id</th>
            <th>gameimg</th>
            <th>gamename</th>
            <th>gameprice</th>
            <th>delete</th>
            <th>edit</th>
        </tr>

        @foreach ($jarvis as $row)
           <tr>
            <td>{{$row -> id}}</td>
            <td><img src="img/{{$row->gameimg}}" alt="" style="height: 100px;width: 50px"></td>
            <td>{{$row -> gamename}}</td>
            <td>{{$row -> gameprice}}</td>
            <td><a href="delete/{{$row->id}}"><button>delete</button></a></td>
            <td><a href="update/{{$row->id}}"><button>update</button></a></td>
          
            
           </tr>


       @endforeach


     </table> 
   
    </div>
   </div>
    
</body>
</html>