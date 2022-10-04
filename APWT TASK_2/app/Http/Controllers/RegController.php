<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function registration(){
        return view('registration.registration');
    }
    
    public function registrationSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            "id"=>"required",
            'dob'=>'required',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
    );
        return $request;
    }

    public function login(){
        return view('registration.login');
    }

    public function loginSubmitted(Request $request){
        $validate = $request->validate([
            'email'=>'email',
            'password'=>'required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/'
        ]);

        $loginCombinations = array("sifat@gmail.com"=>"siFat2277#", "abc@gmail.com"=>"aBc#12345678");
        $found = false;
        $emailinput = $request->input('email');
        $passwordinput = $request->input('password');
        foreach($loginCombinations as $email => $password){
            if($emailinput == $email && $passwordinput== $password){
                echo "Login Successful!!";
                $found = true;
                break;
            }
        }

        if(!$found){
            echo "No user found!!";
            }
            
    }

    public function contact(){
        return view('registration.contact');
    }

    public function contactSubmitted(Request $request){
        $validate = $request->validate([
            
            'email'=>'email',
            'massage'=>'required|min:5'
        ],
    );
        return $request;
    }

}
