@extends('layouts.app')
@if (session('status'))
	<div class="alert alert-success">
    	{{ session('status') }}
	</div>
@endif
@section ('content')
	<div class="row justify-content-center" align="left">		
		<div class="col-md-7">			
			<h1>Amend {{$person->firstName}} {{$person->middleName}} {{$person->lastName}} (Member Number: {{$person->id}})</h1>

			<hr>

			<form method="POST" action="/people/{{$person->id}}">
				{{ method_field('PATCH') }}

				{{ csrf_field() }} 

				<div class="form-group">
					<label for="firstName">First Name:</label>
			    	<input type="text" class="form-control" id="firstName" name="firstName" value="{{$person->firstName}}">
				</div>


				<div class="form-group">
					<label for="middleName">Middle Name:</label>
			    	<input type="text" class="form-control" id="middleName" name="middleName" value="{{$person->middleName}}">
				</div>

				<div class="form-group">
					<label for="lastName">Last Name:</label>
			    	<input type="text" class="form-control" id="lastName" name="lastName" value="{{$person->lastName}}">
				</div>

				<div class="form-group">
					<label for="dob">Date of Birth:</label>
			    	<input type="Date" class="form-control" id="dob" name="dob" value="{{$person->dob}}">
				</div>		

				<div class="form-group">
					<label for="email">Email Address:</label>
			    	<input type="Email" class="form-control" id="emailAddress" name="emailAddress" value="{{$person->emailAddress}}">
				</div>		

				<div class="form-group">
					<label for="telephone">Telephone:</label>
			    	<input type="Telephone" class="form-control" id="telephone" name="telephone" value="{{$person->telephone}}">
				</div>				
				
				<div class="form-group">
					<label for="address1">Street Address 1:</label>
			    	<input type="Address" class="form-control" id="address1" name="address1" value="{{$person->address1}}">
				</div>				
				<div class="form-group">
					<label for="address2">Street Address 2:</label>
			    	<input type="Address" class="form-control" id="address2" name="address2" value="{{$person->address2}}">
				</div>	
				<div class="form-group">
					<label for="address3">Street Address 3:</label>
			    	<input type="Address" class="form-control" id="address3" name="address3" value="{{$person->address3}}">
				</div>
				<div class="form-group">
					<label for="address4">Town:</label>
			    	<input type="Address" class="form-control" id="address4" name="address4" value="{{$person->address4}}">
				</div>	
				<div class="form-group">
					<label for="address5">County:</label>
			    	<input type="Address" class="form-control" id="address5" name="address5" value="{{$person->address5}}">		  
				</div>	
				<div class="form-group">
					<label for="postCode">Post Code:</label>
			    	<input type="String" class="form-control" id="postCode" name="postCode" value="{{$person->postCode}}">
				</div>	


				<div class="form-group">
					<label for="cycle">Payment Cycle:</label><br>						 
					<select id="paymentCycle" name="paymentCycle">
					    
					    @if ($person->paymentCycle=='1')
	   				    	<option value="1" selected>Annual</option>
	   				    @else
	   				    	<option value="1">Annual</option>   				    	
	   				    @endif	


						@if ($person->paymentCycle=='12')
	   				    	<option value="12" selected>Monthly</option>        			  
	   				    @else
	   				    	<option value="12">Monthly</option>
	   				    @endif	

	      			</select>
				</div>


				<label for="gender">Gender:</label>		
				<div class="form-group">
					<div class="form-check">
						
						@if ($person->gender=='M')
							<input class="form-check-input" type="radio" name="gender" id="gender" value="M" checked>
						@else
							<input class="form-check-input" type="radio" name="gender" id="gender" value="M">
						@endif
						
						<label class="form-check-label" for="gender">
						    Male
						</label>
					</div>

					<div class="form-check">
						
						@if ($person->gender=='F')
							<input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="F" checked>
						@else
							<input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="F">
						@endif

						
						<label class="form-check-label" for="gender">
							Female
						</label>
					</div>

					<div class="form-check">

						@if ($person->gender=='O')
							<input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="O" checked>
						@else
							<input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="O">
						@endif
						
						<label class="form-check-label" for="gender">
							Other
						</label>
					</div>

				</div>

				<input type="hidden" name="amountDue" value="{{$person->amountDue}}" id="amountDue"> 

				<div class="form-group">
					<label for="amountOutstanding">Amount Outsanding:</label>
					<input type="text" class="form-control" name="amountOutstanding" value="{{$person->amountOutstanding}}" id="amountOutstanding">
				</div>	

				<div class="form-group">			
					<button type="submit" class="btn btn-primary">Amend</button>
				</div>


				@include('layouts.errors')
				
			</form>
		</div>				
	</div>
@endsection