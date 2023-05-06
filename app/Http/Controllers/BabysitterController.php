<?php

namespace App\Http\Controllers;

use App\Models\Babysitter;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BabysitterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $Babysitters=Babysitter::get();
        return view('admin.babysitter.index',['Babysitters'=>$Babysitters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

            
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Babysitter  $babysitter
     * @return \Illuminate\Http\Response
     */
    public function show( $id) 
    {
        // $res=Babysitter::with('reservations')->find($id);
        // if($res) {
        //     return view('profile.indexBaby',compact('res'));
        // } 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Babysitter  $babysitter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $Babysitter = Babysitter::where('id',$id)->get();
        return view('admin.babysitter.index',['Babysitter'=>$Babysitter]);
        // $reservation = Reservation::where('id',$id)->get();
        // return view('profile.indexbaby',['reservation'=>$reservation]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Babysitter  $babysitter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        // $img = $request->file('image')->getClientOriginalName();
        // $request->file('image')->storeAs('public/image', $img);



        $babysitters=Babysitter::find($id);

        $babysitters->status=$request->select;
        $babysitters->save();
        return redirect()->back();
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Babysitter  $babysitter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Babysitter::findorfail($id)->delete();
        // return view('admin.preschool.index');
        // return redirect()->back();

        $babysitter = Babysitter::find($id);

       
        if ($babysitter) {
            $babysitter->delete();
            return redirect()->back();
        }
        
        return redirect()->back();
    }
    }

