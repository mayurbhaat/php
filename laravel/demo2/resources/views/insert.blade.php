<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="col-md-12">
      <div class="row">
      <div class="col-md-4"></div>  
      <div class="col-md-4">
        <form method="POST" action="go">
        
         @csrf

        <span>First name</span>
        <input type="text" name="fn" class="form-control">

        <span>Last name</span>
        <input type="text" name="ln" class="form-control">

        <span>Email</span>
        <input type="email" name="em" class="form-control">

        <span>Password</span>
        <input type="password" name="ps" class="form-control">
        <button class="btn btn-info">INSERT</button>
</form>
      </div>  
</div>  
</div>  
    
</body>
</html>