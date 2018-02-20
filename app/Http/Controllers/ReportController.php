<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\people;	

class ReportController extends Controller
{
    // Prevent pages being uses unless logged in
	public function __construct()
    {
        $this->middleware('auth');
    }



    // Go to Report Setup Page
    public function reportSetup()
    {

    	return view('report.setup');
    }



    // Go to Report Results Page
    public function reportResult(Request $request)
    {
    //	$month = 2;

    	$month = $request->input('joinMonth');   	
    	$people = people::whereMonth('created_at',$month)->orderby('created_at','desc')->get();

    	return view('report.result',compact('people'));
    	
    }

}
