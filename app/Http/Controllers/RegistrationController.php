<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    public function store()
    {
        //validate users input
        $this->validate(request(), [

            'name' =>'required',
            'email' => 'required|email',
            'password' => 'required|min:4|confirmed'

        ]);
            // create and save user
        $user = User::create(request(['name', 'email', 'password']));
            
            //sign them in 
        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        return redirect()->home();
    }
}
