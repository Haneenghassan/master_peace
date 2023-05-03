<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
  
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $users =User::all();
        return view('auth.register',compact('users'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // $photoPath = $request->file('profil_photo')->store('public/image');

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin'=>$request->is_admin,
            // 'photo' => $photoPath,


          
        ]);

        // $user = new User();
        //  $user->name = $request->name;
        //  $user->email = $request->email;
        //   $user->password = Hash::make($request->password);
        //   $user->is_admin = $request->is_admin;
        //   $profil_photo = $request->file('profil_photo')->getClientOriginalName();
        //   $request->file('profil_photo')->storeAs('public/image', $profil_photo);
        //   $user->profil_photo = $profil_photo;

       
        // event(new Registered($user));
        

       

      if ($user->is_admin =='0' || $user->is_admin =='2' || $user->is_admin =='3' ){
            Auth::login($user);
        return redirect()->intended(RouteServiceProvider::USERS);
        }
        else{
            Auth::login($user);
            return redirect()->intended(RouteServiceProvider::HOME);
 
        }

        // return redirect(RouteServiceProvider::USERS);

    }
}
