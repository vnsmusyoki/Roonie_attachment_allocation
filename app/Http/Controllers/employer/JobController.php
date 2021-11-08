<?php

namespace App\Http\Controllers\employer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('theme.employer.job_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('theme.employer.post_job', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Company $id)
    {
        $rule = [
            'job_title' => ['required', 'string'],
            'job_description' => ['required', 'string'],
            'job_category' => ['required', 'string'],
            'salary' => ['required'],
            'industry' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'qualification' => ['required', 'string'],
            'date' => ['required', 'string'],
            'city' => ['required', 'string'],
            'address' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ];
        $this->validate($request, $rule);
        // dd($request);
        $user = Auth::user()->id;
        // $company = Company::get('id')->pluck('id');
        $job = new Job;
        $job->job_title = $request->input('job_title');
        $job->job_description = $request->input('job_description');
        $job->job_category = $request->input('job_category');
        $job->salary = $request->input('salary');
        $job->industry = $request->input('industry');
        $job->gender = $request->input('gender');
        $job->qualification = $request->input('qualification');
        $job->date = $request->input('date');
        $job->city = $request->input('city');
        $job->address = $request->input('address');
        // $job->company_id = $company;
        if($request->hasFile('image')) {
            $fileNameWithExt = $request->image->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $request->image->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $request->image->storeAs('uploads/images/', $filenameToStore, 'public');
            $job->image = 'uploads/images/'.$filenameToStore;

            }
        $job->save();
            // if($request->hasFile('image')) {
            //     $image = $request->file('image');
            //     // $imageName = $image->getClientOriginalName();
            //     // $fileName =  'uploads/images/' . time() . '-' . $imageName;
            //     // Image::make($image)->resize(1250,750)->save(storage_path('app/public/' . $fileName));
            //     // $image = $request->file('image');
            //     // $img = time().'.'.$image->getClientOriginalExtension();

            //     // $destinationPath = public_path('uploads/images/');
            //     // Image::make($image->getRealPath())->resize(300, 365, function ($constraint) {
            //     //     $constraint->aspectRatio();
            //     // })->save($destinationPath.'/'.$img);
            //     $filename  = time() . '.' . $image->getClientOriginalExtension();
            //     $path = public_path('img/products/' . $filename);
            //     Image::make($image->getRealPath())->resize(468, 249)->save($path);
            //     $job->image = 'img/products/'.$filename;
            //   }


            // Toastr::success('Post added successfully:)', 'Success');


            return redirect()->back()->with('job_created', 'Post added successfully');

        // try {
        //     $job = new Job;
        //     $job->job_title = $request->input('job_title');
        //     $job->job_description = $request->input('job_description');
        //     $job->job_category = $request->input('job_category');
        //     $job->salary = $request->input('salary');
        //     $job->industry = $request->input('industry');
        //     $job->gender = $request->input('gender');
        //     $job->qualification = $request->input('qualification');
        //     $job->date = $request->input('date');
        //     $job->city = $request->input('city');
        //     $job->address = $request->input('address');
        //     if($request->hasFile('image')) {
        //         $image = $request->file('image');
        //         $imageName = $image->getClientOriginalName();
        //         $fileName =  'uploads/images/' . time() . '-' . $imageName;
        //         Image::make($image)->resize(54,53)->save(storage_path('app/public/' . $fileName));
        //         $job->image = $fileName;
        //       }
        //     $job->save();

        //     // Toastr::success('Post added successfully:)', 'Success');


        //     return redirect()->back()->with('job_created', 'Post added successfully');

        //     // return redirect()->route('employer');
        // } catch (\Throwable $e) {
        //     return redirect()->back()->with('error', 'Something Went Wrong!!!');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
