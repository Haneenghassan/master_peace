<?php

namespace App\Http\Controllers;

use App\Models\Babysitter;
use App\Models\Preschool;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function preschoolsindex() 
    {
        $preschools = Preschool::get();
        return view('preschoolspage' , ["preschools"=>$preschools]);      
    }


public function babysitterindex() 

{
    $babysitters = Babysitter::get();
    return view('babysitterspage' , ["babysitters"=>$babysitters]);      
}
}
