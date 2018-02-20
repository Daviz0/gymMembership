<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\people;	
use Response;

class PeopleController extends Controller
{
    // Prevent pages being uses unless logged in
	public function __construct()
    {
        $this->middleware('auth');
    }


    
    // Page to add a member to the database
    public function create()
    {

    		return view('person.create');
    }
	

    
    // Member Succesfully Added to the System
	public function success()
    {
    	return view('person.success');
    }



    // Display a list of Members Currently on the System
	public function view()
    {
    	$people = people::orderby('created_at','desc')->get();

    	return view('person.viewall',compact('people'));
    }

  

    // Store the member in the database
    public function store()
    {

    	// Validate this
    	$this->validate(request(), [

    		'firstName' 	=> 'required',
    		'lastName'  	=> 'required',
    		'dob'  			=> 'required',
    		'emailAddress' 	=> 'required',
    		'address1' 		=> 'required',
    		'address4' 		=> 'required',
			'address5' 		=> 'required',
			'postCode' 		=> 'required',
    		'gender'  		=> 'required',    		
    		'paymentCycle'  => 'required'

    	]);

		// Post Create Request Format
		people::create(request(['firstName','lastName','middleName','dob','emailAddress','telephone','address1','address2','address3','address4','address5','postCode','gender','paymentCycle','amountDue','amountOutstanding']));

		// Redirect to the home Page
    	return Redirect('/person/success');

    }


    // amend an existing member
	public function amend(people $person)
    {
    	
    	return view('person.amend', compact('person'));
    }

    

    public function update(request $request,people $person)
    {

    	// Validate this
    	$this->validate(request(), [

    		'firstName' 			=> 'required',
    		'lastName'  			=> 'required',
    		'dob'  					=> 'required',
    		'emailAddress'		 	=> 'required',
    		'address1' 				=> 'required',
    		'address4' 				=> 'required',
			'address5' 				=> 'required',
			'postCode' 				=> 'required',
    		'gender'  				=> 'required',    		
    		'amountOutstanding'		=> 'required',
    		'paymentCycle'  		=> 'required'

    	]);

		// Post Update

		$person->update($request->all());

		// Redirect to the home Page
    	return Redirect('/person/success');

    }

    public function download()
	{
	    $headers = [
	            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
	        ,   'Content-type'        => 'text/csv'
	        ,   'Content-Disposition' => 'attachment; filename=members.csv'
	        ,   'Expires'             => '0'
	        ,   'Pragma'              => 'public'
	    ];

	    $list = people::all()->toArray();

	    # add headers for each column in the CSV download
	    array_unshift($list, array_keys($list[0]));

	   $callback = function() use ($list) 
	    {
	        $FH = fopen('php://output', 'w');
	        foreach ($list as $row) { 
	            fputcsv($FH, $row);
	        }
	        fclose($FH);
	    };

	    return Response::stream($callback, 200, $headers);
	}
    
}
