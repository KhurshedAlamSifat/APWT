<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        $message = "Welcome!";
        return view('home')->with('message', $message);
    }

    public function product(){
       
        $names=array("Computer", "Mobile", "Laptop", "Tablet");
        return view('product')->with('names', $names);
    }

    public function ourteam(){
       
        $team = "Organized by AIUB team";
        return view('ourteam')->with('team', $team);
    }

    public function aboutus(){
       
        $about = "ABOUT US";
        return view('aboutus')->with('about', $about);
    }

    public function contactus(){
       
        $contact1 = "contact us : 017********";
        $contact2 = "Email : example@gmail.com";

        return view('contactus')->with('contact1', $contact1) ->with('contact2', $contact2);
    }
}