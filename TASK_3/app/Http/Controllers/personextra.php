<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personextra extends Controller
{   
    public function personList(){
       
        $person = array();
            for($i=0; $i<5; $i++){
                    $person = array(
                        "email" => "person" . ($i+1)."@gmail.com",
                        "password"=>1234
        
                    );
                   $persons[] = (object)$person;
        
                }
                //return view('contact')->with('person',$persons);
            }        
    public function loginVeiw(){
        return view('login');
    }

    public function login(Request $request){
        $validate = $request->validate([
            "email"=>"required",
            "password"=>"required"
        ]
        );
        $person = array();
            for($i=0; $i<5; $i++){
                    $person = array(
                        "email" => "person" . ($i+1)."@gmail.com",
                        "password"=>1234
        
                    );
                   $persons[] = (object)$person;
        
                }
            foreach($persons as $p){
                    if($p->email == $request->email && $p->password == $request->password){
                        return redirect()->to('/home');
                    }
                    else{
                        return redirect()->to('/login?msg ="wrong"');
                    }
            }

        //return view('login')->with('request',$request);
        //return view('login');
    }
    public function registrationVeiw(){
        return view('registration');
    }

    public function registration(Request $request){
        $validate = $request->validate([
            "email"=>"required",
            "address"=>"required",
            "name"=>"required",
            "age"=>"required"
            
        ],
        ['name.required'=>"Enter your name 1st"]
        );
        return view();
    }
    // public function contactVeiw(){
    //     return view('contact');
    // }

    public function contact(Request $request){
        $validate = $request->validate([
            "email"=>"required",
            "comment"=>"required",
            
            
        ],
        ['email.required'=>"Enter your name 1st"]
        );
        return view();
    }

}