<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CreateAccountsController extends Controller
{
    public function employer()
    {
        return view('theme.employer.create-account');
    }
    public function registerEmployer(Request $request)
    {
        $rule = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        $this->validate($request, $rule);

        $employer = new User;
        $employer->name = $request->input('name');
        $employer->email = $request->input('email');
        $employer->password = bcrypt($request->input('password'));
        $employer->save();
        $employer->attachRole("employer");

        return  redirect()->route('login');
    }
    public function student()
    {
        return view('auth.student-register');
    }
    public function registerCandidate(Request $request)
    {
        $rule = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
        $this->validate($request, $rule);
        $employer = new User;
        $employer->name = $request->input('name');
        $employer->email = $request->input('email');
        $employer->password = bcrypt($request->input('password'));
        $employer->save();
        $employer->attachRole("student");

        return  redirect()->route('login');
    }
}
