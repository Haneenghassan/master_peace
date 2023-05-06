<?php

namespace App\Http\Controllers;

use App\Models\Preschool;
use App\Models\Reservation;
use Illuminate\Http\Request;

class PreschoolreservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Preschool::with('reservations')->get();

 
        return view('profile.index',compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $preschool = new Preschool() ;
     
        
        
        $reservation = new Reservation();
        $reservation->first_name = $request->input('first_name');
        $reservation->last_name = $request->input('last_name');
        $reservation->email = $request->input('email');
        $reservation->mobile = $request->input('mobile');
        $reservation->child_firstname = $request->input('child_firstname');
        $reservation->child_lastname = $request->input('child_lastname');
        $reservation->child_age = $request->input('child_age');
        $reservation->user_id = $request->user()->id;
        $reservation->preschool_id = $request->input('id');
        
        $reservation->save();
        
    
        return redirect()->route('profileuser.show',['id'=>auth()->user()->id]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $preschool=Preschool::find($id);
        if( $preschool){
        return view('reservationForm',compact('preschool'));
        }else{
            abort(404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::where('id',$id)->get();
        return view('profile.index',['reservation'=>$reservation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reservations=Reservation::find($id);
        $reservations->status=$request->select;
        $reservations->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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
