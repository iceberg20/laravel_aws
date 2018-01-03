<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Planning extends Controller
{
    public function planning(){
    	return view('planning.planning');
    }
}
