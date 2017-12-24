<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Report extends Controller
{
    public function view_daily_goal()
    {
    	$id = auth()->id();
        $user = User::where('id',$id)->first();
        $goal = $user->daily_goal;
        if($goal>0) {
	        $text_goal = (string)$goal;
	        $text_goal = $text_goal."h";
	    }
	    else { 
	    	$text_goal = "Please set your daily goal";
	    	$set_config = true;
    	}
        return view('report/report',compact('text_goal', 'set_config'));
    }
    
}
