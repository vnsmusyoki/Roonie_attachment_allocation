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
        return view('companies.dashboard');
    }
    public function editprofile()
    {
        $company = Company::where('user_id', auth()->user()->id)->count();
        if ($company == 1) {
            Toastr::error('You have already created Your details.Consider Updating the record', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        } else {
            return view('companies.edit-profile');
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
            'company_name' => 'required|max:191',
            'company_email' => 'required|email|max:255|unique:companies',
            'website_name' => 'required',
            'team_size' => 'required',
            'phone' => 'required|digits:10',
            'category' => 'required',
            'county' => 'required',
            'city' => 'required',
            'twitter_link' => 'required',
            'facebook_link' => 'required',
            'about_company' => 'required|string',
            'logitude' => 'required',
            'address' => 'required|string',
            'latitude' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $newcompany = new Company;
        $newcompany->user_id = auth()->user()->id;
        $newcompany->cover = null;
        $newcompany->company_name = $request->input('company_name');
        $newcompany->company_email = $request->input('company_email');
        // $newcompany->phone = $request->input('phone');
        // $newcompany->team_size = $request->input('team_size');
        // $newcompany->website_name = $request->input('website_name');
        // $newcompany->category = implode(',', (array) $request->get('category'));
        // $newcompany->country = $request->input('county');
        // $newcompany->city = $request->input('city');
        // $newcompany->logitude = 22;
        // $newcompany->latitude = 33;
        // $newcompany->about_company = $request->input('about_company');
        // $newcompany->facebook_link = $request->input('twitter_link');
        // $newcompany->twitter_link = $request->input('facebook_link');
        $newcompany->address = $request->input('address');
        $fileNameWithExt = $request->logo->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->logo->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->logo->storeAs('companylogos', $filenameToStore, 'public');
        $newcompany->logo = $filenameToStore;
        $newcompany->save();


        Toastr::success('Profile has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        // return redirect()->route('employer');
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
    public function uploadopportunity(){
        return view('companies.upload-opportunity');
    }
}
