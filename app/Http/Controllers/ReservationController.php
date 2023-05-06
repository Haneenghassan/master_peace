<?php

namespace App\Http\Controllers;

use App\Models\Babysitter;
use App\Models\Preschool;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
    $reservation = Babysitter::with('reservations')->get();

 
        return view('profile.indexbaby',compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
    //    $preschool=Preschool::find($id);
    //    return view('reservationForm',compact('preschool'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $babysitter = new Babysitter() ;
     
        
        
        $reservation = new Reservation();
        $reservation->first_name = $request->input('first_name');
        $reservation->last_name = $request->input('last_name');
        $reservation->email = $request->input('email');
        $reservation->mobile = $request->input('mobile');
        $reservation->start_time = $request->input('start_time');
        $reservation->end_time = $request->input('end_time');
        $reservation->child_firstname = $request->input('child_firstname');
        $reservation->child_lastname = $request->input('child_lastname');
        $reservation->child_age = $request->input('child_age');
        $reservation->user_id = $request->user()->id;
        $reservation->babysitter_id = $request->input('id');
        
      
        $reservation->save();
        
    
        return redirect()->route('profileuser.show',['id'=>auth()->user()->id]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

        $babysitter = Babysitter::find($id);


        if($babysitter){
            return view('reservationForm',compact('babysitter'));
        }else {
            abort(404);
        }
        

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::where('id',$id)->get();
        return view('profile.indexbaby',['reservation'=>$reservation]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $reservations=Reservation::find($id);
        $reservations->status=$request->select;
        $reservations->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);

       
        if ($reservation) {
            $reservation->delete();
            return redirect()->back()->with('success', 'Reservation deleted successfully');
        }
        
        return redirect()->back()->with('error', 'Reservation not found');
    }
}
