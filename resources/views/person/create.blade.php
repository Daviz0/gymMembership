@extends('layouts.app')
@if (session('status'))
	<div class="alert alert-success">
    	{{ session('status') }}
	</div>
@endif
@section ('content')
	<div class="row justify-content-center" align="left">		
		<div class="col-md-7">		
		

			<h1>Register a Member</h1>

			<hr>

			<form method="POST" action="/people">

				{{ csrf_field() }} 

				<div class="form-group">
					<label for="firstName">First Name:</label>
			    	<input type="text" class="form-control" id="firstName" name="firstName">
				</div>


				<div class="form-group">
					<label for="middleName">Middle Name:</label>
			    	<input type="text" class="form-control" id="middleName" name="middleName">
				</div>

				<div class="form-group">
					<label for="lastName">Last Name:</label>
			    	<input type="text" class="form-control" id="lastName" name="lastName">
				</div>

				<div class="form-group">
					<label for="dob">Date of Birth:</label>
			    	<input type="Date" class="form-control" id="dob" name="dob">
				</div>		

				<div class="form-group">
					<label for="email">Email Address:</label>
			    	<input type="Email" class="form-control" id="emailAddress" name="emailAddress">
				</div>		

				<div class="form-group">
					<label for="telephone">Telephone:</label>
			    	<input type="Telephone" class="form-control" id="telephone" name="telephone">
				</div>				
				
				<div class="form-group">
					<label for="address1">Street Address 1:</label>
			    	<input type="Address" class="form-control" id="address1" name="address1">
				</div>				
				<div class="form-group">
					<label for="address2">Street Address 2:</label>
			    	<input type="Address" class="form-control" id="address2" name="address2">
				</div>	
				<div class="form-group">
					<label for="address3">Street Address 3:</label>
			    	<input type="Address" class="form-control" id="address3" name="address3">
				</div>
				<div class="form-group">
					<label for="address4">Town:</label>
			    	<input type="Address" class="form-control" id="address4" name="address4">
				</div>	
				<div class="form-group">
					<label for="address5">County:</label>
			    	<input type="Address" class="form-control" id="address5" name="address5">		  
				</div>	
				<div class="form-group">
					<label for="postCode">Post Code:</label>
			    	<input type="String" class="form-control" id="postCode" name="postCode">
				</div>					

				<div class="form-group">
					<label for="cycle">Payment Cycle:</label><br>						 
					<select id="paymentCycle" name="paymentCycle">
	        			<option value="">Choose...</option>
	   				    <option value="1">Annual</option>
	        			<option value="12">Monthly</option>        			  
	      			</select>
				</div>

				<label for="gender">Gender:</label>		
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="radio" name="gender" id="gender" value="M" checked>
						<label class="form-check-label" for="gender">
						    Male
						</label>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="F">
						<label class="form-check-label" for="gender">
							Female
						</label>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="O">
						<label class="form-check-label" for="gender">
							Other
						</label>
					</div>

				</div>

				<input type="hidden" name="amountDue" value="100.00" id="amountDue"> 
				<input type="hidden" name="amountOutstanding" value="100.00" id="amountOutstanding">

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>


				@include('layouts.errors')
				
			</form>		
		</div>			
	</div>
@endsection