
<div class="contact-agileinfo">
	<div class="container text-center">
		<h2 style="color:black;">Reset your password</h2>
		<hr>
		<div class="col-md-6 contact-right-w3" style="margin-left: 300px;">
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
		</div>

		<div class="row">
			<div class="col-sm-3">

			</div>
			<div class="col-sm-6" style="width: 600px;  border: 5px solid #EDEFEE;border-radius:5px;padding: 50px;margin: 20px;" >
				<form method="post" action="{{URL::asset('changePassword') }}">
					@csrf
					<div class="form-group " style="margin-bottom:30px">
						<input type="text" class="form-control" name="email" placeholder="Enter your email" readonly value="{{$email}}" required>
						
					</div>
                    <div class="form-group " style="margin-bottom:30px">
						<input type="password" class="form-control" name="password" placeholder="Enter your password"  required>
						
					</div>
                    <div class="form-group " style="margin-bottom:30px">
						<input type="password" class="form-control" name="confirm_password" placeholder="Enter your confirm password"  required >
						
					</div>
                    
					
					<div class="form-group" style="margin-bottom:30px">
						<input type="submit" class="btn btn-primary col-sm-12" value="change Password">
					</div>	
				</form>	
				<br><br>
				
			</div>
			<div class="col-sm-3">
				
			</div>
		</div>
		


			
		<div class="col-md-12 contact-right-w3" style="margin-top:10px">
			
		</div>
		<div class="clearfix"></div>
	</div>
</div>
