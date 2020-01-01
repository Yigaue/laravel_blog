<?php

namespace App\Http\Requests;

use App\Mail\Welcome;
use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Mail;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // true: since anyone is authorise to do registration
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                
        'name' =>'required',
        'email' => 'required|email',
        'password' => 'required|min:4|confirmed'

        ];
    }

    public function persist()

    {
         $user = User::create(
             
            $this->only(['name', 'email', 'password'])
        
            );
            
            //sign them in
        auth()->login($user);

        //Mail::to($user)->send(new Welcome($user));

    }
}
