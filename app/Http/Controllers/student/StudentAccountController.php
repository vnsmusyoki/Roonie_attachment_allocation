<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Company;
use App\Models\Course;
use App\Models\Job;
use App\Models\StudentProfile;
use App\Models\User;
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
        $completedsetup = StudentProfile::where('student_id', auth()->user()->id)->count();
        if ($completedsetup == 0) {
            return redirect('student/edit-profile');
        } else {
            $completeddata = StudentProfile::where('student_id', auth()->user()->id)->get()->first();

            return view('students.dashboard', compact('completeddata'));
        }
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
        if ($student == 1) {
            Toastr::error('You have already created Your details.Consider Updating the record', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        } else {
            $courses = Course::all();
            return view('students.edit-profile', compact('courses'));
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

        $updateuser = User::findOrFail(auth()->user()->id);
        $updateuser->picture = $filenameToStore;
        $updateuser->save();

        Toastr::success('Profile has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('student');
    }
    public function allattachments()
    {
        $categories = Job::where('attachment_status', "Active")->get();
        return view('students.all-attachments', compact('categories'));
    }
    public function applyattachment($id)
    {

        $job = Job::findOrfail($id);

        $company = Company::where('manager_id', $job->company_id)->get()->first();

        return view('students.apply-attachment-link', compact(['job', 'company']));
    }
    public function uploadattachmentdetails(Request $request)
    {

        $this->validate($request, [
            'description' => 'required',
            'uploaded_cv' => 'required| mimes:pdf,PDF,docx,doc|max:10080',
            'attachment_letter' => 'required| mimes:pdf,docx, doc, PDF|max:10080',
            'attachmenttask' => 'required'
        ]);

        $job = Job::findOrfail($request->input('attachmenttask'));

        $company = Company::where('manager_id', $job->company_id)->get()->first();
        $application = new Application;
        $fileNameWithExt = $request->uploaded_cv->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->uploaded_cv->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->uploaded_cv->storeAs('studentcvs', $filenameToStore, 'public');
        $application->uploaded_cv = $filenameToStore;
        $fileNameWithExt = $request->attachment_letter->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->attachment_letter->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->attachment_letter->storeAs('attachmentletters', $filenameToStore, 'public');
        $application->attachment_letter = $filenameToStore;
        $application->student_id = auth()->user()->id;
        $application->student_description = $request->input('description');
        $application->application_status = "Waiting";
        $application->company_id = $company->id;
        $application->attachment_id = $request->input('attachmenttask');
        $application->save();

        Toastr::success('Profile has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('student/my-applications');
    }

    public function allapplications()
    {
        $applications = Application::where('student_id', auth()->user()->id)->get();
        return view('students.all-applications', compact('applications'));
    }
    public function myprofile()
    {
        return view('students.my-profile');
    }
}
