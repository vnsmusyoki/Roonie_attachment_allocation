<?php

namespace App\Http\Controllers\employer;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Category;
use App\Models\Company;
use App\Models\Course;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use PDF;

class EmployerAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['verified', 'auth', 'role:employer']);
    }

    public function employerDashboard()
    {
        $checkcompany = Company::where('manager_id', auth()->user()->id)->count();
        if ($checkcompany  == 0) {

            return redirect()->to('employer/edit-profile');
        } else {

            return view('companies.dashboard');
        }
    }
    public function editprofile()
    {
        $company = Company::where('manager_id', auth()->user()->id)->count();
        if ($company == 1) {
            Toastr::error('You have already created Your details.Consider Updating the record', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        } else {
            $categories = Category::all();
            $courses = Course::all();
            return view('companies.edit-profile', compact(['courses', 'categories']));
        }
    }
    public function viewCompanyProfile()
    {
        $profile = Company::all();
        return view('theme.employer.view_company_profile', compact('profile'));
    }

    public function companyProfile()
    {
        return view('theme.employer.company_profile');
    }
    public function storeCompanyProfile(Request $request)
    {
        $this->validate($request, [
            'company_name' => 'required|string|max:191',
            'company_email' => 'required|email|unique:companies',
            'website_name' => 'required',
            'team_size' => 'required',
            'phone' => 'required|digits:10',
            'category' => 'required',
            'county' => 'required',
            'city' => 'required',
            'twitter_link' => 'required',
            'facebook_link' => 'required',
            'about_company' => 'required|string',
            'address' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:6048'
        ]);

        $newcompany = new Company;
        $newcompany->manager_id = auth()->user()->id;
        $newcompany->company_name = $request->input('company_name');
        $newcompany->company_email = $request->input('company_email');
        $newcompany->phone = $request->input('phone');
        $newcompany->team_size = $request->input('team_size');
        $newcompany->website_name = $request->input('website_name');
        $newcompany->category = implode(',', (array) $request->get('category'));
        $newcompany->country = $request->input('county');
        $newcompany->city = $request->input('city');
        $newcompany->about_company = $request->input('about_company');
        $newcompany->facebook_link = $request->input('twitter_link');
        $newcompany->twitter_link = $request->input('facebook_link');
        $newcompany->address = $request->input('address');
        $fileNameWithExt = $request->logo->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->logo->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->logo->storeAs('companylogos', $filenameToStore, 'public');
        $newcompany->logo = $filenameToStore;
        $newcompany->save();


        Toastr::success('Company Profile has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('employer');
    }

    public function postJob()
    {
        return view('theme.employer.post_job');
    }

    public function applicants()
    {
        $applications = Application::with('jobs', 'users')->get();
        // dd($applications);
        return view('theme.employer.applicants', compact('applications'));
    }
    public function shortlist($id)
    {
        $shortlist = Application::find($id);

        $shortlist->status = 'approved';
        $shortlist->save();
        return redirect()->back()->with('shortlisted', 'The student has been shortlisted successfully');
    }
    public function reject($id)
    {
        $shortlist = Application::find($id);

        $shortlist->status = 'rejected';
        $shortlist->save();
        return redirect()->back()->with('error', 'The student Application has been rejected successfully');
    }
    public function closed($id)
    {
        $shortlist = Job::find($id);

        $shortlist->status = 'Closed';
        $shortlist->save();
        return redirect()->back()->with('error', 'The Job Availability has been disabled successfully');
    }
    public function activate($id)
    {
        $shortlist = Job::find($id);

        $shortlist->status = 'Active';
        $shortlist->save();
        return redirect()->back()->with('shortlisted', 'The Job has been activated successfully');
    }


    // Generate PDF
    public function createPDF($id)
    {

        $book = Application::where('id', $id)->firstOrFail();
        $pathToFile = storage_path('app/' . $book->resume);
        return response()->download($pathToFile);
        //return response()->download(public_path('storage/'.$id));
        //PDF file is stored under project/public/download/info.pdf
        // $file= public_path('storage/').$id;

        // $headers = array(
        //           'Content-Type: application/pdf',
        //         );

        // return Response::download($file, 'filename.pdf', $headers);
    }
    public function viewSchoolLetter($id)
    {
        $book = Application::where('id', $id)->firstOrFail();
        $pathToFile = storage_path('app/' . $book->attachment_letter);
        return response()->download($pathToFile);
    }

    public function viewPdf($id)
    {
        $book = Application::where('id', $id)->firstOrFail();

        return view('theme.employer.view_pdf', compact('book'));
    }
    public function uploadopportunity()
    {
        $courses = Course::all();
        $categories = Category::all();
        return view('companies.upload-opportunity', compact(['courses', 'categories']));
    }
    public function uploadattachmentslots(Request $request)
    {

        $this->validate($request, [
            'attachment_title' => 'required|string|max:50',
            'attachment_slots' => 'required|numeric|min:1',
            'appreciation_token' => 'required|numeric|min:00',
            'gender' => 'required',
            'course' => 'required',
            'category' => 'required',
            'attachment_start' => 'required|date_format:Y-m|after_or_equal:' . Carbon::now()->format('Y-m'),
            'attachment_end' => 'required|date_format:Y-m|after_or_equal:attachment_start',
            'task_description' => 'required',
            'requirements_needed' => 'required|string',
            'additional_information' => 'nullable|string'
        ]);

        $attachment = new Job;
        $attachment->job_title = $request->input('attachment_title');
        $attachment->job_description = $request->input('task_description');
        $attachment->slots_needed = $request->input('attachment_slots');
        $attachment->job_category =  implode(',', (array) $request->get('category'));
        $attachment->course =  implode(',', (array) $request->get('course'));
        $attachment->appreciation_token = $request->input('appreciation_token');
        $attachment->attachment_start = $request->input('attachment_start');
        $attachment->attachment_end = $request->input('attachment_end');
        $attachment->gender = $request->input('gender');
        $attachment->qualification = $request->input('requirements_needed');
        $attachment->additional_information = $request->input('additional_information');
        $attachment->attachment_status = "Active";
        $attachment->company_id = auth()->user()->id;
        $attachment->save();

        Toastr::success('Attachment has been uploaded and visible from the main website.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('employer/manage-attachment-slots');
    }

    public function allattachmentslots()
    {
        $attachments = Job::where(['company_id' => auth()->user()->id, 'attachment_status' => "Active"])->get();
        return view('companies.all-attachment-slots', compact('attachments'));
    }
    public function editattachmentslot($id)
    {
        $task = Job::findOrfail($id);
        $courses = Course::all();
        $categories = Category::all();
        return view('companies.edit-attachment-slot', compact(['task', 'courses', 'categories']));
    }
    public function updateattachmentslots(Request $request, $id)
    {
        $this->validate($request, [
            'attachment_title' => 'required|string|max:50',
            'attachment_slots' => 'required|numeric|min:1',
            'appreciation_token' => 'required|numeric|min:00',
            'gender' => 'required',
            'course' => 'required',
            'category' => 'required',
            'attachment_start' => 'required|date_format:Y-m|after_or_equal:' . Carbon::now()->format('Y-m'),
            'attachment_end' => 'required|date_format:Y-m|after_or_equal:attachment_start',
            'task_description' => 'required',
            'requirements_needed' => 'required|string',
            'additional_information' => 'nullable|string'
        ]);

        $attachment = Job::findOrFail($id);
        $attachment->job_title = $request->input('attachment_title');
        $attachment->job_description = $request->input('task_description');
        $attachment->slots_needed = $request->input('attachment_slots');
        $attachment->job_category =  implode(',', (array) $request->get('category'));
        $attachment->course =  implode(',', (array) $request->get('course'));
        $attachment->appreciation_token = $request->input('appreciation_token');
        $attachment->attachment_start = $request->input('attachment_start');
        $attachment->attachment_end = $request->input('attachment_end');
        $attachment->gender = $request->input('gender');
        $attachment->qualification = $request->input('requirements_needed');
        $attachment->additional_information = $request->input('additional_information');
        $attachment->attachment_status = "Active";
        $attachment->company_id = auth()->user()->id;
        $attachment->save();

        Toastr::warning('Attachment has been updated successfuly', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('employer/manage-attachment-slots');
    }
    public function updateopportunityslotstatus($id)
    {

        $task = Job::findOrfail($id);
        $task->attachment_status = "Closed";
        $task->save();

        Toastr::error('Attachment slot has been closed and wont be visible from the website', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('employer/manage-closed-attachment-slots');
    }
    public function closedattachmentslots()
    {
        $attachments = Job::where(['company_id' => auth()->user()->id, 'attachment_status' => "Closed"])->get();
        return view('companies.all-closed-attachment-slots', compact('attachments'));
    }
    public function deleteattachmentslots($id)
    {
        $task = Job::findOrfail($id);
        $task->delete();

        // $jobs = Application::where('job_id', )
        Toastr::error('Attachment slot has been closed and wont be visible from the website', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('employer/manage-closed-attachment-slots');
    }
    public function viewstudentapplications($id){
        $company = Company::where('manager_id', auth()->user()->id)->get()->first();
        $attachment = Application::findOrFail($id);
        $opportunity = Job::findOrFail($attachment->attachment_id);
        $companyid = $company->id;
        $applications = Application::where(['company_id'=>$company->id, 'attachment_id'=>$id])->get();
        return view('companies.view-attachment-applications', compact(['applications', 'opportunity']));
    }

    public function taskviewapplication($id){
        $company = Company::where('manager_id', auth()->user()->id)->get()->first();
        $attachment = Application::findOrFail($id);

        $job = Job::where('id', $attachment->attachment_id)->get()->first();

        $applications = Application::where(['company_id'=>$company->id, 'attachment_id'=>$id])->get();
        return view('companies.view-student-attachment-application', compact(['applications','job','company', 'attachment']));
    }
}
