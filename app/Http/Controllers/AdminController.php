<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function welcome()
    {
    	if (!Auth::check())
	    {
	       return redirect()->to('/');
	    }
	    else
	    {
    	return view ('pages.admin');	
	    }
    }

    public function index()
    {
        return view('admin');
    }
}
