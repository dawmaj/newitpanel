<?php

namespace App\Http\Controllers;
use App\ShowTask;
use App\AddTask;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowTaskController extends Controller
{
    public function show()
    {
    	if (!Auth::check())
	    {
	       return redirect()->to('/');
	    }
	    else
	    {
	    	$tasks = ShowTask::All();
	    	return view('pages.showtask',['tasks' => $tasks]);
    	}
   	}
   	public function index()
    {
        return view('showtask');
    }
}
