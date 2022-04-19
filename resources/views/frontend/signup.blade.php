<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">

  <h2>Signup form</h2>

  @if(Session::has('success'))
		<div class="alert alert-dismissible alert-success">
		<!-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> -->
		<p>{{ Session::get('success') }}</p>
		</div>
		@endif

		@if (Session::has('errors'))
		<div class="alert alert-dismissible alert-warning">
		<!-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> -->
		<p>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
		</p>
		</div>
		@endif
  <form action="{{URL::asset('register') }}" method="post">
      @csrf
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>  
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="contact">contact:</label>
      <input type="text" class="form-control" id="contact" placeholder="Enter contact" name="contact" >
    </div>
   
    <button type="submit" class="btn btn-primary">Save</button><br>
    <a href="{{URL::asset('/') }}" style="float-right">login</a><br>
  </form>
</div>