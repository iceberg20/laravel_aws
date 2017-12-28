<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class Report extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function reports(){

        $text_goal = $this->view_daily_goal();
        $goal_configured = $this->has_goal_config();
        $today_time = $this->study_time()->first()->minutes;

        return view('report/report',compact('text_goal', 'goal_configured', 'today_time'));
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

    public function study_time() {
      $time = DB::table('studysections')   
            ->select(DB::raw("SUM(minutes) as minutes"))             
            ->whereDate('s_date', '2017-12-28')
            ->get();

        return $time;
    }
}
