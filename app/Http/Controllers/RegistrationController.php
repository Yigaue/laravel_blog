<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
  public function create() {

    return view('sessions.create');
  }
public function store (){
    
    // validate users input
    $this->validate(request(),[
        'name'=>'required', 
        'email'=>'required|email',
        'password'=>'required|confirmed'
        ]);
        
     $user =   User::create(request(['name', 'email', 'password']));
    // create user
        auth()->login($user);
        return redirect ('/');
}

}
