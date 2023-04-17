<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Preschool;
use Illuminate\Http\Request;

class PreschoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preschools=Preschool::get();
        // dd($preschools);
        return view('admin.preschool.index',['preschools'=>$preschools]);
    }

    

    // public function canceled($id){
    //     $preschools=Preschool::find($id);
    //     $preschools->status='canceled';
    //     $preschools->save();


    //     return redirect()->route('admin.preschools.index');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.preschool.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Preschool  $preschool
     * @return \Illuminate\Http\Response
     */
    public function show(Preschool $preschool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Preschool  $preschool
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Preschool::where('id',$id)->get();
        return view('admin.preschool.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Preschool  $preschool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $preschools=Preschool::find($id);
        $preschools->status=$request->select;
        $preschools->save();
        return redirect()->route('admin.preschools.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Preschool  $preschool
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Preschool::findorfail($id)->delete();
        // return view('admin.preschool.index');
        return redirect()->route('admin.preschools.index');
      
    }

    
}




