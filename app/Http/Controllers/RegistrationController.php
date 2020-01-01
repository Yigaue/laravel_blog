<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Mail\Welcome;
use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    public function store(RegistrationRequest $request)
    {
        
        /*--------------------
         | The whole validate rule just below was moved to 
         | the RegistrationRequest class rule method
         |-----------------------------
         */

       
        //validate users input
        // $this->validate(request(), [

        //     // 'name' =>'required',
        //     // 'email' => 'required|email',
        //     // 'password' => 'required|min:4|confirmed'

        // ]);




            
        /*--------------------
         | The whole create user just below was moved to
         | the RegistrationRequest class persist method
         |-----------------------------
         */

        // create and save user
        // $user = User::create(request(['name', 'email', 'password']));
            
        //     //sign them in 
        // auth()->login($user);

        // \Mail::to($user)->send(new Welcome($user));


        $request->persist();

        session()->flash('message','Thanks so much for signin up');

        return redirect()->home();
    }
}
