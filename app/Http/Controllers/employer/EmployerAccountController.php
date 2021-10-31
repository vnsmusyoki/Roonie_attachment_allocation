<?php

namespace App\Http\Controllers\employer;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Brian2694\Toastr\Facades\Toastr;

class EmployerAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['verified','auth', 'role:employer']);
    }

    public function employerDashboard()
    {
        return view('theme.employer.dashboard');
    }

    public function companyProfile(){
        return view('theme.employer.company_profile');
    }
    public function storeCompanyProfile(Request $request){
        $rule = [
            'company_name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'company_email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'website_name' => ['required', 'string'],
            'team_size' => ['required', 'string'],
            'category' => ['required'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'logitude' => ['required', 'string'],
            'latitude' => ['required', 'string'],

        ];

        $this->validate($request, $rule);

        $company = new Company;

        // if($request->hasFile('logo')){
        //     $file = $request->file('logo');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() .'.'.$extension;
        //     $image_resize = Image::make($file->getRealPath());
        //     $image_resize->resize(320, 300);
        //     $image_resize->save('uploads/images/', $filename, 60);
        //     $company->logo = 'uploads/images/'.$filename;
        // }
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.$extension;
            $file->move('uploads/images/', $filename);
            $company->logo = 'uploads/images/'.$filename;
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
        $company->save();

        Toastr::success('Company profile created successfully :)','Success');

        return redirect()->route('employer');
    }

    public function postJob(){
        return view('theme.employer.post_job');
    }

}
