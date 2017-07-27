<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AddTaskController extends Controller
{
    public function welcome()
    {
    	if (!Auth::check())
	    {
	       return redirect()->to('/');
	    }
	    else
	    {
    	return view ('pages.addtask');	
	    }
    }

    public function index()
    {
        return view('addtask');
    }
}
