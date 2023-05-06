<?php

namespace App\Http\Controllers;

use App\Models\Babysitter;
use App\Models\Preschool;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    // public function preschoolsnav() 
    // {
    //     $preschools = Preschool::all();
    //     return view('layout.master', ['preschools' => $preschools]);
    // }

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

public function search(Request $request)
{
    $query = $request->input('search');

    $babysitters = Babysitter::where('first_name', 'like', "%$query%")
        ->orWhere('last_name', 'like', "%$query%")
        // ->orWhere('city', 'like', "%$query%")
        ->get();


    return view('babysitterspage', compact('babysitters'));
}

public function searchPre(Request $request)
{
    $query = $request->input('search');

    $preschools = Preschool::where('first_name', 'like', "%$query%")
        ->orWhere('last_name', 'like', "%$query%")
        // ->orWhere('city', 'like', "%$query%")
        ->get();


    return view('preschoolspage', compact('preschools'));
}
}
