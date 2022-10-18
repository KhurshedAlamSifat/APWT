<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('contact',compact('students'));
    }

    public function registrationVeiw(){
        return view('registration');
    }

    public function registration(Request $request){
        $validate = $request->validate([
            "email"=>"required",
            "address"=>"required",
            "name"=>"required",
            "age"=>"required",
            "password"=>"required|min:6"
            
        ],
        );
        Student::create($request->all());
        return redirect()->route('contact');
    }
    public function studentDetails(Request $request){
        $student =Student::where('id',$request->id)->first();
        return view('studentDetails')->with("student",$student);
    }

    public function studentEditView(Request $request)
    {
        $student =Student::where('id',$request->id)->first();
        return view('studentEdit')->with("student",$student);
    }

    public function studentEdit(Request $request)
    {
        $validate = $request->validate([
            "email"=>"required",
            "address"=>"required",
            "name"=>"required",
            "age"=>"required"
            
        ],
        ['name.required'=>"Enter your name 1st"]
        );
        $student =Student::where('id',$request->id)->first();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->age = $request->age;
        $student->id = $request->id;
        $student->save();
        return redirect()->route('contact');
       

    }
    public function studentDelete(Request $request)
    {
        $student =Student::where('id',$request->id)->first();
        $student->delete();
        return redirect()->route('contact');

    }

    public function studentDash(){
        return view('studentDash');
    }
}