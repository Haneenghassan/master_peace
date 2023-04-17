<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Babysitter;
use App\Models\Preschool;
use App\Models\Reservation;
use App\Models\Schoolimg;
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


    public function indexbaby($id)
    {
    
        // $babysitters=Babysitter::findOrFail($id);

        // $reservations=Reservation::get();
        // return view('profile.indexBaby',compact('babysitters')); 
   
    }
    

    public function create() : View
     {
       
        return view('profile.create');       
     }

     public function show( Request $request, $id) 
     {
        $babysitter=Babysitter::find($id);
        return view('profile.indexBaby',compact('babysitter')); 
     }

     public function store(Request $request)
     {
        // dd('hello');
        if(auth()->user()->is_admin == '3' ) {
            //    dd('hello');
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

        // $reservation = new Reservation();
        
        // $reservation->first_name = $request->input('first_name');
        // $reservation->last_name = $request->input('last_name');
        // $reservation->email = $request->input('email');
        // $reservation->mobile = $request->input('mobile');
        // $reservation->start_time = $request->input('start_time');
        // $reservation->end_time = $request->input('end_time');
        // $reservation->child_firstname = $request->input('child_firstname');
        // $reservation->child_lastname = $request->input('child_lastname');
        // $reservation->child_age = $request->input('child_age');
        // $reservation->user_id = $request->user()->id;
        // $reservation->save();


       
        return redirect()->route('profile.indexbaby'); 

        }else{
            $preschool = new Preschool();

            $preschool->first_name = $request->input('first_name');
            $preschool->last_name = $request->input('last_name');
            $preschool->manegerName = $request->input('manegerName');
            // $preschool->profil_photo = $request->input('profil_photo');
            $preschool->Description = $request->input('description');
            $preschool->mobile = $request->input('mobile');
            $preschool->user_id = $request->user()->id;
            $img = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/image', $img);
            $preschool->img = $img;
            $preschool->save();

            $preschoolimg = New Schoolimg();

           foreach( $request->file('images') as $image){
            // dd($image);
            $imageName = $image->getClientOriginalName();
            // dd($imageName);
            $image->move( public_path('image'), $imageName);

            $newImage = Schoolimg::create([
                'image'=>$imageName,
                'preschool_id'=>$preschool->id,
            ]);
            $allImages [] = $imageName;
        }
        $preschoolimg->save();

        
    
        //   return Auth::user()->id;
        // dd(Auth::user()->id);
        // dd($babysitter);        
            return redirect()->route('profile.index');  
        }
     }
    /**
     * Display the user's profile form.
     */
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

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
        // return view('profile.edit',compact('preschool')) ;
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
