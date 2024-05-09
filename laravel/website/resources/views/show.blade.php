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
<body style="background-color: gray;">
    <button class=" btn btn-info" style="background-image: url(forest_landscape_hills_grass_field_trees_water_reflection_lake_wallpaper_blue_sky_background_4k_hd_nature-3840x2160.jpg);"><a href="in">insert</a></button>   
<div class="container" >
<div class="row">
 <div class="col-md-12"> 
<table class="table table-bordered">
   
<tr>
    <td>id</td>
    <td>image</td>
    <td>name</td>
    <td>category</td>
    <td>deleteprice</td>
    <td>originalprice</td>
    <td>delete</td>
    <td>update</td>
</tr>

@foreach ($jarvis as $row)
<tr>
    <td>{{$row->id}}</td>
    <td><img src="Product/{{$row->image}}" style="height: 100px;width: 100px;" ></td>
    <td>{{$row->name}}</td>
    <td>{{$row->category}}</td>
    <td>{{$row->deleteprice}}</td>
    <td>{{$row->originalprice}}</td>
    <td class=""><a href="delete/{{$row->id}}"><button>delete</button></a></td>
    <td><a href="update/{{$row->id}}"><button>update</button></a></td>
    

</tr>

@endforeach
</table>




</div>  
</div>
</div>
</body>
</html>