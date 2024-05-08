    `<!DOCTYPE html>
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
   <button class="btn btn-info"><a href="insert" >insert page</a></button> 


    <div class="container">
       <div class="row">
        <form method="POST" action="\edit" enctype="multipart/form-data">

            @csrf
      <input type="hidden" name="id" value="{{$row->id}}">      

         <span>gameimg</span>
         <input type="file" name="gimg" class="form-control" value="{{$row->gameimg}}">   

         <span>gamename</span>
         <input type="text" name="gname" class="form-control" value="{{$row->gamename}}">
         
         <span>gameprice</span>
         <input type="number" name="gprice" class="form-control" value="{{$row->gameprice}}">  
         
         <br>
          
         <button class="btn btn-info">submit</button>
        </form>
       </div> 
    </div>
</body>
</html>