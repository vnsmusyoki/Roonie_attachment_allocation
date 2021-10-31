<?php

namespace App\Http\Controllers\employer;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

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
        return view('theme.employer.post_job');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        ];
        $this->validate($request, $rule);

        $job = new Job;
        $job ->job_title = $request->input('job_title');
        $job ->job_description = $request->input('job_description');
        $job ->job_category = $request->input('job_category');
        $job ->salary = $request->input('salary');
        $job ->industry = $request->input('industry');
        $job ->gender = $request->input('gender');
        $job ->qualification = $request->input('qualification');
        $job ->date = $request->input('date');
        $job ->city = $request->input('city');
        $job ->address = $request->input('address');
        $job ->save();

        Toastr::success('Post added successfully:)', 'Success');
        return redirect()->route('employer');
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
