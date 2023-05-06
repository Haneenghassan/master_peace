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
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password' => ['required', 'string', 'confirmed', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',Rules\Password::defaults()],
    ]);

    $messages = [
        'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, and one number.',
    ];


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin'=>$request->is_admin,
            


          
        ]);

      
        

       

      if ($user->is_admin =='0' || $user->is_admin =='2' || $user->is_admin =='3' ){
            Auth::login($user);
        return redirect()->intended(RouteServiceProvider::USERS)->with('messages', $messages);
        }
        else{
            Auth::login($user);
            return redirect()->intended(RouteServiceProvider::HOME)->with('messages', $messages);
 
        }


    }

    
}
