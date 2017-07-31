<?php

namespace App\Http\Controllers;
use App\ShowTask;
use App\AddTask;
use App\User;
use Auth;
use DB;
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
        //$users = ShowTask::find($tasks->id);
	    	return view('pages.showtask',['tasks' => $tasks]);
    	}
   	}
   	public function index()
    {
        return view('showtask');
    }
}
