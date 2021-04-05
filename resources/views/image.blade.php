<!doctype html>
<html >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel Uploading</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<!-- Styles -->
<style>
.container {
margin-top:2%;
}
</style>
</head>
<body>
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<div class="container">
<div class="row">
<div class="col-md-2"> <img src="/32114.svg" width="80" /></div>
<div class="col-md-8"><h2>Laravel Multiple File Uploading With Bootstrap Form</h2>
</div>
</div>
<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="{{ route('addform') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<label for=" Name"> Name</label>
<input type="text" name="name" class="form-control"  placeholder=" Name" >
</div>
<label for=" Surame"> Surame</label>
<input type="text" name="surname" class="form-control"  placeholder="Surname" >
</div>
<label for=" Email"> Email</label>
<div><input type="text" name="email" class="form-control"  placeholder="email" ></div>
</div>
<label for="Name"> photos (can attach more than one):</label>
<br />
<input type="file" class="form-control" name="image"  />
<br /><br />
<input type="submit" class="btn btn-primary" value="Upload" />
</form>
</div>
</div>
</div>
</body>
</html>