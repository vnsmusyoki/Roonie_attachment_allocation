<?php

namespace App\Http\Controllers\employer;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Company;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Brian2694\Toastr\Facades\Toastr;
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
        return view('theme.employer.dashboard');
    }

    public function uploadcompanyprofile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_name' => 'required|max:191',
            'company_email' => 'required|email|max:255|unique:companies',
            'website_name' => 'required|max:191',
            'team_size' => 'required|max:191',
            'phone' => 'required|max:2',
            'category' => 'required',
            'country' => 'required',
            'city' => 'required',
            'logitude' => 'required',
            'latitude' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);


        try {
            $user = Auth::user()->id;
            $company = new Company;
            if ($request->hasFile('logo')) {
                $fileNameWithExt = $request->logo->getClientOriginalName();
                $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $Extension = $request->logo->getClientOriginalExtension();
                $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
                $path = $request->logo->storeAs('uploads/images/', $filenameToStore, 'public');
                $company->logo = 'uploads/images/' . $filenameToStore;
            }

            $company->company_name = $request->input('company_name');
            $company->phone = $request->input('phone');
            $company->company_email = $request->input('company_email');
            $company->website_name = $request->input('website_name');
            $company->team_size = $request->input('team_size');
            $company->category = implode(',', (array) $request->get('category'));
            $company->country = $request->input('country');
            $company->city = $request->input('city');
            $company->logitude = $request->input('logitude');
            $company->latitude = $request->input('latitude');
            $company->about_company = $request->input('about_company');
            $company->facebook_link = $request->input('facebook_link');
            $company->twitter_link = $request->input('twitter_link');
            $company->address = $request->input('address');
            $company->user_id = $user; 
            $company->save();

            return redirect()->route('employer')->with('company_created', 'Company added successfully');;
        } catch (\Throwable $th) {
            //throw $th;
            // dd($request);
            return redirect()->back()->with('error', 'Something Went Wrong!!!');
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

        // $rule = [
        //     'company_name' => ['required', 'string'],
        //     'phone' => ['required', 'string'],
        //     'company_email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
        //     'website_name' => ['required', 'string'],
        //     'team_size' => ['required', 'string'],
        //     'category' => ['required'],
        //     'country' => ['required', 'string'],
        //     'city' => ['required', 'string'],
        //     'logitude' => ['required', 'string'],
        //     'latitude' => ['required', 'string'],
        //     'logo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        // ];

        // $this->validate($request, $rule);
        $validator = Validator::make($request->all(), [
            'company_name' => 'required|max:191',
            'company_email' => 'required|email|max:255|unique:companies',
            'website_name' => 'required|max:191',
            'team_size' => 'required|max:191',
            'phone' => 'required|max:2',
            'category' => 'required',
            'country' => 'required',
            'city' => 'required',
            'logitude' => 'required',
            'latitude' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);


        try {
            $user = Auth::user()->id;
            $company = new Company;
            if ($request->hasFile('logo')) {
                $fileNameWithExt = $request->logo->getClientOriginalName();
                $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $Extension = $request->logo->getClientOriginalExtension();
                $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
                $path = $request->logo->storeAs('uploads/images/', $filenameToStore, 'public');
                $company->logo = 'uploads/images/' . $filenameToStore;
            }

            $company->company_name = $request->input('company_name');
            $company->phone = $request->input('phone');
            $company->company_email = $request->input('company_email');
            $company->website_name = $request->input('website_name');
            $company->team_size = $request->input('team_size');
            $company->category = implode(',', (array) $request->get('category'));
            $company->country = $request->input('country');
            $company->city = $request->input('city');
            $company->logitude = $request->input('logitude');
            $company->latitude = $request->input('latitude');
            $company->about_company = $request->input('about_company');
            $company->facebook_link = $request->input('facebook_link');
            $company->twitter_link = $request->input('twitter_link');
            $company->address = $request->input('address');
            $company->user_id = $user;
            // dd($request);
            $company->save();

            return redirect()->route('employer')->with('company_created', 'Company added successfully');;
        } catch (\Throwable $th) {
            //throw $th;
            // dd($request);
            return redirect()->back()->with('error', 'Something Went Wrong!!!');
        }
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
}
