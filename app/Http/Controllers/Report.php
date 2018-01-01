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
        $today_time_text = $this->study_time()->first()->minutes;
        if($today_time_text == null)
            $today_time_text = "You did not study today!";
        else
            $today_time_text = "You studied ".$today_time_text." minutes  today!";
        

        return view('report/report',compact('text_goal', 'goal_configured', 'today_time_text'));
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
      $id = auth()->id();
      $today = date('Y-m-d');
      $time = DB::table('studysections') 

            ->select(DB::raw("SUM(minutes) as minutes"))             
            ->whereDate('s_date', $today)
            ->where('user_id', '=', $id )
            ->get();


        return $time;
    }
}
