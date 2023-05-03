<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Babysitter;
use App\Models\Preschool;
use App\Models\Reservation;
use App\Models\Schoolimg;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{

    public function index()
    {
        
            $preschools=Preschool::get();
            return view('profile.index',compact('preschools'));  
   
    }


    public function indexbaby()
    {
    
        $babysitters=Babysitter::get();
        return view('profile.indexBaby',compact('babysitters'));  


   
    }
    

    public function create() 
     {
       
        return view('profile.create');       
     }


     public function show( Request $request, $id) 

     {
       
        $babysitter=Babysitter::with('reservations')->find($id);
        
        if($babysitter) {
            $reservations= $babysitter->reservations;
            return view('profile.indexBaby',compact('babysitter', 'reservations'));
        }
        else{
         return  abort(404);
        }
        
     }

     public function showPreschool( Request $request, $id) 

     {
       
        
        $preschool=Preschool::with('reservations')->find($id);
        if($preschool){
           
            $reservationspre= $preschool->reservations;
            return view('profile.index',compact('preschool', 'reservationspre'));
        }
        else{
         return  abort(404);
        }
        
     }



     public function store(Request $request)
     {
   if(auth()->user()->is_admin == '3' ) {
        $babysitter = new Babysitter();

        $babysitter->first_name = $request->input('first_name');
        $babysitter->last_name = $request->input('last_name');
        $babysitter->mobile = $request->input('mobile');
        $babysitter->Description = $request->input('description');
        $babysitter->user_id = $request->user()->id;
        $img = $request->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('public/image', $img);
        $babysitter->img = $img;
        $babysitter->save();

        return redirect()->route('profile.show',['id'=>$babysitter->id]); 

        }else{
            $preschool = new Preschool();

            $preschool->first_name = $request->input('first_name');
            $preschool->last_name = $request->input('last_name');
            $preschool->manegerName = $request->input('manegerName');
            $preschool->Description = $request->input('description');
            $preschool->mobile = $request->input('mobile');
            $preschool->user_id = $request->user()->id;
            $img = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/image', $img);
            $preschool->img = $img;
            $preschool->save();

            $preschoolimg = New Schoolimg();

           foreach( $request->file('images') as $image){
            $imageName = $image->getClientOriginalName();
            $image->move( public_path('image'), $imageName);

            $newImage = Schoolimg::create([
                'image'=>$imageName,
                'preschool_id'=>$preschool->id,
            ]);
            $allImages [] = $imageName;
        }
        $preschoolimg->save();
        // dd(public_path('image'));

        
    
               
        return redirect()->route('profile.showPreschool',['id'=>$preschool->id]); 
  
        }
     }
    /**
     * Display the user's profile form.
     */
   

    public function  editBabysitter ($id){
        $babysitter = Babysitter::findorfail($id);
       return view('profile.updateProfile',compact('babysitter')) ;


    }


    public function updateprofile(Request $request, $id){


        $babysitter = Babysitter::findorfail($id);

        if ($request->hasFile('img')) {
            $img = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/image', $img);
        } else {
            $img = $babysitter->img; // use the existing img if no file was uploaded
        }

        $babysitter->first_name =$request->first_name;
        $babysitter->last_name =$request->last_name;
        auth()->user()->email = $request->user()->email;       
        $babysitter->description =$request->description;
       $babysitter->mobile=$request->mobile;
       $babysitter->img=$img;
       $babysitter->save();
      return redirect()->route('profile.show',['id'=>$babysitter->id]); 

    }

    public function  editPreschool ($id){
        $preschool = Preschool::findorfail($id);
       return view('profile.updateProfile',compact('preschool')) ;


    }

    public function updatePreschool(Request $request, $id){

        $preschool = Preschool::findorfail($id);
       // Edit images slider
        if ($request->hasFile('images')) {
            // Delete all existing images
            $preschool->schoolimgs()->delete();
        
            // Loop through each new image and create a new SchoolImg instance
            foreach ($request->file('images') as $file) {
                $img = $file->getClientOriginalName();
                $file->move( public_path('image'), $img);
        
                $schoolimg = new SchoolImg(['image' => $img]);
                $preschool->schoolimgs()->save($schoolimg);
            }
        }

        // Edit profile Picture
        if ($request->hasFile('img')) {
            $img = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/image', $img);
        } else {
            $img = $preschool->img; // use the existing img if no file was uploaded
        }

        $preschool->first_name =$request->first_name;
        $preschool->last_name =$request->last_name;
        auth()->user()->email = $request->user()->email;       
        $preschool->description =$request->description;
        $preschool->mobile=$request->mobile;
        $preschool->img=$img;
        
        
        
// Create new schoolimgs records for the uploaded images
$preschool->save();


      return redirect()->route('profile.showPreschool',['id'=>$preschool->id]); 

    }

    public function edit(Request $request): View
    {
       
        return view('profile.edit', [
            'user' => $request->user(),

        ]);
     
    }



    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
       
        $request->user()->save();

        return Redirect::route('profile.indexbaby')->with('status', 'profile-updated');
    }
    


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/landing');
    }
}
