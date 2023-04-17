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
    public function show( Request $request, $id) 
    {
        // $value = $request->session()->get('key');
 
       
 
        // $users = $this->auth()->user()->find($id);
 
        // return view('profile.index', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Babysitter  $babysitter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if(auth()->user()->id)
        // dd($id);
        $data = Babysitter::where('id',$id)->get();
        return view('admin.babysitter.edit',['data'=>$data]);
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



        $preschools=Babysitter::find($id);

        $preschools->status=$request->select;
        $preschools->save();
        return redirect()->route('admin.babysitters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Babysitter  $babysitter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Babysitter $babysitter)
    {
        //
    }
}
