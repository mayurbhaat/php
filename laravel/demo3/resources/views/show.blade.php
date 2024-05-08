<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <table border="1px">
        <tr>
            <tr>phonename</tr>
            <tr>phonestock</tr>
            <tr>phoneprice</tr>
         </tr>

@foreach($modi as $row)

<tr>
    <td>{{$row -> id}}</td>
    <td>{{$row -> phonename}}</td>
    <td>{{$row -> phonestock}}</td>
    <td>{{$row -> phoneprice}}</td>
    <td><a href="delete/{{$row -> id}}">delete</a></td>
</tr>

@endforeach


</table>
<center>
</body>
</html>