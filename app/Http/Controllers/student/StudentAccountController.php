<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\StudentProfile;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
class StudentAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:student', 'verified']);
    }

    public function index()
    {
        return view('students.dashboard');
    }
    public function feestatement()
    {
        return view('students.feestatement');
    }
    public function accountpassword()
    {
        return view('students.account-password');
    }
    public function editprofile()
    {
        $student = StudentProfile::where('student_id', auth()->user()->id)->count();
        if($student == 1){
            Toastr::error('You have already created Your details.Consider Updating the record', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }else{
            return view('students.edit-profile');
        }

    }
    public function updateprofile(Request $request)
    {

        $this->validate($request, [
            'school_name' => 'required',
            'course_studying' => 'required',
            'year_of_study' => 'required',
            'picture' => 'required|image| mimes:png,jpeg, jpg|max:10080'
        ]);

        $student = new StudentProfile;
        $student->student_id = auth()->user()->id;
        $student->school = $request->input('school_name');
        $student->year_of_study = $request->input('year_of_study');
        $student->course = $request->input('course_studying');
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('studentprofiles', $filenameToStore, 'public');
        $student->picture = $filenameToStore;
        $student->save();

        Toastr::success('Profile has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function allattachments(){
        $categories = Job::all();
        return view('students.all-attachments', compact('categories'));
    }
}
