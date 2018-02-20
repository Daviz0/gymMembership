@extends ('layouts/app')

@section ('content')
<!DOCTYPE html>
<html lang="en">
  <body>
    <div class="row justify-content-center" align="left">		
		<div class="col-md-7">	
	    	<h1>Members</h1>

	    	<hr>
	    	<div class="form-group">    		  		
	    		<form method="POST" action="/download">

	                @csrf
					<button type="submit" class="btn btn-primary">Export Members</button>
				</form>	
			</div>
	        <table class="table table-hover">
			    <thead>
			    	<tr>
			    		 @include ('layouts.tabHeader')		      
			    	</tr>
			  	</thead>
			  	<tbody>
			  		@foreach ($people as $person)		  		  	
			    		<tr>
		      				 @include ('layouts.tabContent')	
						</tr>
			    	@endforeach	
			  	</tbody>
			</table>     
		</div>	
    </div>
  </body>
</html>


@endsection 