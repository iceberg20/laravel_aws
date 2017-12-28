<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Report extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function reports(){
        $text_goal = $this->view_daily_goal();
        $goal_configured = $this->has_goal_config();

        return view('report/report',compact('text_goal', 'goal_configured'));
    }

    public function get_goal(){
        $id = auth()->id();
        $user = User::where('id',$id)->first();
        $goal = $user->daily_goal;
        return $goal;
    }

    public function has_goal_config() {
        $goal = $this->get_goal();
        $output = false;
        if($goal>0) {
            $output = true;
        }
        else { 
            $output = false;
        }
        return $output;
    }
    
    public function view_daily_goal()
    {
        $goal = $this->get_goal();
        $text_goal = "0";
        if( $this->has_goal_config() ){
            $text_goal = (string)$goal;
            $text_goal = $text_goal."h";
        }

        return $text_goal;
    }

    public function study_time() {
     	$time = DB::table('studysections')
                ->selectRaw('select sum(minutes) as Horas
        from Study_section where s_date = curdate()')
                ->get();
        dd($time);
    }
}
