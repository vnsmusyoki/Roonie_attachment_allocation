<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:student', 'verified']);
    }

    public function index(){
        return view('students.dashboard');
    }
    public function feestatement(){
        return view('students.feestatement');
    }
    public function accountpassword(){
        return view('students.account-password');
    }
    public function editprofile(){
        return view('students.edit-profile');
    }
    public function updateprofile(Request $request){

        $this->validate($request,[
            'school_name'=>'required',
            'course_studying'=>'required',
            'year_of_study'=>'required',
            'picture'=>'required|image| mimes:png,jpeg, jpg|max:10080'
        ]);
    }
}
