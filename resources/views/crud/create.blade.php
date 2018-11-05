@extends('dashboard/master')
@section('create');
<h1>Create Product form</h1>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form method="POST" action="{{route('product.insert')}}">
				@csrf
				<label>Register Form</label>
				<div class="form-group">
					<label>Product Name</label>
					<input type="text" name="name" value="" placeholder="Product Name" class="form-control">
				</div>
				<div class="form-group">
					<label>Product size</label>
					<input type="text" name="size" value="" placeholder="Product size" class="form-control">
				</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Register" class="btn btn-primary">
						<input type="button" name="exit" value="Exit" class="btn btn-danger">		
						
					</div>
					

			</form>
			
		</div>
		
	</div>
</div>

@endsection