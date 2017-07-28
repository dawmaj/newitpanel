<?php

namespace App\Http\Controllers;
use Auth;
use App\AddTask;
use Carbon\Carbon;
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

    public function store(Request $request)
    {
        $user = new AddTask();
        $user->user_id = Auth::id();
        $user->issue = $request->input('issue');
        $user->section = $request->section;
        $user->about = $request->input('about');
        $user->description = $request->input('description');
        $user->save();

        return "DODANE";
    }

}
