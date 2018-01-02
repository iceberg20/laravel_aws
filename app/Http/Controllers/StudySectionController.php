<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studysection;
use Auth;
use DB;

class StudySectionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $id = auth()->id();        
    	$s_sections = Studysection::where('user_id', $id)
                ->orderBy('id', 'description')->get();
        foreach($s_sections as $section){
            $section->time = substr($section->time,11);             
        }

    	return view('studysection.index', compact('s_sections'));
    }
    
    public function show(Studysection $studysection){

    	return view('studysection.show', compact('studysection'));
    }

    public function create(Studysection $studysection){

    	return view('studysection.create', compact('studysection'));
    }

    public function store() {
        $this->validate(request(),[
            'subject' => 'required',
            'description' => 'required',
            'time' => 'required',
            's_date' => 'required'
            ]);

        $time = request('time'); 
        $hour = substr($time,0,2);
        $h = (int) $hour;
        $h = $h*60;
        $minutes = substr($time,-2);
        $m = (int) $minutes;
        $total = $m+$h;
        
        Studysection::create(['subject' => request('subject'), 
                              'description' => request('description'),
                                     'minutes' => $total, 
                                     's_date' => request('s_date'),
                                     'user_id' => auth()->id()
                                     ]);


        return redirect('/studysection');
    }


}
