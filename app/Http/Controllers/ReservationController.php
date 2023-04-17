<?php

namespace App\Http\Controllers;

use App\Models\Babysitter;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

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
    dd($reservation);
    // $babysitter =Babysitter::with('reservations')->get();
    // $reservation = Reservation::
    // $babysitter=Babysitter::get();
    // dd($babysitter);

        return view('profile.indexbaby');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $reservations=Reservation::get();
        // return view('profile.indexBaby',compact('reservations'));
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
        $reservation->babysitter_id = $request->input('id');;
        
        // dd($reservation);
        $reservation->save();
        
        // dd($babysitter);
     







    return redirect()->route('reservations.indexbaby'); 

       
        // return redirect()->route('profile.indexbaby'); 
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
        // dd($babysitter);
        return view('reservationForm',compact('babysitter'));

        // return view('reservationForm');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
