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
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-6">
      <form method="POST" action="go">
      @csrf
      <span>phonename</span>
      <input type="text" name="pn" class="form-control">
      <span>phonestock</span>
      <input type="text" name="ps" class="form-control">
      <span>phoneprice</span>
      <input type="number" name="pp" class="form-control">
      <button class="btn btn-info">SUBMIT</button>
      </form>

    </div>

    </div></div>
    
</body>
</html>